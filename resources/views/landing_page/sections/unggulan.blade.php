{{-- ============================================================
     SECTION: sections/facilities.blade.php
     ============================================================ --}}

<section id="fasilitas" class="yd-section yd-facilities">
    <div class="yd-container">

        <div class="yd-section-header yd-section-header--center">
            <p class="yd-section-label">Program</p>
            <h2 class="yd-section-title">Program Unggulan</h2>
            <p class="yd-section-subtitle">Program unggulan yang mendukung proses belajar mengajar berkualitas tinggi.</p>
        </div>

        <div class="yd-facilities__grid">
            @php
                $unggulan = [
                    ['image' => asset('landing_page/images/belajar.jpeg'), 'title' => 'Literasi Bersama', 'desc' => 'Siswa-siswi kami melalukan kegiatan Literasi Bersama untuk meningkatkan kemampuan membaca dan menulis mereka.'],
                    ['image' => asset('landing_page/images/Baksos.jpg'), 'title' => 'Bakti Sosial', 'desc' => 'Program bakti sosial untuk memberikan manfaat kepada masyarakat sekitar.'],
                    ['image' => asset('landing_page/images/Anti-Bullying.jpg'), 'title' => 'Gerakan Anti Bullying', 'desc' => 'Program untuk mencegah dan mengatasi fenomena bullying di lingkungan sekolah.'],
                    ['image' => asset('landing_page/images/carousel-4.jpg'), 'title' => 'Aquaponik', 'desc' => 'Sistem pertanian hidroponik yang inovatif untuk pembelajaran praktis.'],
                    ['image' => asset('landing_page/images/carousel-3.jpg'), 'title' => 'Pelatihan IT', 'desc' => 'Program pelatihan teknologi informasi untuk meningkatkan kemampuan digital siswa.'],
                    ['image' => asset('landing_page/images/Briefing-Guru.jpg'), 'title' => 'Briefing dan Monitoring Tenaga Pendidik', 'desc' => 'Program rutin untuk meningkatkan kualitas pengajaran melalui briefing dan monitoring tenaga pendidik.'],
                ];
            @endphp

            @foreach($unggulan as $fac)
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