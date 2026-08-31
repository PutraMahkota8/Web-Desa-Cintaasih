{{-- ============================================================
     SECTION: sections/history.blade.php
     Sejarah — Biografi Pendiri (Accordion) + Perkembangan
     ============================================================ --}}

<section id="sejarah" class="yd-section yd-history">
    <div class="yd-container">

        <div class="yd-section-header yd-section-header--center">
            <p class="yd-section-label">Profil Desa</p>
            <h2 class="yd-section-title">A Legacy of Growth</h2>
        </div>

        {{-- Tab Switcher --}}
        <div class="yd-history__tabs">
            <button class="yd-history__tab active" data-tab="pendiri">
                Sejarah Desa
            </button>
            <button class="yd-history__tab" data-tab="perkembangan">
                Perkembangan Desa
            </button>
        </div>

        {{-- ══════════════════════════════════════
             PANEL: Biografi Pendiri (Accordion)
        ═══════════════════════════════════════ --}}
        <div class="yd-history__panel active" id="tab-pendiri">

            {{-- Profil Singkat Pendiri --}}
            {{-- Accordion 1: Latar Belakang & Keluarga --}}
            <div class="yd-accordion" id="acc-latar">
                <button class="yd-accordion__trigger" aria-expanded="false" aria-controls="acc-latar-body">
                    <span class="yd-accordion__icon"><i class="fas fa-history"></i></span>
                    <span class="yd-accordion__title">Latar Belakang Desa</span>
                    <span class="yd-accordion__chevron"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="yd-accordion__body" id="acc-latar-body" aria-hidden="true">
                    <div class="yd-accordion__content">
                        <p>
                        Berawal dari bagian wilayah Desa Cikancana, Desa Cintaasih akhirnya mengukir sejarah baru pada tahun 1983. 
                        Pesatnya pembangunan dan potensi wilayah mendorong lahirnya pemekaran administratif yang mengantarkan Cintaasih menjadi desa mandiri.
                        Saat ini, roda kehidupan Desa Cintaasih bergerak harmonis melalui 3 dusun, 6 RW, dan 29 RT.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Accordion 2: Perjalanan Pendidikan & Organisasi --}}
            <div class="yd-accordion" id="acc-pendidikan">
                <button class="yd-accordion__trigger" aria-expanded="false" aria-controls="acc-pendidikan-body">
                    <span class="yd-accordion__icon"><i class="fas fa-history"></i></span>
                    <span class="yd-accordion__title">Perkembangan Legenda Desa</span>
                    <span class="yd-accordion__chevron"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="yd-accordion__body" id="acc-pendidikan-body" aria-hidden="true">
                    <div class="yd-accordion__content">
                        <p>
                            Sejarah Desa Cintaasih ditinjau secara kronologis terbentuk sejak tahun 1836 yang dipimpin oleh seorang Kepala Dusun (Alm. Singo Wadono) dan mengalami perubahan sesuai dengan perkembangan zaman.
                        </p>
                        <p>
                            Konon kabarnya nama “Gekbrong” berawal dari bahasa Sunda leluhur yang terdiri dari dua kata yaitu “gek” yang artinya dadakan/sekonyong-konyong dan “brong” yang artinya berkerumun/bergerombol. 
                            Maka sejak zaman dahulu kala di daerah ini apabila terjadi sesuatu masalah selalu dibicarakan bersama-sama secara bergerombol/berkumpul. 
                            Hal ini menandakan adanya kebiasaan bermusyawarah sudah tertanam sejak dahulu kala.
                        </p>
                        <p>
                            Saat itu Desa Cintaasih sendiri masih masuk dalam Desa Cikancana dan seiring dengan perkembangan zaman serta kemajuan wilayah Desa Cintaasih yang semakin cepat menunjukkan peningkatan, sehingga pada tahun 1983 terjadi pemekaran secara administratif dan telah berubah status menjadi Desa Cintaasih dan untuk Desa Cintaasih sendiri sampai saat ini terdapat 3 dusun.
                        </p>
                    </div>
                </div>
            </div>
            
        </div>{{-- end tab-pendiri --}}


        {{-- ══════════════════════════════════════
             PANEL:Perkembangan Desa
        ═══════════════════════════════════════ --}}
        <div class="yd-history__panel" id="tab-perkembangan">
            {{-- Accordion: PKBM NURUL FATA --}}
            <div class="yd-accordion yd-accordion--secondary" id="acc-pkbm">
                <button class="yd-accordion__trigger" aria-expanded="false" aria-controls="acc-pkbm-body">
                    <span class="yd-accordion__icon"><i class="fas fa-book-open"></i></span>
                    <span class="yd-accordion__title">
                        INFRASTRUKTUR & PEMBANGUNAN
                    </span>
                    <span class="yd-accordion__chevron"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="yd-accordion__body" id="acc-pkbm-body" aria-hidden="true">
                    <div class="yd-accordion__content">
                        <p>
                        • Pengecoran dan perbaikan Jalan Cipadang sepanjang sekitar 540 meter untuk memperlancar arus lalu lintas dan ekonomi warga.
                        </p>
                        <P>
                        • Penataan lingkungan dan fasilitas umum secara berkala oleh pemerintah desa.
                        </P>
                    </div>
                </div>
            </div>

            {{-- Accordion: MA AL MUSTOFAWIYAH --}}
            <div class="yd-accordion yd-accordion--secondary" id="acc-ma">
                <button class="yd-accordion__trigger" aria-expanded="false" aria-controls="acc-ma-body">
                    <span class="yd-accordion__icon"><i class="fas fa-mosque"></i></span>
                    <span class="yd-accordion__title">
                        EKONOMI & PERTANIAN
                    </span>
                    <span class="yd-accordion__chevron"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="yd-accordion__body" id="acc-ma-body" aria-hidden="true">
                    <div class="yd-accordion__content">
                        <p>
                        • Pengembangan potensi pertanian hortikultura unggulan, terutama komoditas lantak dan Sale.
                        </p>
                        <p>
                        • Program peningkatan kapasitas petani milenial serta pelaku usaha mikro, kecil, dan menengah (UMKM).
                        </p>
                        <p>
                        • Dukungan hasil bumi lokal untuk sinergi ketahanan pangan dan gizi masyarakat.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Accordion: Warisan & Kelanjutan --}}
            <div class="yd-accordion yd-accordion--secondary" id="acc-warisan">
                <button class="yd-accordion__trigger" aria-expanded="false" aria-controls="acc-warisan-body">
                    <span class="yd-accordion__icon"><i class="fas fa-seedling"></i></span>
                    <span class="yd-accordion__title">SOSIAL & MITIGASI BENCANA</span>
                    <span class="yd-accordion__chevron"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="yd-accordion__body" id="acc-warisan-body" aria-hidden="true">
                    <div class="yd-accordion__content">
                        <p>
                         •  Pengembangan desain Kampung Siaga Bencana (KSB) melalui pelatihan perencanaan partisipatif warga.
                        </p>
                        <p>
                         •  Kegiatan sosialisasi kesehatan masyarakat, termasuk edukasi reproduksi remaja.
                        </p>
                        <p>
                         •  Partisipasi aktif warga dan pemdes dalam acara kebangsaan dan kemasyarakatan.
                        </p>
                    </div>
                </div>
            </div>

        </div>{{-- end tab-perkembangan --}}

    </div>
</section>