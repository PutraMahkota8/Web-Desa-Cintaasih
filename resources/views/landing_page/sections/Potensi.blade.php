{{-- ============================================================
     SECTION: sections/Potensi.blade.php
     ============================================================ --}}

<section id="Potensi" class="yd-section yd-Potensi">
    <div class="yd-container">

        <div class="yd-section-header yd-section-header--center">
            <p class="yd-section-label">Infrastruktur</p>
            <h2 class="yd-section-title">Fasilitas Unggulan</h2>
            <p class="yd-section-subtitle">Fasilitas modern yang mendukung proses belajar mengajar berkualitas tinggi.</p>
        </div>

        <div class="yd-Potensi__grid">
            @php
                $Potensi = [
                    ['image' => asset('landing_page/images/masjid.jpg'), 'title' => 'Masjid Pesantren', 'desc' => 'Masjid megah berkapasitas 500 jamaah sebagai pusat kegiatan ibadah dan kajian keagamaan.'],
                    ['image' => asset('landing_page/images/library.jpg'), 'title' => 'Perpustakaan', 'desc' => 'Perpustakaan lengkap untuk kegiatan belajar dan penelitian.'],
                    ['image' => asset('landing_page/images/ruang.jpg'), 'title' => 'Ruang Kelas', 'desc' => 'Ruang kelas yang nyaman dan bersih untuk kegiatan pembelajaran.'],
                    ['image' => asset('landing_page/images/labkom.jpeg'), 'title' => 'Laboratorium Komputer', 'desc' => 'Lab komputer lengkap dengan peralatan modern untuk praktikum dan penelitian.'],
                    ['image' => asset('landing_page/images/lapang.jpg'), 'title' => 'Lapangan Olahraga', 'desc' => 'Kompleks olahraga multi-guna meliputi lapangan futsal, basket, dan area senam.'],
                    ['image' => asset('landing_page/images/kelas.jpg'), 'title' => 'Asrama Santri', 'desc' => 'Asrama nyaman terpisah putra-putri dengan fasilitas lengkap dan pengawasan penuh.'],
                ];
            @endphp

            @foreach($Potensi as $fac)
         <div class="yd-facility-card" data-aos="fade-up">
                <div class="yd-facility-card__image-wrap">
                    <img src="{{ $fac['image'] }}"
                         alt="{{ $fac['title'] }}"
                         class="yd-facility-card__image"
                         loading="lazy" />
                </div>
                <div class="yd-facility-card__body">
                    <h3 class="yd-facility-card__title">{{ $fac['title'] }}</h3>
                    <p class="yd-facility-card__desc">{{ $fac['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>