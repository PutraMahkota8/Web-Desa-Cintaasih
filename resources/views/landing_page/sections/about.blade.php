{{-- ============================================================
     SECTION: sections/about.blade.php
     Tentang Kami — stats, narasi, foto + Institution Modals
     ============================================================ --}}

<section id="tentang" class="yd-section yd-about">
    <div class="yd-container">

        {{-- Section Header --}}
        <div class="yd-section-header">
            <p class="yd-section-label">Tentang Kami</p>
            <h2 class="yd-section-title">Mengabdi Dengan Cinta, Berkarya Dalam Asih, Bersama Desa Cintaasih</h2>
        </div>

        {{-- Main Grid: Text + Image --}}
        <div class="yd-about__grid">

            {{-- Text Side --}}
            <div class="yd-about__text">
                <p class="text-justify">
                    Pemerintah Desa Cintaasih hadir di tengah kehangatan wilayah administrasi Gekbrong, Cianjur, dengan tekad kuat untuk membangun masyarakat yang mandiri secara ekonomi dan maju dalam pembangunan infrastruktur. 
                    Kami percaya bahwa kemajuan desa berawal dari sinergi, rasa cinta, dan keterbukaan yang nyata antara perangkat daerah serta seluruh lapisan warga. 
                    Desa Cintaasih berkomitmen penuh menghadirkan pelayanan publik berkualitas tinggi yang merangkul potensi lokal di sektor pertanian, UMKM, serta terus melestarikan warisan nilai gotong royong dan semangat nasionalisme 
                    demi tumbuh bersama menuju masa depan yang lebih sejahtera.
                </p>

                {{-- Stats --}}
                <div class="yd-about__stats">
                    <div class="yd-about__stat">
                        <span class="yd-about__stat-num">3</span>
                        <span class="yd-about__stat-label">Dusun</span>
                    </div>
                    <div class="yd-about__stat-divider"></div>
                    <div class="yd-about__stat">
                        <span class="yd-about__stat-num">06</span>
                        <span class="yd-about__stat-label">RW</span>
                    </div>
                    <div class="yd-about__stat-divider"></div>
                    <div class="yd-about__stat">
                        <span class="yd-about__stat-num">29</span>
                        <span class="yd-about__stat-label">RT</span>
                    </div>
                </div>

                <a href="#sejarah" class="yd-btn yd-btn--primary yd-about__cta">
                    Selengkapnya <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            {{-- Image Side --}}
            <div class="yd-about__image-wrap">
                <div class="yd-about__image-frame">
                    <img src="{{ asset('landing_page/images/belajar.jpeg') }}"
                         alt="Kegiatan belajar mengajar di Yayasan Darusalam"
                         class="yd-about__image"
                         loading="lazy" />
                    <div class="yd-about__image-badge">
                        <p class="yd-about__image-badge-text">Sistem Informasi Desa Resmi &amp; Pelayanan</p>
                    </div>
                </div>
                <div class="yd-about__image-deco" aria-hidden="true"></div>
            </div>

        </div>

        {{-- Two Institutions Cards --}}
        <div class="yd-about__institutions">

            {{-- Card: MA --}}
            <div class="yd-about__inst-card">
                <div class="yd-about__inst-icon"><i class="fas fa-eye"></i></div>
                <h3 class="yd-about__inst-title">VISI</h3>
                <p class="yd-about__inst-desc">
                    Terbangunnya tata Pemerintahan Desa yang jujur dan tegas guna mewujudkan kehidupan masyarakat Desa Cintaasih yang Adil, Makmur, Aman dan Sejahtera.
                </p>
            </div>

            {{-- Card: PKBM --}}
            <div class="yd-about__inst-card">
                <div class="yd-about__inst-icon"><i class="fas fa-bullseye"></i></div>
                <h3 class="yd-about__inst-title">MISI</h3>
                <p class="yd-about__inst-desc">
                    1. Meningkatkan Pelayanan kepada masyarakat yang lebih baik
                    <br>
                    2. Meningkatkan Sarana dan Prasarana segi keagamaan, ekonomi, pendidikan, kesehatan, olahraga, budaya dan pertanian
                    <br>
                    3. Mengutamakan masyarakat dan gotong-royong di dalam kegiatan dengan seluruh  lapisan masyarakat.
                </p>
            </div>

        </div>

    </div>
</section>
