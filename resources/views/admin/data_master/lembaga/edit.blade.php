@extends('admin.layouts.app')

@section('title', 'Edit Lembaga')

@section('content')

<div class="max-w-7xl mx-auto flex flex-col gap-6">

    {{-- Header --}}
    <div class="flex items-center justify-between">

        <div>
            <h1 class="text-3xl font-bold text-primary">
                Edit Lembaga
            </h1>

            <p class="text-on-surface-variant mt-1">
                Perbarui identitas dan informasi lembaga LMS.
            </p>
        </div>

        <button onclick="history.back()"
            class="px-5 py-2.5 rounded-xl border border-outline-variant text-sm font-medium hover:bg-surface-container transition-all">
            <i class="fa-solid fa-arrow-left mr-2"></i>
            Kembali
    </button>

    </div>

    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">

            {{-- Left --}}
            <div class="xl:col-span-2 flex flex-col gap-6">

                {{-- Informasi Utama --}}
                <div class="bg-white border border-outline-variant rounded-3xl shadow-sm overflow-hidden">

                    <div class="px-6 py-5 border-b border-outline-variant">

                        <h2 class="text-xl font-bold text-primary">
                            Informasi Lembaga
                        </h2>

                        <p class="text-sm text-on-surface-variant mt-1">
                            Data utama identitas lembaga.
                        </p>

                    </div>

                    <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-5">

                        {{-- Nama --}}
                        <div class="md:col-span-2">
                            <label class="text-sm font-semibold text-on-surface">
                                Nama Lembaga
                            </label>

                            <input type="text"
                                value="EduFoundation"
                                class="mt-2 w-full px-4 py-3 rounded-2xl border border-outline-variant bg-surface-container-lowest text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>

                        {{-- Email --}}
                        <div>
                            <label class="text-sm font-semibold text-on-surface">
                                Email
                            </label>

                            <input type="email"
                                value="admin@edufoundation.id"
                                class="mt-2 w-full px-4 py-3 rounded-2xl border border-outline-variant bg-surface-container-lowest text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>

                        {{-- Telepon --}}
                        <div>
                            <label class="text-sm font-semibold text-on-surface">
                                Nomor Telepon
                            </label>

                            <input type="text"
                                value="+62 812-3456-7890"
                                class="mt-2 w-full px-4 py-3 rounded-2xl border border-outline-variant bg-surface-container-lowest text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>

                        {{-- Website --}}
                        <div class="md:col-span-2">
                            <label class="text-sm font-semibold text-on-surface">
                                Website
                            </label>

                            <input type="text"
                                value="https://edufoundation.id"
                                class="mt-2 w-full px-4 py-3 rounded-2xl border border-outline-variant bg-surface-container-lowest text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>

                        {{-- Alamat --}}
                        <div class="md:col-span-2">
                            <label class="text-sm font-semibold text-on-surface">
                                Alamat
                            </label>

                            <textarea rows="4"
                                class="mt-2 w-full px-4 py-3 rounded-2xl border border-outline-variant bg-surface-container-lowest text-sm resize-none focus:outline-none focus:ring-2 focus:ring-primary">Jl. Pendidikan No. 12, Sukabumi</textarea>
                        </div>

                        {{-- Deskripsi --}}
                        <div class="md:col-span-2">
                            <label class="text-sm font-semibold text-on-surface">
                                Deskripsi
                            </label>

                            <textarea rows="5"
                                class="mt-2 w-full px-4 py-3 rounded-2xl border border-outline-variant bg-surface-container-lowest text-sm resize-none focus:outline-none focus:ring-2 focus:ring-primary">Platform pembelajaran digital yayasan untuk pengelolaan kursus, asesmen, dan sertifikasi siswa.</textarea>
                        </div>

                    </div>

                </div>

                {{-- Pengaturan --}}
                <div class="bg-white border border-outline-variant rounded-3xl shadow-sm overflow-hidden">

                    <div class="px-6 py-5 border-b border-outline-variant">

                        <h2 class="text-xl font-bold text-primary">
                            Pengaturan LMS
                        </h2>

                        <p class="text-sm text-on-surface-variant mt-1">
                            Konfigurasi tambahan platform pembelajaran.
                        </p>

                    </div>

                    <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-5">

                        {{-- Domain --}}
                        <div>
                            <label class="text-sm font-semibold text-on-surface">
                                Domain LMS
                            </label>

                            <input type="text"
                                value="lms.edufoundation.id"
                                class="mt-2 w-full px-4 py-3 rounded-2xl border border-outline-variant bg-surface-container-lowest text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>

                        {{-- Maksimal Sertifikat --}}
                        <div>
                            <label class="text-sm font-semibold text-on-surface">
                                Maksimal Sertifikat / Hari
                            </label>

                            <input type="number"
                                value="100"
                                class="mt-2 w-full px-4 py-3 rounded-2xl border border-outline-variant bg-surface-container-lowest text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>

                        {{-- Status --}}
                        <div>
                            <label class="text-sm font-semibold text-on-surface">
                                Status Lembaga
                            </label>

                            <select
                                class="mt-2 w-full px-4 py-3 rounded-2xl border border-outline-variant bg-surface-container-lowest text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                                <option>Aktif</option>
                                <option>Nonaktif</option>
                            </select>
                        </div>

                        {{-- Tema --}}
                        <div>
                            <label class="text-sm font-semibold text-on-surface">
                                Tema LMS
                            </label>

                            <select
                                class="mt-2 w-full px-4 py-3 rounded-2xl border border-outline-variant bg-surface-container-lowest text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                                <option>Default Blue</option>
                                <option>Dark Mode</option>
                                <option>Corporate</option>
                            </select>
                        </div>

                    </div>

                </div>

            </div>

            {{-- Right --}}
            <div class="flex flex-col gap-6">

                {{-- Logo --}}
                <div class="bg-white border border-outline-variant rounded-3xl shadow-sm overflow-hidden">

                    <div class="px-6 py-5 border-b border-outline-variant">

                        <h2 class="text-xl font-bold text-primary">
                            Logo Lembaga
                        </h2>

                    </div>

                    <div class="p-6 flex flex-col items-center">

                        <div
                            class="w-40 h-40 rounded-3xl overflow-hidden border border-outline-variant shadow-sm">

                            <img src="https://ui-avatars.com/api/?name=EduFoundation&background=1E40AF&color=fff"
                                class="w-full h-full object-cover">

                        </div>

                        <label
                            class="mt-5 w-full border-2 border-dashed border-outline-variant rounded-2xl px-5 py-8 flex flex-col items-center justify-center text-center cursor-pointer hover:bg-surface-container transition-all">

                            <i class="fa-solid fa-cloud-arrow-up text-2xl text-primary mb-3"></i>

                            <p class="text-sm font-medium text-on-surface">
                                Upload Logo Baru
                            </p>

                            <span class="text-xs text-on-surface-variant mt-1">
                                PNG, JPG maksimal 2MB
                            </span>

                            <input type="file" class="hidden">

                        </label>

                    </div>

                </div>

                {{-- Banner --}}
                <div class="bg-white border border-outline-variant rounded-3xl shadow-sm overflow-hidden">

                    <div class="px-6 py-5 border-b border-outline-variant">

                        <h2 class="text-xl font-bold text-primary">
                            Banner LMS
                        </h2>

                    </div>

                    <div class="p-6">

                        <div
                            class="w-full h-40 rounded-2xl bg-gradient-to-r from-primary to-blue-700 shadow-sm">
                        </div>

                        <label
                            class="mt-5 w-full border-2 border-dashed border-outline-variant rounded-2xl px-5 py-6 flex flex-col items-center justify-center text-center cursor-pointer hover:bg-surface-container transition-all">

                            <i class="fa-solid fa-image text-2xl text-primary mb-3"></i>

                            <p class="text-sm font-medium text-on-surface">
                                Upload Banner
                            </p>

                            <span class="text-xs text-on-surface-variant mt-1">
                                Rekomendasi 1920x500
                            </span>

                            <input type="file" class="hidden">

                        </label>

                    </div>

                </div>

                {{-- Save --}}
                <div class="bg-white border border-outline-variant rounded-3xl shadow-sm p-6">

                    <button type="submit"
                        class="w-full px-5 py-3 rounded-2xl bg-primary text-white font-semibold hover:opacity-90 transition-all">
                        <i class="fa-solid fa-floppy-disk mr-2"></i>
                        Simpan Perubahan
                    </button>

                    <button type="button"
                        class="w-full mt-3 px-5 py-3 rounded-2xl border border-outline-variant font-medium hover:bg-surface-container transition-all">
                        Reset Form
                    </button>

                </div>

            </div>

        </div>
    </form>

</div>

@endsection