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
                    ['image' => asset('landing_page/images/image011.jpg'), 'title' => 'Kajian Rutin', 'desc' => 'Program Keagamaan dan Kemasyarakatan ya Diinisiasi oleh Pemerintah Desa Cintaasih bekerja sama dengan para pemuka agama, Dewan DKM, serta pengurus RT/RW setempat. Program ini dirancang sebagai wadah silaturahmi, pembinaan moral, serta peningkatan wawasan keislaman bagi seluruh warga desa dalam suasana yang sejuk, edukatif, dan penuh kekeluargaan.'],
                    ['image' => asset('landing_page/images/image031.jpg'), 'title' => 'Kegiatan Bantuan Langsung Tunai (BLT)', 'desc' => 'Bantuan Langsung Tunai (BLT) adalah program jaring pengaman sosial yang bersumber dari Dana Desa (DD) Desa Cintaasih. Program ini dirancang khusus untuk memberikan dukungan finansial secara langsung kepada keluarga penerima manfaat (KPM) yang masuk dalam kategori rentan, prasejahtera, atau mengalami krisis ekonomi, guna meringankan beban pengeluaran kebutuhan pokok sehari-hari.'],
                    ['image' => asset('landing_page/images/image054.jpg'), 'title' => 'Kegiatan Penyuluhan Ibu Hamil', 'desc' => 'Penyuluhan Kesehatan Ibu Hamil adalah program edukasi promotif dan preventif yang diselenggarakan secara berkala oleh Pemerintah Desa Cintaasih bekerja sama dengan Puskesmas setempat, bidan desa, serta para kader Posyandu. Program ini bertujuan untuk memberikan pendampingan, pengetahuan, serta kesadaran pentingnya menjaga kesehatan fisik dan mental sejak masa kehamilan hingga persiapan persalinan.'],
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