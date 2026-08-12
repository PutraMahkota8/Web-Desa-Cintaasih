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
                    ['image' => asset('landing_page/images/masjid.jpg'), 'title' => 'Sumber Daya Alam', 'desc' => 'Desa Cintaasih di Kecamatan Gekbrong, Kabupaten Cianjur, memiliki sumber daya alam yang didominasi oleh sektor pertanian, perkebunan, dan peternakan. Wilayah seluas sekitar 1.067 hektare ini berada di kawasan pegunungan yang subur, sehingga menghasilkan potensi alam dan lingkungan pedesaan yang asri.'],
                    ['image' => asset('landing_page/images/library.jpg'), 'title' => 'Sumber Daya Manusia', 'desc' => 'Sumber daya manusia (SDM) di Desa Cintaasih, Kecamatan Gekbrong, Kabupaten Cianjur, berpusat pada masyarakat agraris yang aktif dalam sektor pertanian, perkebunan, dan kegiatan sosial kemasyarakatan yang ditunjang oleh kepemimpinan aparatur desa serta struktur kewilayahan yang terbagi ke dalam beberapa RT, RW, dan dusun.'],
                    ['image' => asset('landing_page/images/ruang.jpg'), 'title' => 'Sumber Daya Kelembagaan', 'desc' => 'Sumber daya kelembagaan di Desa Cintaasih, Kecamatan Gekbrong, Kabupaten Cianjur, berpusat pada sinergi antara Pemerintahan Desa, lembaga kemasyarakatan formal, serta partisipasi aktif warga dalam pembangunan infrastruktur dan pelayanan publik.'],
                    ['image' => asset('landing_page/images/labkom.jpeg'), 'title' => 'Sumber Daya Sarana dan Prasarana', 'desc' => 'Desa Cintaasih di Kecamatan Gekbrong, Kabupaten Cianjur, memiliki sumber daya sarana dan prasarana penunjang perdesaan yang meliputi fasilitas pemerintahan desa, sarana pendidikan dasar (seperti SD Negeri), fasilitas keagamaan/MDT, serta aksesibilitas wilayah yang mencakup pembagian administratif dusun, RW, dan RT untuk mendukung aktivitas ekonomi serta pertanian warga.'],
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