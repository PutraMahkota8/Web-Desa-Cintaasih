{{-- ============================================================
     PARTIAL: partials/footer.blade.php
     ============================================================ --}}

<footer class="yd-footer">
    <div class="yd-footer__top">
        <div class="yd-container yd-footer__grid">

            {{-- Brand Column --}}
            <div class="yd-footer__col yd-footer__col--brand">
                <a href="{{ url('/')}}" class="yd-footer__brand">
                    <img src="{{ asset('landing_page/images/images.png') }}" alt="Logo Pemerintah Desa Cintaasih" class="yd-footer__logo" />
                    <span class="yd-footer__brand-name">Pemerintah Desa Cintaasih</span>
                </a>
                <p class="yd-footer__desc">
                    Sebuah Desa Yang Terletak Di Kecamatan Gekbrong, Kabupaten Cianjur Yang Menaungi 3 Dusun Beserta 6 RW dan 29 RT
                </p>
                <div class="yd-footer__socials">
                    <a href="https://www.facebook.com/share/19AxJn8dou/" target="_blank" rel="noopener" class="yd-footer__social" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/pemdescintaasih/" target="_blank" rel="noopener" class="yd-footer__social" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.tiktok.com/@pemdes.cintaasih?_r=1&_t=ZS-98oITLj0qBd" target="_blank" rel="noopener" class="yd-footer__social" aria-label="TikTok">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="https://wa.me/6285802732708" target="_blank" rel="noopener" class="yd-footer__social" aria-label="WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            {{-- Links Column 1 --}}
            <div class="yd-footer__col">
                <h4 class="yd-footer__heading">Kelembagaan</h4>
                <ul class="yd-footer__links">
                    <li><a href="{{ url('/')}}#tentang" class="yd-footer__link">Tentang Kami</a></li>
                    <li><a href="{{ url('/')}}#sejarah" class="yd-footer__link">Sejarah</a></li>
                </ul>
            </div>

            {{-- Links Column 2 --}}
            <div class="yd-footer__col">
                <h4 class="yd-footer__heading">Program</h4>
                <ul class="yd-footer__links">
                    <li><a href="{{ url('/')}}#akademik" class="yd-footer__link">Program 1</a></li>
                    <li><a href="{{ url('/')}}#akademik" class="yd-footer__link">Program 2</a></li>
                    <li><a href="{{ url('/')}}#akademik" class="yd-footer__link">Program 3</a></li>
                    <li><a href="{{ url('/')}}#akademik" class="yd-footer__link">Program 4</a></li>
                </ul>
            </div>

            {{-- Contact Column --}}
            <div class="yd-footer__col">
                <h4 class="yd-footer__heading">Kontak</h4>
                <ul class="yd-footer__contact-list">
                    <li class="yd-footer__contact-item">
                        <i class="fas fa-map-marker-alt yd-footer__contact-icon"></i>
                        <span>Jl. Pasirhuni, Cintaasih, Kec. Gekbrong, Kabupaten Cianjur, Jawa Barat 43261</span>
                    </li>
                    <li class="yd-footer__contact-item">
                        <i class="fas fa-phone yd-footer__contact-icon"></i>
                        <span>+62 858-0273-2708</span>
                    </li>
                    <li class="yd-footer__contact-item">
                        <i class="fas fa-envelope yd-footer__contact-icon"></i>
                        <a href="mailto:Desacintaasih6@gmail.com" class="yd-footer__link">Desacintaasih6@gmail.com</a>
                    </li>
                    <li class="yd-footer__contact-item">
                        <i class="fas fa-clock yd-footer__contact-icon"></i>
                        <span>Sen–Jum: 07.00–16.00</span>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="yd-footer__bottom">
        <div class="yd-container yd-footer__bottom-inner">
            <p class="yd-footer__copy">&copy; {{ date('Y') }} Pemerintah Desa Cintaasih. Hak Cipta Dilindungi.</p>
            <p class="yd-footer__tagline">Maju Bersama, Tumbuh Bersama</p>
        </div>
    </div>
</footer>