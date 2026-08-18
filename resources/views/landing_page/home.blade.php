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
                        'name' => 'DEDI KUSMARA',
<<<<<<< HEAD
                        'role' => 'Kepala Desa Cintaasih    ',
                        'image' => asset('landing_page/images/dedi.jpeg'),
=======
                        'role' => 'Kepala PKBM NURUL FATA',
                        'image' => asset('landing_page/images/deni.jpeg'),
>>>>>>> d89bdc0bb7f2ef5edc894e7c42acc2520f29f8d5
                        'desc' => "Assalamu'alaikum Warahmatullahi Wabarakatuh. Kami bersyukur atas kepercayaan yang diberikan kepada PKBM NURUL FATA. Setiap peserta didik adalah amanah yang harus kita kembangkan potensinya secara maksimal. Mari bersama-sama membangun generasi yang unggul dalam prestasi dan berkarakter kuat dalam budaya Islami."
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
<<<<<<< HEAD
     
=======
@include('landing_page.sections.program')



>>>>>>> d89bdc0bb7f2ef5edc894e7c42acc2520f29f8d5
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