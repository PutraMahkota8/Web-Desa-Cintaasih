@extends('admin.layouts.app')

@section('title', 'Tambah Pengguna – EduFoundation LMS')

@push('styles')
    <style>
        .role-card {
            flex: 1;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 18px;
            border: 2px solid #c4c5d5;
            border-radius: 12px;
            cursor: pointer;
            transition: border-color 0.15s, background 0.15s;
            background: transparent;
            text-align: left;
        }

        .role-card:hover {
            border-color: #757684;
            background: #eceef0;
        }

        .role-card.selected {
            border-color: #064e3b;
            background: #ecf8f3;
        }

        .role-card .role-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            flex-shrink: 0;
            background: #e6e8ea;
            color: #444653;
            transition: background 0.15s, color 0.15s;
        }

        .role-card.selected .role-icon {
            background: #064e3b;
            color: #ffffff;
        }

        .role-card .role-label {
            font-size: 14px;
            font-weight: 600;
            color: #191c1e;
        }

        .role-card .role-desc {
            font-size: 12px;
            color: #444653;
            margin-top: 1px;
        }

        /* Field group animation */
        .field-group {
            display: contents;
        }

        .field-group.hidden-group {
            display: none;
        }

        /* Input styling */
        .form-input,
        .form-select,
        .form-textarea {
            width: 100%;
            padding: 10px 14px;
            font-size: 13px;
            border: 1px solid #c4c5d5;
            border-radius: 8px;
            background: #ffffff;
            color: #191c1e;
            outline: none;
            transition: border-color 0.15s, box-shadow 0.15s;
            font-family: inherit;
        }

        .form-input:focus,
        .form-select:focus,
        .form-textarea:focus {
            border-color: #064e3b;
            box-shadow: 0 0 0 3px rgba(6, 78, 59, 0.12);
        }

        .form-textarea {
            resize: vertical;
            min-height: 80px;
        }

        .form-label {
            display: block;
            font-size: 12px;
            font-weight: 600;
            color: #444653;
            margin-bottom: 6px;
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }

        .form-label .required {
            color: #ba1a1a;
            margin-left: 2px;
        }

        .form-hint {
            font-size: 11px;
            color: #444653;
            margin-top: 4px;
        }

        /* Section divider */
        .section-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 16px;
            padding-bottom: 10px;
            border-bottom: 1px solid #c4c5d5;
        }

        .section-header .section-icon {
            width: 30px;
            height: 30px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            background: #ecf8f3;
            color: #064e3b;
            flex-shrink: 0;
        }

        .section-header h3 {
            font-size: 14px;
            font-weight: 700;
            color: #191c1e;
        }

        .section-header p {
            font-size: 12px;
            color: #444653;
        }

        /* Role-specific section highlight */
        .role-section {
            background: #eceef0;
            border: 1px dashed #c4c5d5;
            border-radius: 12px;
            padding: 20px;
            transition: all 0.2s;
        }

        /* Password toggle */
        .input-wrap {
            position: relative;
        }

        .input-wrap .toggle-pw {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: #444653;
            font-size: 14px;
            padding: 0;
            line-height: 1;
        }

        /* Kelas Trigger Field */
        .kelas-trigger {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 9px 12px;
            border: 1px solid #c4c5d5;
            border-radius: 8px;
            background: #ffffff;
            min-height: 40px;
            cursor: pointer;
            transition: border-color 0.15s;
        }

        .kelas-trigger:hover {
            border-color: #757684;
        }

        .kelas-trigger.locked {
            background: #f2f4f6;
            border-style: dashed;
            cursor: not-allowed;
        }

        .kelas-trigger-placeholder {
            font-size: 13px;
            color: #757684;
            flex: 1;
        }

        .kelas-tags-wrap {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            flex: 1;
        }

        .kelas-tag {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            background: #ecf8f3;
            color: #064e3b;
            font-size: 12px;
            font-weight: 600;
            padding: 3px 8px;
            border-radius: 6px;
            border: 1px solid rgba(6, 78, 59, 0.2);
        }

        .kelas-tag-remove {
            font-size: 10px;
            cursor: pointer;
            opacity: 0.6;
            background: none;
            border: none;
            color: #064e3b;
            padding: 0;
            line-height: 1;
            display: flex;
        }

        .kelas-tag-remove:hover {
            opacity: 1;
        }

        .kelas-trigger-btn {
            font-size: 12px;
            font-weight: 600;
            color: #444653;
            display: flex;
            align-items: center;
            gap: 4px;
            white-space: nowrap;
            padding: 3px 10px;
            border-radius: 6px;
            border: 1px solid #c4c5d5;
            background: #ffffff;
            cursor: pointer;
            flex-shrink: 0;
            transition: all 0.15s;
        }

        .kelas-trigger-btn:hover {
            background: #f2f4f6;
            border-color: #757684;
        }

        /* Modal Kelas */
        .kelas-modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .kelas-modal-overlay.open {
            display: flex;
        }

        .kelas-modal {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #c4c5d5;
            width: 100%;
            max-width: 460px;
            max-height: 90vh;
            display: flex;
            flex-direction: column;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.16);
            animation: modalIn 0.18s ease;
        }

        @keyframes modalIn {
            from {
                opacity: 0;
                transform: scale(0.97) translateY(8px);
            }

            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        .kelas-modal-head {
            padding: 14px 18px;
            border-bottom: 1px solid #e6e8ea;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-shrink: 0;
        }

        .kelas-modal-title {
            font-size: 14px;
            font-weight: 700;
            color: #191c1e;
        }

        .kelas-modal-sub {
            font-size: 11px;
            color: #444653;
            margin-top: 2px;
        }

        .kelas-modal-close {
            background: none;
            border: none;
            cursor: pointer;
            color: #444653;
            font-size: 16px;
            width: 28px;
            height: 28px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.15s;
        }

        .kelas-modal-close:hover {
            background: #f2f4f6;
            color: #191c1e;
        }

        .kelas-modal-search {
            padding: 10px 18px;
            border-bottom: 1px solid #e6e8ea;
            position: relative;
            flex-shrink: 0;
        }

        .kelas-modal-search i {
            position: absolute;
            left: 30px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 13px;
            color: #757684;
        }

        .kelas-modal-search input {
            width: 100%;
            padding: 7px 12px 7px 32px;
            font-size: 13px;
            border: 1px solid #c4c5d5;
            border-radius: 8px;
            background: #f2f4f6;
            outline: none;
            color: #191c1e;
            transition: border-color 0.15s;
        }

        .kelas-modal-search input:focus {
            border-color: #064e3b;
            background: #fff;
        }

        .kelas-modal-list {
            overflow-y: auto;
            flex: 1;
            padding: 6px 0;
        }

        .kelas-modal-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 18px;
            cursor: pointer;
            transition: background 0.1s;
            border-bottom: 1px solid #f2f4f6;
        }

        .kelas-modal-item:last-child {
            border-bottom: none;
        }

        .kelas-modal-item:hover {
            background: #f2f4f6;
        }

        .kelas-modal-item.checked {
            background: #ecf8f3;
        }

        .kelas-modal-item.checked:hover {
            background: #d0eee5;
        }

        .kelas-check-box {
            width: 17px;
            height: 17px;
            border-radius: 4px;
            border: 1.5px solid #c4c5d5;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            color: transparent;
            transition: all 0.15s;
        }

        .kelas-modal-item.checked .kelas-check-box {
            background: #064e3b;
            border-color: #064e3b;
            color: #fff;
        }

        .kelas-modal-item-info {
            flex: 1;
        }

        .kelas-modal-item-name {
            font-size: 13px;
            font-weight: 600;
            color: #191c1e;
        }

        .kelas-modal-item.checked .kelas-modal-item-name {
            color: #064e3b;
        }

        .kelas-modal-item-count {
            font-size: 11px;
            color: #757684;
            margin-top: 1px;
        }

        .kelas-modal-empty {
            padding: 32px 18px;
            text-align: center;
            font-size: 13px;
            color: #757684;
        }

        .kelas-modal-foot {
            padding: 12px 18px;
            border-top: 1px solid #e6e8ea;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-shrink: 0;
        }

        .kelas-modal-count {
            font-size: 12px;
            color: #444653;
        }

        .kelas-modal-count span {
            font-weight: 700;
            color: #064e3b;
        }

        .kelas-modal-actions {
            display: flex;
            gap: 8px;
        }

        .btn-modal-cancel {
            font-size: 13px;
            font-weight: 500;
            padding: 7px 14px;
            border-radius: 8px;
            border: 1px solid #c4c5d5;
            background: transparent;
            cursor: pointer;
            color: #444653;
            transition: all 0.15s;
        }

        .btn-modal-cancel:hover {
            background: #f2f4f6;
        }

        .btn-modal-confirm {
            font-size: 13px;
            font-weight: 600;
            padding: 7px 16px;
            border-radius: 8px;
            border: none;
            background: #064e3b;
            color: #fff;
            cursor: pointer;
            transition: opacity 0.15s;
        }

        .btn-modal-confirm:hover {
            opacity: 0.88;
        }

        /* Sertifikasi toggle */
        .toggle-switch {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }

        .toggle-switch input[type="checkbox"] {
            width: 36px;
            height: 20px;
            accent-color: #064e3b;
            cursor: pointer;
        }

        .toggle-switch span {
            font-size: 13px;
            font-weight: 500;
            color: #191c1e;
        }
    </style>
@endpush

@section('content')

    <div class="flex flex-col gap-lg mx-auto">

        {{-- Page Header --}}
        <div class="flex items-center gap-md">
            <button onclick="history.back()"
                class="w-9 h-9 rounded-lg border border-outline-variant flex items-center justify-center hover:bg-surface-container transition-all text-on-surface-variant">
                <i class="fa-solid fa-arrow-left text-sm"></i>
            </button>
            <div>
                <h2 class="text-h2 font-h2 font-bold text-primary">Tambah Pengguna</h2>
                <p class="mt-1 text-label-md font-medium text-on-surface-variant">Isi data akun dan profil pengguna baru</p>
            </div>
        </div>

        <form action="#" method="POST" id="userForm">
            @csrf

            {{-- ── SECTION 1: Role Selector ── --}}
            <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-xl shadow-sm mb-lg">
                <div class="section-header">
                    <div class="section-icon"><i class="fa-solid fa-id-badge"></i></div>
                    <div>
                        <h3>Pilih Role</h3>
                        <p>Role menentukan data profil yang perlu diisi</p>
                    </div>
                </div>

                <div class="flex gap-md">
                    <button type="button" class="role-card selected" id="card-guru" onclick="switchRole('guru')">
                        <div class="role-icon"><i class="fa-solid fa-chalkboard-teacher"></i></div>
                        <div>
                            <div class="role-label">Guru</div>
                            <div class="role-desc">Tenaga pengajar & pendidik</div>
                        </div>
                    </button>
                    <button type="button" class="role-card" id="card-siswa" onclick="switchRole('siswa')">
                        <div class="role-icon"><i class="fa-solid fa-user-graduate"></i></div>
                        <div>
                            <div class="role-label">Siswa</div>
                            <div class="role-desc">Peserta didik aktif</div>
                        </div>
                    </button>
                </div>
                <input type="hidden" name="role" id="input-role" value="guru">
            </div>

            {{-- ── SECTION 2: Data Akun ── --}}
            <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-xl shadow-sm mb-lg">
                <div class="section-header">
                    <div class="section-icon"><i class="fa-solid fa-lock"></i></div>
                    <div>
                        <h3>Data Akun</h3>
                        <p>Informasi login pengguna</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                    <div>
                        <label class="form-label">Nama Lengkap <span class="required">*</span></label>
                        <input type="text" name="name" class="form-input rounded-md" placeholder="Masukkan nama lengkap"
                            required>
                    </div>
                    <div>
                        <label class="form-label">Email <span class="required">*</span></label>
                        <input type="email" name="email" class="form-input rounded-md" placeholder="contoh@edufoundation.id"
                            required>
                    </div>
                    <div>
                        <label class="form-label">Password <span class="required">*</span></label>
                        <div class="input-wrap">
                            <input type="password" name="password" id="pw-field" class="form-input pr-10 rounded-md"
                                placeholder="Min. 8 karakter" required>
                            <button type="button" class="toggle-pw" onclick="togglePw('pw-field', 'eye-pw')">
                                <i class="fa-solid fa-eye" id="eye-pw"></i>
                            </button>
                        </div>
                    </div>
                    <div>
                        <label class="form-label">Konfirmasi Password <span class="required">*</span></label>
                        <div class="input-wrap">
                            <input type="password" name="password_confirmation" id="pw-confirm"
                                class="form-input pr-10 rounded-md" placeholder="Ulangi password" required>
                            <button type="button" class="toggle-pw" onclick="togglePw('pw-confirm', 'eye-confirm')">
                                <i class="fa-solid fa-eye" id="eye-confirm"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ── SECTION 3: Data Pribadi (shared) ── --}}
            <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-xl shadow-sm mb-lg">
                <div class="section-header">
                    <div class="section-icon"><i class="fa-solid fa-user"></i></div>
                    <div>
                        <h3>Data Pribadi</h3>
                        <p>Informasi identitas dasar</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                    <div>
                        <label class="form-label">NIK</label>
                        <input type="text" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '')" name="nik" class="form-input rounded-md" placeholder="16 digit NIK"
                            maxlength="16">
                    </div>
                    <div>
                        <label class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-select rounded-md">
                            <option value="">— Pilih —</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div>
                        <label class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-input rounded-md" placeholder="Kota/Kabupaten">
                    </div>
                    <div>
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-input rounded-md">
                    </div>
                    <div class="md:col-span-2">
                        <label class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-textarea rounded-md" placeholder="Alamat lengkap..."></textarea>
                    </div>
                    <div>
                        <label class="form-label">No. HP</label>
                        <input type="text" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                            name="no_hp" class="form-input rounded-md" placeholder="08xxxxxxxxxx">
                    </div>
                </div>
            </div>

            {{-- ── SECTION 4: Data Spesifik Role ── --}}

            {{-- === GURU FIELDS === --}}
            <div id="section-guru" class="mb-lg">
                <div class="role-section">
                    <div class="section-header">
                        <div class="section-icon"><i class="fa-solid fa-chalkboard-teacher"></i></div>
                        <div>
                            <h3>Data Guru</h3>
                            <p>Informasi kepegawaian & akademik pengajar</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                        <div>
                            <label class="form-label">NIP</label>
                            <input type="text" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '')" name="nip" class="form-input rounded-md" placeholder="Nomor Induk Pegawai">
                            <p class="form-hint">Kosongkan jika belum memiliki NIP</p>
                        </div>
                        <div>
                            <label class="form-label">Pendidikan Terakhir</label>
                            <select name="pendidikan_terakhir" class="form-select rounded-md">
                                <option value="">— Pilih —</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                        <div>
                            <label class="form-label">Tahun Lulus</label>
                            <input type="number" name="tahun_lulus" class="form-input rounded-md" placeholder="Contoh: 2015"
                                min="1970" max="{{ date('Y') }}">
                        </div>
                        <div>
                            <label class="form-label">Status Kepegawaian</label>
                            <select name="status_kepegawaian" class="form-select rounded-md">
                                <option value="">— Pilih —</option>
                                <option value="PNS">PNS</option>
                                <option value="PPPK">PPPK</option>
                                <option value="GTT">GTT (Guru Tidak Tetap)</option>
                                <option value="Honorer">Honorer</option>
                            </select>
                        </div>
                        <div>
                            <label class="form-label">Tanggal Masuk</label>
                            <input type="date" name="tanggal_masuk" class="form-input rounded-md">
                        </div>

                        {{-- Sertifikasi toggle --}}
                        <div class="md:col-span-2">
                            <label class="form-label">Sertifikasi</label>
                            <label class="toggle-switch">
                                <input type="checkbox" name="sertifikasi" id="toggle-sertifikasi" value="1"
                                    class="rounded-md p-3" onchange="toggleSertifikasi(this)">
                                <span id="label-sertifikasi">Belum Tersertifikasi</span>
                            </label>
                        </div>

                        {{-- No Sertifikasi (muncul kalau sertifikasi = true) --}}
                        <div id="field-no-sertifikasi" class="md:col-span-2 hidden">
                            <label class="form-label">No. Sertifikasi</label>
                            <input type="text" name="no_sertifikasi" class="form-input rounded-md"
                                placeholder="Nomor sertifikasi pendidik">
                        </div>
                    </div>
                </div>
            </div>

            {{-- === SISWA FIELDS === --}}
            <div id="section-siswa" class="mb-lg hidden">
                <div class="role-section">
                    <div class="section-header">
                        <div class="section-icon"><i class="fa-solid fa-user-graduate"></i></div>
                        <div>
                            <h3>Data Siswa</h3>
                            <p>Informasi akademik & keluarga peserta didik</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                        <div>
                            <label class="form-label">NIS <span class="required">*</span></label>
                            <input type="text" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                name="nis" class="form-input rounded-md" placeholder="Nomor Induk Siswa">
                        </div>
                        <div>
                            <label class="form-label">NISN</label>
                            <input type="text" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                name="nisn" class="form-input rounded-md" placeholder="Nomor Induk Siswa Nasional">
                        </div>
                        <div>
                            <label class="form-label">Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" class="form-input rounded-md"
                                placeholder="Nama sekolah asal (SMP/MTs)">
                        </div>
                        <div>
                            <label class="form-label">Tahun Masuk <span class="required">*</span></label>
                            <input type="date" name="tahun_masuk" class="form-input rounded-md" placeholder="Contoh: 2024"
                                min="2000" max="{{ date('Y') }}">
                        </div>
                        <div>
                            <label class="form-label">Status Siswa</label>
                            <select name="status_siswa" class="form-select rounded-md">
                                <option value="">— Pilih —</option>
                                <option value="aktif">Aktif</option>
                                <option value="non-aktif">Non-Aktif</option>
                                <option value="lulus">Lulus</option>
                                <option value="keluar">Keluar</option>
                            </select>
                        </div>

                        {{-- Lembaga Siswa --}}
                        <div>
                            <label class="form-label">Lembaga <span class="required">*</span></label>
                            <select name="lembaga_id" id="siswa-lembaga" class="form-select rounded-md" required
                                onchange="onSiswaLembagaChange(this)">
                                <option value="">— Pilih Lembaga —</option>
                                <option value="1">SMK Negeri 1 Bandung</option>
                                <option value="2">SMA Negeri 3 Bandung</option>
                            </select>
                        </div>

                        {{-- Kelas Siswa --}}
                        <div id="siswa-kelas-field" class="hidden">
                            <label class="form-label">Kelas <span class="required">*</span></label>
                            <select name="kelas_id" id="siswa-kelas-select" class="form-select rounded-md" required>
                                <option value="">— Pilih Kelas —</option>
                            </select>
                        </div>

                        {{-- Data Orang Tua --}}
                        <div class="md:col-span-2 mt-sm">
                            <p class="text-xs font-bold text-on-surface-variant uppercase tracking-widest mb-md">
                                Data Orang Tua / Wali
                            </p>
                        </div>
                        <div>
                            <label class="form-label">Nama Orang Tua / Wali</label>
                            <input type="text" name="nama_orang_tua_wali" class="form-input rounded-md"
                                placeholder="Nama lengkap orang tua atau wali">
                        </div>
                        <div>
                            <label class="form-label">No. HP Orang Tua / Wali</label>
                            <input type="text" inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                name="no_hp_ortu" class="form-input rounded-md" placeholder="08xxxxxxxxxx">
                        </div>
                    </div>
                </div>
            </div>

            {{-- ── ACTION BUTTONS ── --}}
            <div class="flex items-center justify-end gap-md">
                <button type="button" onclick="history.back()"
                    class="flex items-center gap-2 bg-inverse-on-surface text-secondary text-sm font-medium px-lg py-sm rounded-lg shadow-sm hover:bg-secondary-container hover:text-on-tertiary transition-all active:scale-95">
                    <i class="fa-solid fa-xmark"></i>
                    Batal
                </button>
                <button type="submit"
                    class="flex items-center gap-2 bg-primary-container text-surface-container text-sm font-medium px-lg py-sm rounded-lg shadow-sm hover:bg-primary-fixed hover:text-primary transition-all active:scale-95">
                    <i class="fa-solid fa-floppy-disk"></i>
                    Simpan Pengguna
                </button>
            </div>

        </form>
    </div>

    <script>
        // ── Role Switcher ──
        function switchRole(role) {
            // Update hidden input
            document.getElementById('input-role').value = role;

            // Toggle role cards
            document.getElementById('card-guru').classList.toggle('selected', role === 'guru');
            document.getElementById('card-siswa').classList.toggle('selected', role === 'siswa');

            // Toggle sections
            document.getElementById('section-guru').classList.toggle('hidden', role !== 'guru');
            document.getElementById('section-siswa').classList.toggle('hidden', role !== 'siswa');

            // Manage required attrs biar validasi browser ga error di field yg disembunyiin
            setRequired('section-guru', role === 'guru');
            setRequired('section-siswa', role === 'siswa');
        }

        function setRequired(sectionId, isActive) {
            // Siswa: nis & tahun_masuk required. Guru: ga ada yg hard required dari sini
            const map = {
                'section-siswa': ['nis', 'tahun_masuk', 'lembaga_id', 'kelas_id'],
            };
            const fields = map[sectionId] || [];
            const section = document.getElementById(sectionId);

            section.querySelectorAll('input, select, textarea').forEach(el => {
                if (fields.includes(el.name)) {
                    el.required = isActive;
                }
            });
        }

        // ── Sertifikasi Toggle ──
        function toggleSertifikasi(checkbox) {
            const fieldNo = document.getElementById('field-no-sertifikasi');
            const label = document.getElementById('label-sertifikasi');
            fieldNo.classList.toggle('hidden', !checkbox.checked);
            label.textContent = checkbox.checked ? 'Sudah Tersertifikasi' : 'Belum Tersertifikasi';

            // Clear no_sertifikasi kalau unchecked
            if (!checkbox.checked) {
                fieldNo.querySelector('input').value = '';
            }
        }

        // ── Password Visibility Toggle ──
        function togglePw(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);
            if (input.type === 'password') {
                input.type = 'text';
                icon.className = 'fa-solid fa-eye-slash';
            } else {
                input.type = 'password';
                icon.className = 'fa-solid fa-eye';
            }
        }

        // Init: pastiin state awal bener
        switchRole('guru');
    </script>

    {{-- ── MODAL KELAS AJAR ── --}}
    <div class="kelas-modal-overlay" id="kelasModal">
        <div class="kelas-modal">
            <div class="kelas-modal-head">
                <div>
                    <div class="kelas-modal-title">Pilih kelas ajar</div>
                    <div class="kelas-modal-sub" id="modal-lembaga-sub">—</div>
                </div>
                <button type="button" class="kelas-modal-close" onclick="closeModal()">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="kelas-modal-search">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" id="modal-search" placeholder="Cari nama kelas..." oninput="filterModalKelas()">
            </div>
            <div class="kelas-modal-list" id="modal-list"></div>
            <div class="kelas-modal-foot">
                <span class="kelas-modal-count"><span id="modal-selected-count">0</span> kelas dipilih</span>
                <div class="kelas-modal-actions">
                    <button type="button" class="btn-modal-cancel" onclick="closeModal()">Batal</button>
                    <button type="button" class="btn-modal-confirm" onclick="confirmModal()">Konfirmasi</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // ── Data dummy kelas per lembaga ──
        const kelasData = {
            '1': [
                { id: 1, name: 'X RPL 1', count: 32 },
                { id: 2, name: 'X RPL 2', count: 30 },
                { id: 3, name: 'X MM 1', count: 28 },
                { id: 4, name: 'XI RPL 1', count: 34 },
                { id: 5, name: 'XI TKJ 1', count: 31 },
                { id: 6, name: 'XII TKJ 2', count: 29 },
                { id: 7, name: 'XII RPL 3', count: 27 },
            ],
            '2': [
                { id: 8, name: 'X IPA 1', count: 36 },
                { id: 9, name: 'X IPS 1', count: 33 },
                { id: 10, name: 'XI IPA 2', count: 35 },
                { id: 11, name: 'XI IPS 2', count: 32 },
                { id: 12, name: 'XII IPA 1', count: 34 },
            ],
        };

        const lembagaNames = {
            '1': 'SMK Negeri 1 Bandung',
            '2': 'SMA Negeri 3 Bandung',
        };

        // State modal
        let modalContext = null;  // 'guru' | 'siswa'
        let tempSelected = new Set();
        let currentLembaga = null;

        // ── Guru: lembaga change ──
        function onGuruLembagaChange(sel) {
            const val = sel.value;
            const field = document.getElementById('guru-kelas-field');

            // Reset pilihan kelas kalau lembaga ganti
            clearGuruKelas();

            field.classList.toggle('hidden', !val);
        }

        function clearGuruKelas() {
            document.getElementById('guru-kelas-inputs').innerHTML = '';
            renderGuruTags([]);
        }

        // ── Siswa: lembaga change ──
        function onSiswaLembagaChange(sel) {
            const val = sel.value;
            const field = document.getElementById('siswa-kelas-field');
            const select = document.getElementById('siswa-kelas-select');

            select.innerHTML = '<option value="">— Pilih Kelas —</option>';
            field.classList.toggle('hidden', !val);

            if (val) {
                const kelas = kelasData[val] || [];
                kelas.forEach(k => {
                    const opt = document.createElement('option');
                    opt.value = k.id;
                    opt.textContent = k.name;
                    select.appendChild(opt);
                });
            }
        }

        // ── Buka modal ──
        function openModal(context) {
            const lembagaId = document.getElementById(context + '-lembaga').value;
            if (!lembagaId) return;

            modalContext = context;
            currentLembaga = lembagaId;

            // Init tempSelected dari yang udah dipilih sebelumnya (guru)
            tempSelected = new Set();
            document.querySelectorAll('#guru-kelas-inputs input').forEach(inp => {
                tempSelected.add(parseInt(inp.value));
            });

            document.getElementById('modal-lembaga-sub').textContent =
                lembagaNames[lembagaId] + ' · ' + (kelasData[lembagaId]?.length || 0) + ' kelas tersedia';
            document.getElementById('modal-search').value = '';

            renderModalList(kelasData[lembagaId] || []);
            document.getElementById('kelasModal').classList.add('open');
            document.getElementById('modal-search').focus();
        }

        function closeModal() {
            document.getElementById('kelasModal').classList.remove('open');
        }

        // ── Render list modal ──
        function renderModalList(list) {
            const container = document.getElementById('modal-list');
            if (!list.length) {
                container.innerHTML = '<div class="kelas-modal-empty">Tidak ada kelas ditemukan</div>';
                updateModalCount();
                return;
            }
            container.innerHTML = list.map(k => `
                        <div class="kelas-modal-item ${tempSelected.has(k.id) ? 'checked' : ''}"
                             onclick="toggleModalItem(this, ${k.id})">
                            <div class="kelas-check-box">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="kelas-modal-item-info">
                                <div class="kelas-modal-item-name">${k.name}</div>
                                <div class="kelas-modal-item-count">${k.count} siswa</div>
                            </div>
                        </div>
                    `).join('');
            updateModalCount();
        }

        function toggleModalItem(el, id) {
            if (tempSelected.has(id)) {
                tempSelected.delete(id);
                el.classList.remove('checked');
            } else {
                tempSelected.add(id);
                el.classList.add('checked');
            }
            updateModalCount();
        }

        function updateModalCount() {
            document.getElementById('modal-selected-count').textContent = tempSelected.size;
        }

        function filterModalKelas() {
            const q = document.getElementById('modal-search').value.toLowerCase();
            const list = (kelasData[currentLembaga] || []).filter(k => k.name.toLowerCase().includes(q));
            renderModalList(list);
        }

        // ── Konfirmasi pilihan ──
        function confirmModal() {
            const kelas = kelasData[currentLembaga] || [];
            const selected = kelas.filter(k => tempSelected.has(k.id));

            if (modalContext === 'guru') {
                // Render tags di trigger
                renderGuruTags(selected);
                // Render hidden inputs
                const container = document.getElementById('guru-kelas-inputs');
                container.innerHTML = selected.map(k =>
                    `<input type="hidden" name="kelas_ajar[]" value="${k.id}">`
                ).join('');
                // Update tombol
                const btn = document.getElementById('guru-kelas-btn');
                btn.innerHTML = selected.length
                    ? '<i class="fa-solid fa-pen"></i> Ubah'
                    : '<i class="fa-solid fa-plus"></i> Pilih kelas';
            }

            closeModal();
        }

        function renderGuruTags(selected) {
            const wrap = document.getElementById('guru-kelas-tags');
            if (!selected.length) {
                wrap.innerHTML = '<span class="kelas-trigger-placeholder">Belum ada kelas dipilih</span>';
                return;
            }
            wrap.innerHTML = selected.map(k => `
                        <span class="kelas-tag">
                            ${k.name}
                            <button type="button" class="kelas-tag-remove" onclick="removeGuruKelas(event, ${k.id})">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </span>
                    `).join('');
        }

        function removeGuruKelas(e, id) {
            e.stopPropagation();
            // Hapus dari hidden inputs
            const container = document.getElementById('guru-kelas-inputs');
            const inp = container.querySelector(`input[value="${id}"]`);
            if (inp) inp.remove();
            // Re-render tags dari sisa inputs
            const remaining = Array.from(container.querySelectorAll('input')).map(i => {
                const kelas = kelasData[currentLembaga] || [];
                return kelas.find(k => k.id === parseInt(i.value));
            }).filter(Boolean);
            renderGuruTags(remaining);
            if (!remaining.length) {
                document.getElementById('guru-kelas-btn').innerHTML = '<i class="fa-solid fa-plus"></i> Pilih kelas';
            }
        }

        // Tutup modal klik overlay
        document.getElementById('kelasModal').addEventListener('click', function (e) {
            if (e.target === this) closeModal();
        });
    </script>
@endsection