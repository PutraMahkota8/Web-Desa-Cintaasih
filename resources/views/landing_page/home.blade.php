{{-- ============================================================
PAGE: pages/home.blade.php
Halaman utama — menyusun semua section
============================================================ --}}

@extends('landing_page.layout')

@section('title', 'Beranda')

@section('meta_description', 'Yayasan Darusalam — Lembaga Pendidikan Islam terpadu menaungi MAS AL MUSTOFAWIYAH dan PKBM NURUL FATA. Berakhlak dan Berprestasi.')

@section('content')


{{-- ============================================================
     HERO / CAROUSEL
     ============================================================ --}}
@include('landing_page.sections.hero')


{{-- ============================================================
     KEPEMIMPINAN
     ============================================================ --}}
<section class="yd-section yd-leadership">

    <div class="yd-container">

        {{-- Header Kepemimpinan --}}
        <div class="yd-section-header yd-section-header--center">
            <p class="yd-section-label">Kepemimpinan</p>
            <h2 class="yd-section-title">Hall of Excellence</h2>
        </div>


        {{-- Grid Pimpinan --}}
        <div class="yd-leadership__grid">
            @php
                $leaders = [
                    [
                        'name' => 'Bapak Dedi Kusmara',
                        'role' => 'Kepala Desa Cintaasih',
                        'image' => asset('landing_page/images/WhatsApp Image 2026-08-10 at 10.46.12 AM.jpeg'),
                        'desc' => "Puji dan syukur marilah kita panjatkan ke hadirat Allah SWT, Tuhan Yang Maha Esa, karena atas rahmat dan karunia-Nya kita semua diberikan kesehatan dan kesempatan untuk terus berkarya demi kemajuan desa yang kita cintai. Sholawat serta salam semoga senantiasa tercurah kepada junjungan kita Nabi Besar Muhammad SAW, keluarga, sahabat, hingga kepada kita umatnya hingga akhir zaman. Sebagai Kepala Desa Cintaasih, Kecamatan Gekbrong, Kabupaten Cianjur, saya menyambut baik hadirnya platform digital ini sebagai sarana keterbukaan informasi dan pelayanan publik. Desa Cintaasih yang berada di bawah kaki Gunung Gede Pangrango memiliki potensi alam, pertanian, serta keberagaman budaya yang sangat luar biasa. Melalui media ini, kami berkomitmen untuk menghadirkan tata kelola pemerintahan desa yang transparan, akuntabel, dan dapat diakses dengan mudah oleh seluruh warga masyarakat maupun pihak luar. Akhir kata, kami mengucapkan terima kasih kepada seluruh pihak yang telah berkontribusi dalam mendukung program-program pembangunan di Desa Cintaasih. Mari kita bersama-sama menjaga keharmonisan, mengoptimalkan potensi lokal yang kita miliki, dan membawa Desa Cintaasih menuju masa depan yang lebih maju, makmur, dan berdaya saing di wilayah Kabupaten Cianjur."
                    ],
                ];
            @endphp


            {{-- Perulangan data pimpinan --}}
            @foreach($leaders as $leader)

                <div class="yd-leader-card" data-aos="fade-up">

                    {{-- Foto Pimpinan --}}
                    <div class="yd-leader-card__image-wrap">

                        <img
                            src="{{ $leader['image'] }}"
                            alt="{{ $leader['name'] }}"
                            class="yd-leader-card__image"
                            loading="lazy"
                        >

                    </div>


                    {{-- Informasi Pimpinan --}}
                    <div class="yd-leader-card__body">

                        <h3 class="yd-leader-card__name">
                            {{ $leader['name'] }}
                        </h3>

                        <p class="yd-leader-card__role">
                            {{ $leader['role'] }}
                        </p>

                        <p class="yd-leader-card__desc">
                            {{ $leader['desc'] }}
                        </p>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- ============================================================
     TENTANG KAMI
     ============================================================ --}}
@include('landing_page.sections.about')


{{-- ============================================================
     STRUKTUR ORGANISASI DESA
     ============================================================ --}}
@include('landing_page.sections.organisasi')


{{-- ============================================================
     SEJARAH / TIMELINE
     ============================================================ --}}
@include('landing_page.sections.history')


{{-- ============================================================
     PROGRAM PRESTASI
     ============================================================ --}}
@include('landing_page.sections.program')


{{-- ============================================================
     CTA BANNER
     ============================================================ --}}
<section class="yd-cta-banner">

    <div class="yd-container">

        <div class="yd-cta-banner__inner">

            {{-- Text CTA --}}
            <div class="yd-cta-banner__text">

                <p class="yd-cta-banner__eyebrow">
                    Global Excellence & Community Impact
                </p>

                <h2 class="yd-cta-banner__title">
                    Bergabunglah bersama ribuan santri<br>
                    yang telah merasakan manfaatnya.
                </h2>

                <ul class="yd-cta-banner__points">

                    <li>
                        <i class="fas fa-check-circle"></i>
                        Akreditasi A dari BAN-S/M
                    </li>

                    <li>
                        <i class="fas fa-check-circle"></i>
                        Beasiswa tersedia untuk santri berprestasi
                    </li>

                    <li>
                        <i class="fas fa-check-circle"></i>
                        Kurikulum terintegrasi Kemendikbud & Pesantren
                    </li>

                </ul>

            </div>


            {{-- Gambar CTA --}}
            <div class="yd-cta-banner__images">

                <img
                    src="{{ asset('landing_page/images/carousel-4.jpg') }}"
                    alt="Kegiatan pesantren"
                    class="yd-cta-banner__img yd-cta-banner__img--1"
                    loading="lazy"
                >

                <img
                    src="{{ asset('landing_page/images/cta-2.jpeg') }}"
                    alt="Kegiatan akademik"
                    class="yd-cta-banner__img yd-cta-banner__img--2"
                    loading="lazy"
                >

            </div>

        </div>

    </div>

</section>


{{-- ============================================================
     FASILITAS / POTENSI
     ============================================================ --}}
@include('landing_page.sections.Potensi')


{{-- ============================================================
     PROGRAM UNGGULAN
     ============================================================ --}}
@include('landing_page.sections.unggulan')


{{-- ============================================================
     TIMELINE KEGIATAN
     ============================================================ --}}


{{-- ============================================================
     TESTIMONIALS
     ============================================================ --}}
@include('landing_page.sections.testimonials')


{{-- ============================================================
     KONTAK
     ============================================================ --}}
@include('landing_page.sections.contact')


@endsection