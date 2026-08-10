/* ================================================================
   Yayasan Darusalam — Main JavaScript
   Handles: Navbar, Hero Carousel, Testimonials, Timeline,
            Progress Bars, Back-to-Top, Scroll Animations
   ================================================================ */

document.addEventListener("DOMContentLoaded", () => {
    /* ── 1. NAVBAR ──────────────────────────────────────────────── */
    const navbar = document.getElementById("navbar");
    const hamburger = document.getElementById("hamburger-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    // Scroll shadow
    const handleNavScroll = () => {
        navbar.classList.toggle("scrolled", window.scrollY > 20);
    };
    window.addEventListener("scroll", handleNavScroll, { passive: true });
    handleNavScroll();

    // Hamburger toggle
    if (hamburger && mobileMenu) {
        hamburger.addEventListener("click", () => {
            const isOpen = mobileMenu.classList.toggle("open");
            hamburger.classList.toggle("open", isOpen);
            hamburger.setAttribute("aria-expanded", isOpen);
            mobileMenu.setAttribute("aria-hidden", !isOpen);
        });

        // Close on mobile link click
        mobileMenu
            .querySelectorAll(".yd-navbar__mobile-link, .yd-navbar__mobile-cta")
            .forEach((link) => {
                link.addEventListener("click", () => {
                    mobileMenu.classList.remove("open");
                    hamburger.classList.remove("open");
                    hamburger.setAttribute("aria-expanded", "false");
                    mobileMenu.setAttribute("aria-hidden", "true");
                });
            });

        // Close on outside click
        document.addEventListener("click", (e) => {
            if (!navbar.contains(e.target)) {
                mobileMenu.classList.remove("open");
                hamburger.classList.remove("open");
                hamburger.setAttribute("aria-expanded", "false");
            }
        });
    }

    // Active nav link on scroll
    const sections = document.querySelectorAll("section[id]");
    const navLinks = document.querySelectorAll(".yd-navbar__link");
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const id = entry.target.id;
                    navLinks.forEach((link) => {
                        link.classList.toggle(
                            "active",
                            link.getAttribute("href")?.includes(`#${id}`),
                        );
                    });
                }
            });
        },
        { rootMargin: "-40% 0px -55% 0px" },
    );
    sections.forEach((s) => observer.observe(s));

    /* ── 2. HERO CAROUSEL ───────────────────────────────────────── */
    const heroCarousel = document.getElementById("hero-carousel");
    if (heroCarousel) {
        const slides = heroCarousel.querySelectorAll(".yd-hero__slide");
        const dots = document.querySelectorAll(".yd-hero__dot");
        const prevBtn = document.getElementById("hero-prev");
        const nextBtn = document.getElementById("hero-next");
        let currentIdx = 0;
        let autoPlayTimer;

        const goTo = (n) => {
            slides[currentIdx].classList.remove("active");
            dots[currentIdx].classList.remove("active");
            dots[currentIdx].setAttribute("aria-selected", "false");

            currentIdx = ((n % slides.length) + slides.length) % slides.length;

            slides[currentIdx].classList.add("active");
            dots[currentIdx].classList.add("active");
            dots[currentIdx].setAttribute("aria-selected", "true");
        };

        const next = () => goTo(currentIdx + 1);
        const prev = () => goTo(currentIdx - 1);

        const resetAuto = () => {
            clearInterval(autoPlayTimer);
            autoPlayTimer = setInterval(next, 5500);
        };

        prevBtn?.addEventListener("click", () => {
            prev();
            resetAuto();
        });
        nextBtn?.addEventListener("click", () => {
            next();
            resetAuto();
        });
        dots.forEach((dot, i) =>
            dot.addEventListener("click", () => {
                goTo(i);
                resetAuto();
            }),
        );

        // Swipe support
        let touchStartX = 0;
        heroCarousel.addEventListener(
            "touchstart",
            (e) => {
                touchStartX = e.changedTouches[0].screenX;
            },
            { passive: true },
        );
        heroCarousel.addEventListener(
            "touchend",
            (e) => {
                const diff = touchStartX - e.changedTouches[0].screenX;
                if (Math.abs(diff) > 50) {
                    diff > 0 ? next() : prev();
                    resetAuto();
                }
            },
            { passive: true },
        );

        // Keyboard
        heroCarousel.addEventListener("keydown", (e) => {
            if (e.key === "ArrowLeft") {
                prev();
                resetAuto();
            }
            if (e.key === "ArrowRight") {
                next();
                resetAuto();
            }
        });

        // Pause on hover
        heroCarousel.addEventListener("mouseenter", () =>
            clearInterval(autoPlayTimer),
        );
        heroCarousel.addEventListener("mouseleave", resetAuto);

        resetAuto();
    }

    /* ── 3. HISTORY TABS ────────────────────────────────────────── */
    const historyTabs = document.querySelectorAll(".yd-history__tab");
    historyTabs.forEach((tab) => {
        tab.addEventListener("click", () => {
            const tabId = tab.dataset.tab;

            historyTabs.forEach((t) => t.classList.remove("active"));
            document
                .querySelectorAll(".yd-history__panel")
                .forEach((p) => p.classList.remove("active"));

            tab.classList.add("active");
            document.getElementById(`tab-${tabId}`)?.classList.add("active");

            // Animate progress bars if switching to that panel
            if (tabId === "perkembangan") animateProgressBars();
        });
    });

    function animateProgressBars() {
        document
            .querySelectorAll(".yd-history__progress-fill")
            .forEach((bar) => {
                const target = bar.dataset.width;
                setTimeout(() => {
                    bar.style.width = target + "%";
                }, 100);
            });
    }

    // Animate on first load if visible
    const progressPanel = document.getElementById("tab-perkembangan");
    if (progressPanel?.classList.contains("active")) animateProgressBars();

    /* ── 4. TESTIMONIALS CAROUSEL ───────────────────────────────── */
    const testTrack = document.getElementById("testimonials-track");
    const testDots = document.querySelectorAll(".yd-testimonials__dot");
    const testPrev = document.getElementById("test-prev");
    const testNext = document.getElementById("test-next");

    if (testTrack) {
        const cards = testTrack.querySelectorAll(".yd-testimonial-card");
        const totalCards = cards.length;
        const perView = window.innerWidth <= 768 ? 1 : 2;
        let testIdx = 0;
        let testTimer;

        const moveTest = (idx) => {
            testIdx = ((idx % totalCards) + totalCards) % totalCards;
            const cardW = cards[0].offsetWidth + 24; // gap: 24px (space-6)
            testTrack.style.transform = `translateX(-${testIdx * cardW}px)`;
            testDots.forEach((d, i) =>
                d.classList.toggle("active", i === testIdx),
            );
        };

        const resetTestAuto = () => {
            clearInterval(testTimer);
            testTimer = setInterval(() => moveTest(testIdx + 1), 6000);
        };

        testPrev?.addEventListener("click", () => {
            moveTest(testIdx - 1);
            resetTestAuto();
        });
        testNext?.addEventListener("click", () => {
            moveTest(testIdx + 1);
            resetTestAuto();
        });
        testDots.forEach((d, i) =>
            d.addEventListener("click", () => {
                moveTest(i);
                resetTestAuto();
            }),
        );

        // Touch swipe
        let testTouchX = 0;
        testTrack.addEventListener(
            "touchstart",
            (e) => {
                testTouchX = e.changedTouches[0].screenX;
            },
            { passive: true },
        );
        testTrack.addEventListener(
            "touchend",
            (e) => {
                const diff = testTouchX - e.changedTouches[0].screenX;
                if (Math.abs(diff) > 50) {
                    diff > 0 ? moveTest(testIdx + 1) : moveTest(testIdx - 1);
                    resetTestAuto();
                }
            },
            { passive: true },
        );

        resetTestAuto();
        window.addEventListener("resize", () => moveTest(testIdx));
    }

    /* ── 5. SCROLL ANIMATIONS (IntersectionObserver) ────────────── */
    const animateElements = document.querySelectorAll("[data-aos]");

    if (animateElements.length) {
        // Inject base styles
        const aosCss = document.createElement("style");
        aosCss.textContent = `
      [data-aos] {
        opacity: 0;
        transform: translateY(28px);
        transition: opacity 0.65s cubic-bezier(0.16,1,0.3,1), transform 0.65s cubic-bezier(0.16,1,0.3,1);
      }
      [data-aos].aos-visible {
        opacity: 1;
        transform: none;
      }
    `;
        document.head.appendChild(aosCss);

        const aosObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry, i) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.classList.add("aos-visible");
                        }, i * 80);
                        aosObserver.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.12 },
        );

        animateElements.forEach((el) => aosObserver.observe(el));
    }

    /* ── 6. PROGRESS BARS (scroll-triggered) ───────────────────── */
    const progressSection = document.querySelector(
        ".yd-history__progress-grid",
    );
    if (progressSection) {
        const progressObserver = new IntersectionObserver(
            (entries) => {
                if (entries[0].isIntersecting) {
                    animateProgressBars();
                    progressObserver.unobserve(progressSection);
                }
            },
            { threshold: 0.3 },
        );
        progressObserver.observe(progressSection);
    }

    /* ── 7. BACK TO TOP BUTTON ──────────────────────────────────── */
    const backToTop = document.getElementById("back-to-top");
    if (backToTop) {
        window.addEventListener(
            "scroll",
            () => {
                backToTop.classList.toggle("visible", window.scrollY > 400);
            },
            { passive: true },
        );

        backToTop.addEventListener("click", () => {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    }

    /* ── 8. CONTACT FORM ENHANCEMENT ───────────────────────────── */
    const contactForm = document.getElementById("contact-form");
    if (contactForm) {
        const submitBtn = contactForm.querySelector('[type="submit"]');

        contactForm.addEventListener("submit", () => {
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML =
                    '<i class="fas fa-spinner fa-spin"></i> Mengirim...';
            }
        });

        // Float label effect
        contactForm
            .querySelectorAll(
                ".yd-form-input, .yd-form-textarea, .yd-form-select",
            )
            .forEach((input) => {
                input.addEventListener("focus", () =>
                    input.parentElement.classList.add("focused"),
                );
                input.addEventListener("blur", () =>
                    input.parentElement.classList.remove("focused"),
                );
            });
    }

    /* ── 9. SMOOTH ANCHOR SCROLLING ─────────────────────────────── */
    document.querySelectorAll('a[href*="#"]').forEach((link) => {
        link.addEventListener("click", function (e) {
            const href = this.getAttribute("href");
            const hash = href.includes("#") ? "#" + href.split("#")[1] : null;
            if (!hash || hash === "#") return;

            const target = document.querySelector(hash);
            if (target) {
                e.preventDefault();
                const top =
                    target.getBoundingClientRect().top +
                    window.scrollY -
                    (parseInt(
                        getComputedStyle(
                            document.documentElement,
                        ).getPropertyValue("--navbar-h"),
                    ) || 76);
                window.scrollTo({ top, behavior: "smooth" });
            }
        });
    });

    /* ── 10. COUNTER ANIMATION (Stats) ─────────────────────────── */
    const counters = document.querySelectorAll(".yd-about__stat-num");
    if (counters.length) {
        const countObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) return;
                    const el = entry.target;
                    const raw = el.textContent.replace(/[^0-9]/g, "");
                    if (!raw) return;
                    const end = parseInt(raw);
                    const sup = el.querySelector("sup")?.outerHTML || "";
                    const prefix = el.textContent.replace(
                        raw + (el.querySelector("sup")?.textContent || ""),
                        "",
                    );
                    let start = 0;
                    const step = end / 60;
                    const timer = setInterval(() => {
                        start += step;
                        if (start >= end) {
                            start = end;
                            clearInterval(timer);
                        }
                        el.innerHTML = Math.floor(start) + sup;
                    }, 20);
                    countObserver.unobserve(el);
                });
            },
            { threshold: 0.5 },
        );
        counters.forEach((c) => countObserver.observe(c));
    }
});

/* ── 11. ACCORDION (history section) ────────────────────────── */
document.querySelectorAll(".yd-accordion__trigger").forEach((trigger) => {
    trigger.addEventListener("click", () => {
        const accordion = trigger.closest(".yd-accordion");
        const isOpen = accordion.classList.contains("is-open");

        // Close all siblings within the same panel
        const panel = accordion.closest(".yd-history__panel");
        panel?.querySelectorAll(".yd-accordion").forEach((acc) => {
            acc.classList.remove("is-open");
            acc.querySelector(".yd-accordion__trigger")?.setAttribute(
                "aria-expanded",
                "false",
            );
            acc.querySelector(".yd-accordion__body")?.setAttribute(
                "aria-hidden",
                "true",
            );
        });

        // Open the clicked one (unless it was already open — toggle off)
        if (!isOpen) {
            accordion.classList.add("is-open");
            trigger.setAttribute("aria-expanded", "true");
            accordion
                .querySelector(".yd-accordion__body")
                ?.setAttribute("aria-hidden", "false");
        }
    });
});

/* ── 12. INSTITUTION MODALS (about section) ─────────────────── */
const openModal = (id) => {
    const modal = document.getElementById(id);
    if (!modal) return;
    modal.classList.add("is-open");
    modal.setAttribute("aria-hidden", "false");
    document.body.classList.add("modal-open");

    // Focus first focusable element
    const focusable = modal.querySelectorAll(
        'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])',
    );
    focusable[0]?.focus();
};

const closeModal = (modal) => {
    if (!modal) return;
    modal.classList.remove("is-open");
    modal.setAttribute("aria-hidden", "true");
    document.body.classList.remove("modal-open");
};

const closeAllModals = () => {
    document.querySelectorAll(".yd-modal.is-open").forEach(closeModal);
};

// Open triggers
document.querySelectorAll("[data-modal]").forEach((trigger) => {
    trigger.addEventListener("click", () => openModal(trigger.dataset.modal));
});

// Close triggers (buttons with data-modal-close)
document.querySelectorAll("[data-modal-close]").forEach((btn) => {
    btn.addEventListener("click", () => closeAllModals());
});

// Close on backdrop click
document.querySelectorAll(".yd-modal__backdrop").forEach((backdrop) => {
    backdrop.addEventListener("click", () => closeAllModals());
});

// Close on Escape key
document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeAllModals();
});

// Trap focus inside modal
document.querySelectorAll(".yd-modal").forEach((modal) => {
    modal.addEventListener("keydown", (e) => {
        if (e.key !== "Tab") return;
        const focusable = [
            ...modal.querySelectorAll(
                'button:not([disabled]), [href], input, select, textarea, [tabindex]:not([tabindex="-1"])',
            ),
        ].filter((el) => !el.closest('[aria-hidden="true"]'));
        const first = focusable[0];
        const last = focusable[focusable.length - 1];
        if (
            e.shiftKey
                ? document.activeElement === first
                : document.activeElement === last
        ) {
            e.preventDefault();
            (e.shiftKey ? last : first).focus();
        }
    });
});

/* ── 13. PROGRAMS TAB SWITCHER ──────────────────────────────── */
document.querySelectorAll("[data-prog-tab]").forEach((btn) => {
    btn.addEventListener("click", () => {
        const target = btn.dataset.progTab;

        // Update tab buttons
        document.querySelectorAll("[data-prog-tab]").forEach((b) => {
            b.classList.remove("active");
            b.setAttribute("aria-selected", "false");
        });
        btn.classList.add("active");
        btn.setAttribute("aria-selected", "true");

        // Update panels
        document.querySelectorAll(".yd-prog-panel").forEach((p) => {
            p.classList.remove("active");
        });
        document
            .getElementById("prog-panel-" + target)
            ?.classList.add("active");

        // Re-trigger AOS for newly visible elements
        document
            .querySelectorAll("#prog-panel-" + target + " [data-aos]")
            .forEach((el, i) => {
                el.classList.remove("aos-visible");
                setTimeout(() => el.classList.add("aos-visible"), i * 80);
            });
    });
});
