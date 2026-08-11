{{-- ============================================================
     PARTIAL: partials/navbar.blade.php
     Sticky navigation bar with mobile hamburger menu
     ============================================================ --}}

<header class="yd-navbar" id="navbar">
    <div class="yd-container yd-navbar__inner">

        {{-- Brand Logo --}}
        <a href="{{ url('/')}}" class="yd-navbar__brand">
            <div class="yd-navbar__logo-wrap">
                <img src="{{ asset('landing_page/images/kabupaten-cianjur-logo-png_seeklogo-353574.png') }}" alt="Logo Yayasan Darusalam" class="yd-navbar__logo" />
            </div>
            <div class="yd-navbar__brand-text">
                <span class="yd-navbar__brand-name">Pemerintah Desa Cintaasih</span>
                <span class="yd-navbar__brand-tagline">Maju Bersama, Tumbuh Bersama</span>
            </div>
        </a>

        {{-- Desktop Nav Links --}}
        <nav class="yd-navbar__nav" aria-label="Navigasi Utama">
            <ul class="yd-navbar__list">
                <li class="yd-navbar__item">
                    <a href="{{ url('/')}}#tentang" class="yd-navbar__link {{ request()->routeIs('home') ? 'active' : '' }}">Tentang</a>
                </li>
                <li class="yd-navbar__item">
                    <a href="{{ url('/')}}#sejarah" class="yd-navbar__link">Sejarah</a>
                </li>
                <li class="yd-navbar__item yd-navbar__item--dropdown">
                    <a href="#" class="yd-navbar__link yd-navbar__link--dropdown-toggle">
                        Program <i class="fas fa-chevron-down yd-navbar__chevron"></i>
                    </a>
                    <ul class="yd-navbar__dropdown">
                        <li><a href="{{ url('/')}}#MA" class="yd-navbar__dropdown-link">MAS AL MUSTOFAWIYAH</a></li>
                        <li><a href="{{ url('/')}}#PKBM" class="yd-navbar__dropdown-link">PKBM NURUL FATA</a></li>
                        <li><a href="{{ url('/')}}#akademik" class="yd-navbar__dropdown-link">Program Akademik</a></li>
                    </ul>
                </li>
                <li class="yd-navbar__item">
                    <a href="{{ url('/')}}#Potensi" class="yd-navbar__link">Potensi</a>
                </li>
                <li class="yd-navbar__item">
                    <a href="{{ url('/')}}#kontak" class="yd-navbar__link">Kontak</a>
                </li>
            </ul>
        </nav>

        {{-- CTA Button --}}
        <a href="{{ url('/')}}#pendaftaran" class="yd-btn yd-btn--primary yd-navbar__cta">
            Hubungi Kami
        </a>

        {{-- Hamburger Menu (Mobile) --}}
        <button class="yd-navbar__hamburger" id="hamburger-btn" aria-label="Toggle Menu" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>

    {{-- Mobile Menu --}}
    <div class="yd-navbar__mobile" id="mobile-menu" aria-hidden="true">
        <ul class="yd-navbar__mobile-list">
            <li><a href="{{ url('/') }}#tentang" class="yd-navbar__mobile-link">Tentang</a></li>
            <li><a href="{{ url('/') }}#sejarah" class="yd-navbar__mobile-link">Sejarah</a></li>
            <li><a href="{{ url('/') }}#MA" class="yd-navbar__mobile-link">MAS AL MUSTOFAWIYAH</a></li>
            <li><a href="{{ url('/') }}#PKBM" class="yd-navbar__mobile-link">PKBM NURUL FATA</a></li>
            <li><a href="{{ url('/') }}#akademik" class="yd-navbar__mobile-link">Program</a></li>
            <li><a href="{{ url('/') }}#Potensi" class="yd-navbar__mobile-link">Potensi</a></li>
            <li><a href="{{ url('/') }}#kontak" class="yd-navbar__mobile-link">Kontak</a></li>
            <li>
                <a href="{{ url('/') }}#pendaftaran" class="yd-btn yd-btn--primary yd-navbar__mobile-cta">
                    Daftar Sekarang
                </a>
            </li>
        </ul>
    </div>
</header>