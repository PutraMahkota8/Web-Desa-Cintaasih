{{-- ============================================================
     SECTION: sections/hero.blade.php
     Full-screen hero carousel section
     ============================================================ --}}

<section class="yd-hero" aria-label="Hero Section">

    {{-- Carousel Slides --}}
    <div class="yd-hero__carousel" id="hero-carousel">
        @php
            $slides = [
<<<<<<< HEAD
                ['image' => asset('landing_page/images/carousel-1.png'), 'alt' => 'Kantor Desa Cintaasih'],
                ['image' => asset('landing_page/images/carousel-2.jpeg'), 'alt' => 'Kegiatan Desa Cintaasih'],
                ['image' => asset('landing_page/images/WhatsApp Image 2026-08-11 at 6.54.30 AM.jpeg'), 'alt' => 'Potensi Desa'],
                ['image' => asset('landing_page/images/WhatsApp Image 2026-08-11 at 12.07.21 AM.jpeg'), 'alt' => 'Perangkat Desa Cintaasih'],
=======
                ['image' => asset('landing_page/images/carousel-1.jpg'), 'alt' => 'Kantor Desa Cintaasih'],
                ['image' => asset('landing_page/images/carousel-2.jpeg'), 'alt' => 'Kegiatan Desa Cintaasih'],
                ['image' => asset('landing_page/images/kelas.jpg'), 'alt' => 'Potensi Desa'],
                ['image' => asset('landing_page/images/carousel-4.jpg'), 'alt' => 'Anggota Kelompok KKN'],
>>>>>>> c1b2ccd1082017e3d2eedd203b6fa0e8d2783f34
            ];
        @endphp

        @foreach($slides as $i => $slide)
        <div class="yd-hero__slide {{ $i === 0 ? 'active' : '' }}"
             style="background-image: url('{{ $slide['image'] }}')"
             role="img" aria-label="{{ $slide['alt'] }}">
        </div>
        @endforeach

        {{-- Overlay --}}
        <div class="yd-hero__overlay" aria-hidden="true"></div>
    </div>

    {{-- Hero Content --}}
    <div class="yd-hero__content">
        <div class="yd-container">
            <p class="yd-hero__eyebrow">
                <span class="yd-hero__eyebrow-line"></span>
                Pemerintah Desa Cintaasih
                <span class="yd-hero__eyebrow-line"></span>
            </p>
            <h1 class="yd-hero__title">
                Maju Bersama,<br>
                <span class="yd-hero__title-accent">Tumbuh Bersama</span>
            </h1>
            <p class="yd-hero__subtitle">
                Sebuah Desa Yang Terletak Di Kecamatan Gekbrong, Kabupaten Cianjur Yang Menaungi 3 Dusun
                Beserta 6 RW dan 29 RT
            </p>
            <div class="yd-hero__actions">
                <a href="#Potensi" class="yd-btn yd-btn--primary yd-btn--lg">
                    Lihat Potensi Desa
                </a>
                <a href="#tentang" class="yd-btn yd-btn--outlined-light yd-btn--lg">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </div>

    {{-- Carousel Controls --}}
    <button class="yd-hero__nav yd-hero__nav--prev" id="hero-prev" aria-label="Slide sebelumnya">
        <i class="fas fa-chevron-left"></i>
    </button>
    <button class="yd-hero__nav yd-hero__nav--next" id="hero-next" aria-label="Slide selanjutnya">
        <i class="fas fa-chevron-right"></i>
    </button>

    {{-- Dot Indicators --}}
    <div class="yd-hero__dots" role="tablist" aria-label="Slide indicators">
        @foreach($slides as $i => $slide)
        <button class="yd-hero__dot {{ $i === 0 ? 'active' : '' }}"
                role="tab"
                aria-selected="{{ $i === 0 ? 'true' : 'false' }}"
                aria-label="Slide {{ $i + 1 }}"
                data-index="{{ $i }}">
        </button>
        @endforeach
    </div>

    {{-- Scroll Indicator --}}
    <div class="yd-hero__scroll-hint" aria-hidden="true">
        <span>Scroll</span>
        <div class="yd-hero__scroll-line"></div>
    </div>

</section>