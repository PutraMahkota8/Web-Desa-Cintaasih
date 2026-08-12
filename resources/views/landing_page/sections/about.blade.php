{{-- ============================================================
     SECTION: sections/about.blade.php
     Tentang Kami — stats, narasi, foto + Institution Modals
     ============================================================ --}}

<section id="tentang" class="yd-section yd-about">
    <div class="yd-container">

        {{-- Section Header --}}
        <div class="yd-section-header">
            <p class="yd-section-label">Tentang Kami</p>
            <h2 class="yd-section-title">Mengabdi Dengan Cinta, Berkarya Dalam Asih, Bersama Desa Cintaasih</h2>
        </div>

        {{-- Main Grid: Text + Image --}}
        <div class="yd-about__grid">

            {{-- Text Side --}}
            <div class="yd-about__text">
                <p class="text-justify">
                    Pemerintah Desa Cintaasih hadir di tengah kehangatan wilayah administrasi Gekbrong, Cianjur, dengan tekad kuat untuk membangun masyarakat yang mandiri secara ekonomi dan maju dalam pembangunan infrastruktur. 
                    Kami percaya bahwa kemajuan desa berawal dari sinergi, rasa cinta, dan keterbukaan yang nyata antara perangkat daerah serta seluruh lapisan warga. 
                    Desa Cintaasih berkomitmen penuh menghadirkan pelayanan publik berkualitas tinggi yang merangkul potensi lokal di sektor pertanian, UMKM, serta terus melestarikan warisan nilai gotong royong dan semangat nasionalisme demi tumbuh bersama menuju masa depan yang lebih sejahtera.
                </p>

                {{-- Stats --}}
                <div class="yd-about__stats">
                    <div class="yd-about__stat">
                        <span class="yd-about__stat-num">35<sup>+</sup></span>
                        <span class="yd-about__stat-label">Tahun Berdiri</span>
                    </div>
                    <div class="yd-about__stat-divider"></div>
                    <div class="yd-about__stat">
                        <span class="yd-about__stat-num">12K<sup>+</sup></span>
                        <span class="yd-about__stat-label">Alumni &amp; Anggota</span>
                    </div>
                    <div class="yd-about__stat-divider"></div>
                    <div class="yd-about__stat">
                        <span class="yd-about__stat-num">2</span>
                        <span class="yd-about__stat-label">Lembaga Pendidikan</span>
                    </div>
                </div>

                <a href="#sejarah" class="yd-btn yd-btn--primary yd-about__cta">
                    Selengkapnya <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            {{-- Image Side --}}
            <div class="yd-about__image-wrap">
                <div class="yd-about__image-frame">
                    <img src="{{ asset('landing_page/images/belajar.jpeg') }}"
                         alt="Kegiatan belajar mengajar di Yayasan Darusalam"
                         class="yd-about__image"
                         loading="lazy" />
                    <div class="yd-about__image-badge">
                        <p class="yd-about__image-badge-text">Sistem Informasi Desa Resmi &amp; Pelayanan</p>
                    </div>
                </div>
                <div class="yd-about__image-deco" aria-hidden="true"></div>
            </div>

        </div>

        {{-- Two Institutions Cards --}}
        <div class="yd-about__institutions">

            {{-- Card: VISI --}}
            <div class="yd-about__inst-card">
                <div class="yd-about__inst-icon"><i class="fas fa-mosque"></i></div>
               akademik dan pembentukan karakter Islami bagi siswa yang ingin melanjutkan
                       <h3 class="yd-about__inst-title">VISI</h3>
                <p class="yd-about__inst-desc">
                    Madrasah Aliyah Swasta untuk tingkat SMA/MA dengan fokus pada keunggulan
                  ke jenjang pendidikan tinggi.
                </p>
            </div>

            {{-- Card: MISI --}}
            <div class="yd-about__inst-card">
                <div class="yd-about__inst-icon"><i class="fas fa-book-open"></i></div>
                <h3 class="yd-about__inst-title">MISI</h3>
                <p class="yd-about__inst-desc">
                    Pusat Kegiatan Belajar Masyarakat yang menyediakan program pendidikan
                    fleksibel untuk masyarakat umum, mencakup program kesetaraan dan keterampilan
                    praktis sesuai kebutuhan komunitas.
                </p>
            </div>

        </div>

    </div>
</section>


{{-- ================================================================
     MODAL: MAS AL MUSTOFAWIYAH
================================================================ --}}
<div class="yd-modal" id="modal-ma" role="dialog" aria-modal="true"
     aria-labelledby="modal-ma-title" aria-hidden="true">
    <div class="yd-modal__backdrop"></div>
    <div class="yd-modal__dialog">

        {{-- Header --}}
        <div class="yd-modal__header yd-modal__header--primary p-3">
            <div class="yd-modal__header-icon"><i class="fas fa-mosque"></i></div>
            <div class="yd-modal__header-text">
                <p class="yd-modal__header-label">Lembaga Pendidikan Formal</p>
                <h2 class="yd-modal__title" id="modal-ma-title">MAS AL MUSTOFAWIYAH</h2>
                <p class="yd-modal__header-sub">Madrasah Aliyah Swasta</p>
            </div>
            <button class="yd-modal__close" data-modal-close aria-label="Tutup modal">
                <i class="fas fa-times"></i>
            </button>
        </div>

        {{-- Body --}}
        <div class="yd-modal__body">

            {{-- Visi --}}
            <div class="yd-modal__visi">
                <div class="yd-modal__visi-icon"><i class="fas fa-bullseye"></i></div>
                <div>
                    <h3 class="yd-modal__section-title">Visi</h3>
                    <p class="yd-modal__visi-text">
                        Unggul dalam Akademik dan Non-Akademik yang Berlandaskan Wahyu untuk
                        Terbentuknya Jiwa Khalifah Abad 21.
                    </p>
                </div>
            </div>

            {{-- Misi --}}
            <div class="yd-modal__misi p-3">
                <div class="yd-modal__misi-header">
                    <i class="fas fa-list-check yd-modal__misi-header-icon"></i>
                    <h3 class="yd-modal__section-title">Misi</h3>
                </div>
                <ul class="yd-modal__misi-list">
                    @php $misiMA = [
                        'Mewujudkan religius culture dengan mengamalkan dan menghayati nilai-nilai ajaran agama Islam Ahlussunah wal jamaah secara nyata.',
                        'Mewujudkan nilai-nilai ahlakul karimah di lingkungan madrasah.',
                        'Membudayakan sikap disiplin semua warga madrasah.',
                        'Membudayakan Senyum, Salam, Sapa, Sopan, Santun, dan Shadaqah (6S) di lingkungan madrasah.',
                        'Membudayakan lingkungan Madrasah yang bersih, sehat, indah, dan Islami.',
                        'Menciptakan kondisi lingkungan pembelajaran yang Aktif, Inovatif, Kreatif, Efektif, dan menyenangkan dengan pendekatan scientific serta nyaman dan kondusif.',
                        'Menciptakan kondisi lingkungan pembelajaran yang bernuansa literasi dan numerasi.',
                        'Membimbing dan mengembangkan minat serta bakat peserta didik melalui kegiatan pengembangan diri baik intrakurikuler maupun ekstrakurikuler secara efektif.',
                        'Mengoptimalkan potensi akademik dan non akademik melalui proses pembelajaran dan bimbingan.',
                        'Meningkatkan profesionalisme dan kompetensi tenaga pendidik dan kependidikan sesuai perkembangan dunia pendidikan.',
                        'Meningkatkan pelayanan yang optimal bagi seluruh warga madrasah.',
                        'Membangun dan meningkatkan kerjasama antara warga madrasah dengan lingkungan melalui berbagai kegiatan positif.',
                    ]; @endphp

                    @foreach($misiMA as $i => $item)
                    <li class="yd-modal__misi-item">
                        <span class="yd-modal__misi-num">{{ $i + 1 }}</span>
                        <span class="yd-modal__misi-text">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>

        {{-- Footer --}}
        <div class="yd-modal__footer p-3">
            <a href="#MA" class="yd-btn yd-btn--primary" data-modal-close>
                <i class="fas fa-arrow-right"></i> Lihat Program MA
            </a>
            <button class="yd-btn yd-btn--outlined" data-modal-close>Tutup</button>
        </div>

    </div>
</div>


{{-- ================================================================
     MODAL: PKBM NURUL FATA
================================================================ --}}
<div class="yd-modal" id="modal-pkbm" role="dialog" aria-modal="true"
     aria-labelledby="modal-pkbm-title" aria-hidden="true">
    <div class="yd-modal__backdrop"></div>
    <div class="yd-modal__dialog">

        {{-- Header --}}
        <div class="yd-modal__header yd-modal__header--secondary p-3">
            <div class="yd-modal__header-icon"><i class="fas fa-book-open"></i></div>
            <div class="yd-modal__header-text">
                <p class="yd-modal__header-label">Lembaga Pendidikan Non-Formal</p>
                <h2 class="yd-modal__title" id="modal-pkbm-title">PKBM NURUL FATA</h2>
                <p class="yd-modal__header-sub">Pusat Kegiatan Belajar Masyarakat</p>
            </div>
            <button class="yd-modal__close" data-modal-close aria-label="Tutup modal">
                <i class="fas fa-times"></i>
            </button>
        </div>

        {{-- Body --}}
        <div class="yd-modal__body p-3">

            {{-- Visi --}}
            <div class="yd-modal__visi yd-modal__visi--secondary">
                <div class="yd-modal__visi-icon"><i class="fas fa-bullseye"></i></div>
                <div>
                    <h3 class="yd-modal__section-title">Visi</h3>
                    <p class="yd-modal__visi-text">
                        Unggul dalam Pendidikan Masyarakat untuk Menghadapi Perubahan Zaman dan
                        Memfasilitasi Peserta Didik Jiwa Kepemimpinan Abad 21.
                    </p>
                </div>
            </div>

            {{-- Misi --}}
            <div class="yd-modal__misi">
                <div class="yd-modal__misi-header">
                    <i class="fas fa-list-check yd-modal__misi-header-icon yd-modal__misi-header-icon--secondary"></i>
                    <h3 class="yd-modal__section-title">Misi</h3>
                </div>
                <ul class="yd-modal__misi-list">
                    @php $misiPKBM = [
                        'Mewujudkan peserta didik yang berlandaskan pengetahuan, agama, dan teknologi.',
                        'Menyadarkan masyarakat akan pentingnya kerja intelektual dibanding kerja fisik.',
                        'Mewujudkan peserta didik memiliki ijazah jenjang pendidikan SD, SLTP, dan SLTA.',
                        'Meningkatkan kemampuan masyarakat untuk berkarya positif.',
                        'Meningkatkan kesejahteraan hidup masyarakat.',
                        'Mengembangkan usaha-usaha produktif masyarakat.',
                        'Meningkatkan Indeks Pembangunan Manusia (IPM) bidang pendidikan.',
                    ]; @endphp

                    @foreach($misiPKBM as $i => $item)
                    <li class="yd-modal__misi-item yd-modal__misi-item--secondary">
                        <span class="yd-modal__misi-num yd-modal__misi-num--secondary">{{ $i + 1 }}</span>
                        <span class="yd-modal__misi-text">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>

        {{-- Footer --}}
        <div class="yd-modal__footer p-3">
            <a href="#PKBM" class="yd-btn yd-btn--secondary" data-modal-close>
                <i class="fas fa-arrow-right"></i> Lihat Program PKBM
            </a>
            <button class="yd-btn yd-btn--outlined" data-modal-close>Tutup</button>
        </div>

    </div>
</div>