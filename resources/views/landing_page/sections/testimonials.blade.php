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
                        ['name' => 'Misbah', 'role' => 'Ketua RT 01 KP. Cikiara', 'text' => 'Koordinasi antara perangkat desa dan para ketua RT/RW kini berjalan sangat harmonis. Setiap ada program pembangunan atau penyuluhan, informasinya selalu tersampaikan dengan cepat dan tepat sasaran kepada warga.', 'rating' => 5],
                        ['name' => 'Aep Saepudin', 'role' => 'Ketua RW 02 KP. Legokgede', 'text' => 'Koordinasi dan pelayanan administrasi di Desa Cintaasih semakin profesional. Dengan adanya pengadaan mesin scanner baru di kantor desa, pengurusan dokumen kependudukan warga di wilayah Legokgede, Cimuncang, hingga Malangyuda jadi jauh lebih cepat terselesaikan.', 'rating' => 5],
                        ['name' => 'Edi Susanto', 'role' => 'Ketua RW 03 KP. Kuntul', 'text' => 'Kami sangat mengapresiasi program sosialisasi kesehatan seperti pencegahan stunting, kelas ibu hamil, dan PHBS yang rutin diadakan. Warga kami di Kp. Kuntul, Cimenyan, hingga Cigandoang jadi lebih paham pentingnya menjaga kesehatan keluarga dan gizi anak.', 'rating' => 5],
                        ['name' => 'Oman', 'role' => 'Ketua RW 04 KP. Sabun', 'text' => 'Pengajian rutin bulanan dan kegiatan keagamaan yang didukung penuh oleh pemerintah desa sukses mempererat tali silaturahmi antarwarga dan para tokoh agama di Kp. Sabun maupun Parabon, membuat suasana desa semakin sejuk dan harmonis.', 'rating' => 5],
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