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
                    <span class="yd-accordion__icon"><i class="fas fa-user-circle"></i></span>
                    <span class="yd-accordion__title">Latar Belakang</span>
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
                    <span class="yd-accordion__icon"><i class="fas fa-graduation-cap"></i></span>
                    <span class="yd-accordion__title">Perjalanan Pendidikan &amp; Organisasi</span>
                    <span class="yd-accordion__chevron"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="yd-accordion__body" id="acc-pendidikan-body" aria-hidden="true">
                    <div class="yd-accordion__content">
                        <p>
                            Semangat intelektualnya membawanya menempuh pendidikan tinggi di Institut Agama Islam Negeri
                            (IAIN) Jakarta—kini Universitas Islam Negeri Jakarta—dengan mengambil <strong>Fakultas Sastra
                            Arab</strong>. Selama masa kuliah, jiwa organisasinya tumbuh kuat melalui Pergerakan Mahasiswa
                            Islam Indonesia. Ia dipercaya menjadi <strong>Ketua Komisariat PMII Fakultas Sastra Arab</strong>.
                        </p>
                        <p>
                            Namun perjalanan akademiknya harus berubah ketika sang ayah jatuh sakit. Tanggung jawab keluarga
                            membuatnya bolak-balik Jakarta-Cianjur, hingga akhirnya memilih melanjutkan pendidikan di
                            <strong>STIT Al-Azhary Cianjur</strong>, demi tetap dekat dengan keluarga sekaligus melanjutkan
                            pengabdiannya.
                        </p>
                        <p>
                            Pilihan itu justru menguatkan langkah perjuangannya di Nahdlatul Ulama. KH Dandan aktif di
                            berbagai badan otonom dan struktur organisasi, mulai dari IPNU, GP Ansor, hingga dipercaya menjadi:
                        </p>
                        <ul class="yd-accordion__list">
                            <li><i class="fas fa-check-circle"></i> Ketua Tanfidziyah MWC NU Kecamatan Karangtengah</li>
                            <li><i class="fas fa-check-circle"></i> Rois Syuriyah MWC NU</li>
                            <li><i class="fas fa-check-circle"></i> Wakil Rois Syuriyah PCNU Cianjur (2006–2011) bersama KH Abdul Qodir Rozy</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Accordion 3: Pengabdian di Dunia Pendidikan --}}
            <div class="yd-accordion" id="acc-pengabdian">
                <button class="yd-accordion__trigger" aria-expanded="false" aria-controls="acc-pengabdian-body">
                    <span class="yd-accordion__icon"><i class="fas fa-chalkboard-teacher"></i></span>
                    <span class="yd-accordion__title">Pengabdian di Dunia Pendidikan</span>
                    <span class="yd-accordion__chevron"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="yd-accordion__body" id="acc-pengabdian-body" aria-hidden="true">
                    <div class="yd-accordion__content">
                        <p>
                            Di dunia pendidikan formal, pengabdiannya berlangsung panjang. Ia menjadi guru agama di
                            sejumlah sekolah negeri, mulai dari SDN Cijedil, SDN Cimurid, SDN Panembong, SDN Bojongherang,
                            SMP PGRI, PGAN, hingga menutup masa pengabdiannya di SMEA Negeri yang kini dikenal sebagai
                            <strong>SMKN 1 Cianjur</strong>.
                        </p>
                        <p>
                            Namun kiprah terbesarnya justru tumbuh dari rumahnya sendiri. Di kediamannya, KH Dandan Nasyir
                            mendirikan <strong>Majlis Taklim dan Pondok Pesantren Darussalam</strong>, yang kemudian
                            berkembang menjadi pusat pendidikan agama masyarakat.
                        </p>
                        <p>
                            Pengajian rutin yang ia bina melibatkan berbagai lapisan masyarakat: ibu-ibu, bapak-bapak,
                            santri, hingga warga umum dari berbagai wilayah seperti Panembong, Bojongmeron, Ancol, Kaum
                            Maleber, dan daerah lainnya. Bagi masyarakat, beliau bukan hanya guru, melainkan
                            <em>pengayom spiritual</em>.
                        </p>
                        <blockquote class="yd-accordion__quote">
                            Dedikasi KH Dandan Nasyir mencerminkan sosok kiai kampung yang tidak mencari panggung besar,
                            tetapi menanamkan pengaruh mendalam melalui pendidikan, pengajian, dan keteladanan hidup.
                        </blockquote>
                    </div>
                </div>
            </div>

        </div>{{-- end tab-pendiri --}}


        {{-- ══════════════════════════════════════
             PANEL:Perkembangan Desa
        ═══════════════════════════════════════ --}}
        <div class="yd-history__panel" id="tab-perkembangan">

            {{-- Intro Banner --}}
            <div class="yd-perkembangan__intro px-4 py-3">
                <div class="yd-perkembangan__intro-icon"><i class="fas fa-lightbulb"></i></div>
                <div>
                    <h3 class="yd-perkembangan__intro-title">Visi Pendidikan Menyeluruh</h3>
                    <p class="yd-perkembangan__intro-text">
                        Bagi KH Dandan Nasyir, pendidikan bukan sekadar ruang belajar, melainkan jalan panjang membangun
                        peradaban umat. Dari prinsip itulah beliau tidak hanya mendirikan majelis taklim dan pesantren,
                        tetapi juga merintis lembaga pendidikan formal dan nonformal sebagai bentuk nyata pengabdian
                        kepada masyarakat.
                    </p>
                </div>
            </div>

            {{-- Accordion: PKBM NURUL FATA --}}
            <div class="yd-accordion yd-accordion--secondary" id="acc-pkbm">
                <button class="yd-accordion__trigger" aria-expanded="false" aria-controls="acc-pkbm-body">
                    <span class="yd-accordion__icon"><i class="fas fa-book-open"></i></span>
                    <span class="yd-accordion__title">
                        PKBM NURUL FATA
                        <span class="yd-accordion__badge">Didirikan 2014</span>
                    </span>
                    <span class="yd-accordion__chevron"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="yd-accordion__body" id="acc-pkbm-body" aria-hidden="true">
                    <div class="yd-accordion__content">
                        <p>
                            Kepedulian KH Dandan Nasyir terhadap masyarakat yang putus sekolah atau tidak memiliki akses
                            pendidikan konvensional mendorong beliau mendirikan <strong>PKBM Nurul Fata</strong>. Lembaga ini
                            merupakan pusat kegiatan belajar masyarakat yang berfokus pada pendidikan nonformal dengan visi
                            memberikan kesempatan belajar bagi semua kalangan.
                        </p>
                        <p>
                            PKBM Nurul Fata menjadi wadah bagi warga belajar dari berbagai usia untuk memperoleh pendidikan
                            kesetaraan, keterampilan hidup, dan pemberdayaan sosial. Lembaga ini membuka peluang melalui:
                        </p>
                        <ul class="yd-accordion__list">
                            <li><i class="fas fa-check-circle"></i> <strong>Paket A</strong> – setara SD/MI</li>
                            <li><i class="fas fa-check-circle"></i> <strong>Paket B</strong> – setara SMP/MTs</li>
                            <li><i class="fas fa-check-circle"></i> <strong>Paket C</strong> – setara SMA/MA</li>
                        </ul>
                        <p>
                            Bagi KH Dandan Nasyir, pendidikan harus hadir untuk semua kalangan—tanpa batas usia, ekonomi,
                            maupun latar belakang sosial. PKBM Nurul Fata menjadi simbol kepedulian sosial sekaligus bukti
                            bahwa pendidikan dapat menjadi alat perubahan masyarakat.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Accordion: MA AL MUSTOFAWIYAH --}}
            <div class="yd-accordion yd-accordion--secondary" id="acc-ma">
                <button class="yd-accordion__trigger" aria-expanded="false" aria-controls="acc-ma-body">
                    <span class="yd-accordion__icon"><i class="fas fa-mosque"></i></span>
                    <span class="yd-accordion__title">
                        MA AL MUSTOFAWIYAH
                        <span class="yd-accordion__badge">Didirikan Juli 2020</span>
                    </span>
                    <span class="yd-accordion__chevron"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="yd-accordion__body" id="acc-ma-body" aria-hidden="true">
                    <div class="yd-accordion__content">
                        <p>
                            Di bawah naungan semangat dakwah dan pemberdayaan, KH Dandan Nasyir mendirikan
                            <strong>Madrasah Aliyah (MA) Al Mustofawiyah</strong> pada Juli 2020. Sekolah ini merupakan
                            lembaga pendidikan formal yang memberikan akses pembelajaran berbasis keislaman bagi generasi muda.
                        </p>
                        <p>
                            Kehadiran MA Al Mustofawiyah menjadi jawaban atas kebutuhan masyarakat akan pendidikan menengah
                            yang memadukan ilmu agama dengan pengetahuan umum. Sekolah ini lahir dari cita-cita besar beliau
                            agar anak-anak di lingkungan sekitar memiliki kesempatan memperoleh pendidikan berkualitas tanpa
                            harus meninggalkan nilai-nilai keagamaan.
                        </p>
                        <p>
                            Melalui MA Al Mustofawiyah, KH Dandan Nasyir berupaya mencetak generasi yang tidak hanya cerdas
                            secara akademik, tetapi juga kuat dalam <em>akhlak dan spiritualitas</em>.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Accordion: Warisan & Kelanjutan --}}
            <div class="yd-accordion yd-accordion--secondary" id="acc-warisan">
                <button class="yd-accordion__trigger" aria-expanded="false" aria-controls="acc-warisan-body">
                    <span class="yd-accordion__icon"><i class="fas fa-seedling"></i></span>
                    <span class="yd-accordion__title">Warisan &amp; Kelanjutan Perjuangan</span>
                    <span class="yd-accordion__chevron"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="yd-accordion__body" id="acc-warisan-body" aria-hidden="true">
                    <div class="yd-accordion__content">
                        <p>
                            Pendirian MA Al Mustofawiyah dan PKBM Nurul Fata memperlihatkan visi besar KH Dandan Nasyir
                            dalam membangun masyarakat melalui jalur pendidikan yang menyeluruh. Ia memahami bahwa kemajuan
                            umat tidak cukup hanya dengan dakwah di mimbar, tetapi juga melalui lembaga yang mampu
                            melahirkan generasi berilmu, mandiri, dan berdaya saing.
                        </p>
                        <p>
                            Kini, setelah wafatnya, perjuangan itu tidak berhenti. Pondok Pesantren dan Yayasan Darussalam
                            terus dilanjutkan oleh putra-putrinya, menjaga warisan ilmu, akhlak, dan pengabdian yang telah
                            ia bangun selama puluhan tahun.
                        </p>
                        <blockquote class="yd-accordion__quote">
                            ✨ KH Dandan Nasyir telah menanam fondasi penting bagi kemajuan pendidikan di Cianjur—
                            menghubungkan nilai keislaman, ilmu pengetahuan, dan pemberdayaan masyarakat dalam satu visi
                            besar: mencerdaskan kehidupan umat.
                        </blockquote>
                        <p>
                            Nama KH Dandan Nasyir akan terus hidup dalam ingatan para santri, masyarakat, dan generasi
                            penerus sebagai ulama yang menanam ilmu dengan ketulusan, serta membangun peradaban dari
                            lingkungan terdekatnya.
                        </p>
                    </div>
                </div>
            </div>

        </div>{{-- end tab-perkembangan --}}

    </div>
</section>