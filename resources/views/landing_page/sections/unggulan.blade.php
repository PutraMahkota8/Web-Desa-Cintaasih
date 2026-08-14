{{-- ============================================================
     SECTION: sections/unggulan.blade.php
     ============================================================ --}}

<section id="unggulan" class="yd-section yd-facilities">
    <div class="yd-container">

        <div class="yd-section-header yd-section-header--center">
            <p class="yd-section-label">Program</p>
            <h2 class="yd-section-title">Program Unggulan</h2>
            <p class="yd-section-subtitle">Program unggulan yang mengedepankan kepentingan dan pemberdayaan masyarakat.</p>
        </div>

        <div class="yd-facilities__grid">
            @php
                $unggulan = 
                [
                    ['image' => asset('landing_page/images/image011.jpg'), 'title' => 'Kajian Rutin', 'desc' => 'Program Keagamaan dan Kemasyarakatan ya Diinisiasi oleh Pemerintah Desa Cintaasih bekerja sama dengan para pemuka agama, Dewan DKM, serta pengurus RT/RW setempat. Program ini dirancang sebagai wadah silaturahmi, pembinaan moral, serta peningkatan wawasan keislaman bagi seluruh warga desa dalam suasana yang sejuk, edukatif, dan penuh kekeluargaan.'],
                    ['image' => asset('landing_page/images/image031.jpg'), 'title' => 'Kegiatan Bantuan Langsung Tunai (BLT)', 'desc' => 'Bantuan Langsung Tunai (BLT) adalah program jaring pengaman sosial yang bersumber dari Dana Desa (DD) Desa Cintaasih. Program ini dirancang khusus untuk memberikan dukungan finansial secara langsung kepada keluarga penerima manfaat (KPM) yang masuk dalam kategori rentan, prasejahtera, atau mengalami krisis ekonomi, guna meringankan beban pengeluaran kebutuhan pokok sehari-hari.'],
                    ['image' => asset('landing_page/images/image054.jpg'), 'title' => 'Kegiatan Penyuluhan Ibu Hamil', 'desc' => 'Penyuluhan Kesehatan Ibu Hamil adalah program edukasi promotif dan preventif yang diselenggarakan secara berkala oleh Pemerintah Desa Cintaasih bekerja sama dengan Puskesmas setempat, bidan desa, serta para kader Posyandu. Program ini bertujuan untuk memberikan pendampingan, pengetahuan, serta kesadaran pentingnya menjaga kesehatan fisik dan mental sejak masa kehamilan hingga persiapan persalinan.'],
                    ['image' => asset('landing_page/images/image019.jpg'), 'title' => 'Kegiatan Penanggulangan Darurat Bencana ', 'desc' => 'Program penanggulangan darurat bencana yang dilaksanakan untuk meminimalkan dampak bencana dan memastikan keselamatan warga.'],
                    ['image' => asset('landing_page/images/image003.jpg'), 'title' => 'Kegiatan Pemeliharaan Jalan Desa ( Pktd)', 'desc' => 'Program pemeliharaan jalan desa untuk menjaga kondisi jalan tetap baik dan aman bagi warga.'],
                    ['image' => asset('landing_page/images/image027.jpg'), 'title' => 'Kegiatan Peningkatan Kapasitas Kepala Desa', 'desc' => 'Program peningkatan kapasitas kepala desa untuk meningkatkan kemampuan kepemimpinan dan manajemen pemerintahan desa.'],
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