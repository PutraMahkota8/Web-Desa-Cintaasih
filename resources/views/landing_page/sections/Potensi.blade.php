{{-- ============================================================
     SECTION: sections/Potensi.blade.php
     ============================================================ --}}

<section id="Potensi" class="yd-section yd-Potensi">
    <div class="yd-container">

        <div class="yd-section-header yd-section-header--center">
            <p class="yd-section-label">Infrastruktur</p>
            <h2 class="yd-section-title">POTENSI DESA</h2>
            <p class="yd-section-subtitle">Fasilitas modern yang mendukung proses belajar mengajar berkualitas tinggi.</p>
        </div>

        <div class="yd-Potensi__grid">
            @php
                $Potensi = [
                    ['image' => asset('landing_page/images/Ieu Foto Curug.jpeg'), 'title' => 'Sumber Daya Alam', 'desc' => 'Curug dan pemandangan alam yang indah sebagai potensi wisata desa.'],
                    ['image' => asset('landing_page/images/library.jpg'), 'title' => 'Sumber Daya Manusia', 'desc' => 'Perpustakaan lengkap untuk kegiatan belajar dan penelitian.'],
                    ['image' => asset('landing_page/images/ruang.jpg'), 'title' => 'Sumber Daya Kelembagaan', 'desc' => 'Ruang kelas yang nyaman dan bersih untuk kegiatan pembelajaran.'],
                    ['image' => asset('landing_page/images/labkom.jpeg'), 'title' => 'Sumber Daya Sarana dan Prasarana', 'desc' => 'Lab komputer lengkap dengan peralatan modern untuk praktikum dan penelitian.'],
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