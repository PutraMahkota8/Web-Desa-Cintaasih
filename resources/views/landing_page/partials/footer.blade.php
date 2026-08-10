{{-- ============================================================
     PARTIAL: partials/footer.blade.php
     ============================================================ --}}

<footer class="yd-footer">
    <div class="yd-footer__top">
        <div class="yd-container yd-footer__grid">

            {{-- Brand Column --}}
            <div class="yd-footer__col yd-footer__col--brand">
                <a href="{{ url('/')}}" class="yd-footer__brand">
                    <img src="{{ asset('landing_page/images/logo.jpeg') }}" alt="Logo Yayasan Darusalam" class="yd-footer__logo" />
                    <span class="yd-footer__brand-name">Yayasan Darusalam</span>
                </a>
                <p class="yd-footer__desc">
                    Lembaga pendidikan Islam terpadu yang mengintegrasikan keunggulan akademik dengan pembentukan karakter Islami.
                </p>
                <div class="yd-footer__socials">
                    <a href="https://facebook.com" target="_blank" rel="noopener" class="yd-footer__social" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://instagram.com/daruslamilmuthalibah" target="_blank" rel="noopener" class="yd-footer__social" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://youtube.com" target="_blank" rel="noopener" class="yd-footer__social" aria-label="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="https://wa.me/6285720696453" target="_blank" rel="noopener" class="yd-footer__social" aria-label="WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            {{-- Links Column 1 --}}
            <div class="yd-footer__col">
                <h4 class="yd-footer__heading">Lembaga</h4>
                <ul class="yd-footer__links">
                    <li><a href="{{ url('/')}}#tentang" class="yd-footer__link">Tentang Kami</a></li>
                    <li><a href="{{ url('/')}}#sejarah" class="yd-footer__link">Sejarah</a></li>
                    <li><a href="{{ url('/')}}#MA" class="yd-footer__link">MAS AL MUSTOFAWIYAH</a></li>
                    <li><a href="{{ url('/')}}#PKBM" class="yd-footer__link">PKBM NURUL FATA</a></li>
                    <li><a href="{{ url('/')}}#fasilitas" class="yd-footer__link">Fasilitas</a></li>
                </ul>
            </div>

            {{-- Links Column 2 --}}
            <div class="yd-footer__col">
                <h4 class="yd-footer__heading">Program</h4>
                <ul class="yd-footer__links">
                    <li><a href="{{ url('/')}}#akademik" class="yd-footer__link">Program Akademik</a></li>
                    <li><a href="{{ url('/')}}#ekstrakurikuler" class="yd-footer__link">Ekstrakurikuler</a></li>
                    <li><a href="{{ url('/')}}#pendaftaran" class="yd-footer__link">Penerimaan Siswa</a></li>
                    <li><a href="{{ url('/')}}#beasiswa" class="yd-footer__link">Beasiswa</a></li>
                </ul>
            </div>

            {{-- Contact Column --}}
            <div class="yd-footer__col">
                <h4 class="yd-footer__heading">Kontak</h4>
                <ul class="yd-footer__contact-list">
                    <li class="yd-footer__contact-item">
                        <i class="fas fa-map-marker-alt yd-footer__contact-icon"></i>
                        <span>Jl. Pesantren No. 1, Karangtengah, Cianjur, Jawa Barat</span>
                    </li>
                    <li class="yd-footer__contact-item">
                        <i class="fas fa-phone yd-footer__contact-icon"></i>
                        <span>+62 857-2069-6453 (MA)<br>+62 857-2060-9821 (PKBM)</span>
                    </li>
                    <li class="yd-footer__contact-item">
                        <i class="fas fa-envelope yd-footer__contact-icon"></i>
                        <a href="mailto:info@darusalam.sch.id" class="yd-footer__link">info@darusalam.sch.id</a>
                    </li>
                    <li class="yd-footer__contact-item">
                        <i class="fas fa-clock yd-footer__contact-icon"></i>
                        <span>Sen–Jum: 07.00–16.00<br>Sabtu: 07.00–12.00</span>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="yd-footer__bottom">
        <div class="yd-container yd-footer__bottom-inner">
            <p class="yd-footer__copy">&copy; {{ date('Y') }} Yayasan Darusalam. Hak Cipta Dilindungi.</p>
            <p class="yd-footer__tagline">Unggul dalam Prestasi, Berkarakter dalam Budaya</p>
        </div>
    </div>
</footer>