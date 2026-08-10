{{-- ============================================================
     SECTION: sections/testimonials.blade.php
     Alumni & wali santri testimonials
     ============================================================ --}}

<section class="yd-section yd-testimonials">
    <div class="yd-container">

        <div class="yd-section-header yd-section-header--center">
            <p class="yd-section-label">Suara dari Komunitas</p>
            <h2 class="yd-section-title">Voices of Our Community</h2>
        </div>

        <div class="yd-testimonials__carousel" id="testimonials-carousel">
            <div class="yd-testimonials__track" id="testimonials-track">
                @php
                    $testimonials = [
                        ['name' => 'Aisha Nur Azizah', 'role' => 'MAS AL MUSTOFAWIYAH 2023', 'avatar' => asset('images/avatar-1.jpg'), 'text' => 'Pendidikan di MAS AL MUSTOFAWIYAH telah mengubah hidup saya. Guru-guru yang peduli, fasilitas lengkap, dan lingkungan yang mendukung membantu saya meraih mimpi masuk ITB. Terima kasih Yayasan Darusalam!', 'rating' => 5],
                        ['name' => 'Budi Suharno', 'role' => 'MAS AL MUSTOFAWIYAH 2022', 'avatar' => asset('images/avatar-2.jpg'), 'text' => 'Selain akademik, sekolah ini mengajarkan nilai-nilai karakter yang kuat. Kegiatan ekstrakurikuler seperti Pramuka dan Silat membentuk saya menjadi pribadi yang disiplin dan percaya diri. Sekarang saya kuliah di UI dan tetap aktif.', 'rating' => 5],
                        ['name' => 'Citra Dewi Putri', 'role' => 'PKBM NURUL FATA 2023', 'avatar' => asset('images/avatar-3.jpg'), 'text' => 'Program PKBM NURUL FATA memberikan saya kesempatan untuk melanjutkan pendidikan. Program yang fleksibel dan dukungan mentor yang luar biasa membuat saya bisa bekerja dan belajar bersamaan.', 'rating' => 5],
                        ['name' => 'Dr.Dedi Gunawan', 'role' => 'Alumni 2015 (Sekarang dosen)', 'avatar' => asset('images/avatar-4.jpg'), 'text' => 'Saya bangga pernah menjadi bagian dari Yayasan Darusalam. Fondasi akademik dan karakter yang diberikan telah membawa saya hingga meraih gelar doktor. Sekarang saya berkontribusi kembali sebagai dosen.', 'rating' => 5],
                    ];
                @endphp

                @foreach($testimonials as $testimonial)
                <div class="yd-testimonial-card">
                    <div class="yd-testimonial-card__stars" aria-label="Rating {{ $testimonial['rating'] }} dari 5">
                        @for($i = 0; $i < $testimonial['rating']; $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                    </div>
                    <blockquote class="yd-testimonial-card__text">
                        "{{ $testimonial['text'] }}"
                    </blockquote>
                    <div class="yd-testimonial-card__author">
                        <img src="{{ $testimonial['avatar'] }}"
                             alt="{{ $testimonial['name'] }}"
                             class="yd-testimonial-card__avatar"
                             loading="lazy" />
                        <div class="yd-testimonial-card__author-info">
                            <span class="yd-testimonial-card__name">{{ $testimonial['name'] }}</span>
                            <span class="yd-testimonial-card__role">{{ $testimonial['role'] }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Controls --}}
            <div class="yd-testimonials__controls">
                <button class="yd-testimonials__btn" id="test-prev" aria-label="Testimonial sebelumnya">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div class="yd-testimonials__dots" id="test-dots">
                    @foreach($testimonials as $i => $t)
                    <button class="yd-testimonials__dot {{ $i === 0 ? 'active' : '' }}"
                            data-index="{{ $i }}"
                            aria-label="Testimonial {{ $i + 1 }}"></button>
                    @endforeach
                </div>
                <button class="yd-testimonials__btn" id="test-next" aria-label="Testimonial selanjutnya">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>

    </div>
</section>