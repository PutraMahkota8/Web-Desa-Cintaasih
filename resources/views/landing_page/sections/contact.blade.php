{{-- ============================================================
     SECTION: sections/contact.blade.php
     Formulir kontak + peta + info kontak
     ============================================================ --}}

<section id="kontak" class="yd-section yd-contact">
    <div class="yd-container">

        <div class="yd-section-header yd-section-header--center">
            <p class="yd-section-label">Hubungi Kami</p>
            <h2 class="yd-section-title">Get in Touch</h2>
        </div>

        <div class="yd-contact__grid">

            {{-- Contact Info Panel --}}
            <div class="yd-contact__info">
                <h3 class="yd-contact__info-title">Informasi Kontak</h3>

                <ul class="yd-contact__info-list">
                    <li class="yd-contact__info-item">
                        <div class="yd-contact__info-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <strong>Alamat</strong>
                            <p>Jl. Pesantren No. 1, Karangtengah<br>Cianjur, Jawa Barat 43281</p>
                        </div>
                    </li>
                    <li class="yd-contact__info-item">
                        <div class="yd-contact__info-icon"><i class="fas fa-phone"></i></div>
                        <div>
                            <strong>Telepon</strong>
                            <p>MA: <a href="tel:+6285720696453">+62 857-2069-6453</a><br>
                               PKBM: <a href="tel:+6285720609821">+62 857-2060-9821</a></p>
                        </div>
                    </li>
                    <li class="yd-contact__info-item">
                        <div class="yd-contact__info-icon"><i class="fas fa-envelope"></i></div>
                        <div>
                            <strong>Email</strong>
                            <p><a href="mailto:info@darusalam.sch.id">info@darusalam.sch.id</a><br>
                               <a href="mailto:pendaftaran@darusalam.sch.id">pendaftaran@darusalam.sch.id</a></p>
                        </div>
                    </li>
                    <li class="yd-contact__info-item">
                        <div class="yd-contact__info-icon"><i class="fas fa-clock"></i></div>
                        <div>
                            <strong>Jam Kerja</strong>
                            <p>Senin – Jumat: 07.00–16.00<br>
                               Sabtu: 07.00–12.00<br>
                               Minggu: 08.00–12.00</p>
                        </div>
                    </li>
                </ul>

                {{-- Map --}}
                <div class="yd-contact__map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8504846155006!2d107.08892469999999!3d-6.9084753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e684f6342b604fb%3A0x4165ecef18f5503b!2sKantor%20Pemerintahan%20Desa%20Cintaasih!5e0!3m2!1sid!2sid!4v1786105778017!5m2!1sid!2sid"
                        width="100%"
                        height="220"
                        style="border:0; border-radius: 15px;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Lokasi Kantor Desa Cintaasih">
                    </iframe>
                </div>
            </div>

            {{-- Contact Form --}}
            <div class="yd-contact__form-wrap">
                <h3 class="yd-contact__form-title">Kirim Pesan</h3>

                @if(session('success'))
                    <div class="yd-alert yd-alert--success">
                        <i class="fas fa-check-circle"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <form class="yd-contact__form"
                      action="{{ url('/') }}"
                      method="POST"
                      id="contact-form">
                    @csrf

                    <div class="yd-contact__form-row">
                        <div class="yd-form-group">
                            <label for="first_name" class="yd-form-label">Nama Depan</label>
                            <input type="text"
                                   id="first_name"
                                   name="first_name"
                                   class="yd-form-input @error('first_name') yd-form-input--error @enderror"
                                   placeholder="Ahmad"
                                   value="{{ old('first_name') }}"
                                   required />
                            @error('first_name')
                                <span class="yd-form-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="yd-form-group">
                            <label for="last_name" class="yd-form-label">Nama Belakang</label>
                            <input type="text"
                                   id="last_name"
                                   name="last_name"
                                   class="yd-form-input @error('last_name') yd-form-input--error @enderror"
                                   placeholder="Fauzi"
                                   value="{{ old('last_name') }}"
                                   required />
                            @error('last_name')
                                <span class="yd-form-error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="yd-form-group">
                        <label for="email" class="yd-form-label">Email</label>
                        <input type="email"
                               id="email"
                               name="email"
                               class="yd-form-input @error('email') yd-form-input--error @enderror"
                               placeholder="nama@email.com"
                               value="{{ old('email') }}"
                               required />
                        @error('email')
                            <span class="yd-form-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="yd-form-group">
                        <label for="inquiry_type" class="yd-form-label">Topik Pertanyaan</label>
                        <select id="inquiry_type"
                                name="inquiry_type"
                                class="yd-form-select @error('inquiry_type') yd-form-input--error @enderror"
                                required>
                            <option value="">Pilih topik...</option>
                            <option value="penerimaan" {{ old('inquiry_type') === 'penerimaan' ? 'selected' : '' }}>Penerimaan Siswa Baru</option>
                            <option value="program" {{ old('inquiry_type') === 'program' ? 'selected' : '' }}>Informasi Program</option>
                            <option value="beasiswa" {{ old('inquiry_type') === 'beasiswa' ? 'selected' : '' }}>Beasiswa</option>
                            <option value="saran" {{ old('inquiry_type') === 'saran' ? 'selected' : '' }}>Saran & Masukan</option>
                            <option value="lainnya" {{ old('inquiry_type') === 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                        </select>
                        @error('inquiry_type')
                            <span class="yd-form-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="yd-form-group">
                        <label for="message" class="yd-form-label">Pesan</label>
                        <textarea id="message"
                                  name="message"
                                  class="yd-form-textarea @error('message') yd-form-input--error @enderror"
                                  placeholder="Tulis pesan Anda di sini..."
                                  rows="5"
                                  required>{{ old('message') }}</textarea>
                        @error('message')
                            <span class="yd-form-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="yd-btn yd-btn--primary yd-btn--full">
                        <i class="fas fa-paper-plane"></i> Kirim Pesan
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>