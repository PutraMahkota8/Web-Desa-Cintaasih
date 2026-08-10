@extends('admin.layouts.app')

@section('title', 'Manajemen Lembaga')

@section('content')

<div class="flex flex-col gap-6">

    {{-- Header --}}
    <div class="flex items-center justify-between">

        <div>
            <h1 class="text-3xl font-bold text-primary">
                Data Lembaga
            </h1>

            <p class="text-on-surface-variant mt-1">
                Kelola informasi lembaga, identitas yayasan, dan pengaturan institusi LMS.
            </p>
        </div>

        <div class="flex items-center gap-3">

            <button
                class="px-5 py-2.5 rounded-xl border border-outline-variant text-sm font-medium hover:bg-surface-container transition-all">
                <i class="fa-solid fa-file-export mr-2"></i>
                Export
            </button>

            <a href="{{ route('lembaga.form') }}"
                    class="px-5 py-2.5 rounded-xl bg-primary text-white text-sm font-medium hover:opacity-90 transition-all">
                    <i class="fa-solid fa-pen mr-2"></i>
                    Edit
            </a>

        </div>

    </div>

    {{-- Card Profile --}}
    <div class="bg-white border border-outline-variant rounded-3xl shadow-sm overflow-hidden">

        {{-- Banner --}}
        <div class="h-44 bg-gradient-to-r from-primary to-blue-700 relative">

            <div
                class="absolute -bottom-14 left-8 w-28 h-28 rounded-3xl border-[6px] border-white bg-white shadow-lg overflow-hidden">

                <img src="https://ui-avatars.com/api/?name=MAS+AL+MUSTOFAWIYAH&background=1E40AF&color=fff"
                    class="w-full h-full object-cover">

            </div>

        </div>

        {{-- Content --}}
        <div class="pt-20 pb-8 px-8">

            <div class="flex flex-col xl:flex-row xl:items-start xl:justify-between gap-8">

                {{-- Left --}}
                <div>

                    <div class="flex items-center gap-3">

                        <h2 class="text-3xl font-bold text-primary">
                            MAS AL MUSTOFAWIYAH
                        </h2>

                        <span
                            class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">
                            Aktif
                        </span>

                    </div>

                    <p class="text-on-surface-variant mt-2 max-w-3xl leading-relaxed">
                        Platform pembelajaran digital yayasan untuk pengelolaan kursus,
                        sertifikasi, asesmen, dan monitoring perkembangan siswa secara terintegrasi.
                    </p>

                    {{-- Info --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-8">

                        <div class="flex items-start gap-4">

                            <div
                                class="w-12 h-12 rounded-2xl bg-blue-100 flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-envelope text-primary"></i>
                            </div>

                            <div>
                                <p class="text-sm text-on-surface-variant">
                                    Email
                                </p>

                                <h4 class="font-semibold text-on-surface mt-1">
                                    admin@edufoundation.id
                                </h4>
                            </div>

                        </div>

                        <div class="flex items-start gap-4">

                            <div
                                class="w-12 h-12 rounded-2xl bg-green-100 flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-phone text-green-700"></i>
                            </div>

                            <div>
                                <p class="text-sm text-on-surface-variant">
                                    Telepon
                                </p>

                                <h4 class="font-semibold text-on-surface mt-1">
                                    +62 812-3456-7890
                                </h4>
                            </div>

                        </div>

                        <div class="flex items-start gap-4">

                            <div
                                class="w-12 h-12 rounded-2xl bg-orange-100 flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-location-dot text-orange-600"></i>
                            </div>

                            <div>
                                <p class="text-sm text-on-surface-variant">
                                    Alamat
                                </p>

                                <h4 class="font-semibold text-on-surface mt-1">
                                    Jl. Pendidikan No. 12, Sukabumi
                                </h4>
                            </div>

                        </div>

                        <div class="flex items-start gap-4">

                            <div
                                class="w-12 h-12 rounded-2xl bg-purple-100 flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-globe text-purple-700"></i>
                            </div>

                            <div>
                                <p class="text-sm text-on-surface-variant">
                                    Website
                                </p>

                                <h4 class="font-semibold text-on-surface mt-1">
                                    www.edufoundation.id
                                </h4>
                            </div>

                        </div>

                    </div>

                </div>

                {{-- Statistik --}}
                <div class="grid grid-cols-2 gap-4 min-w-[280px]">

                    <div class="bg-surface-container rounded-2xl p-5 border border-outline-variant">

                        <p class="text-sm text-on-surface-variant">
                            Total Siswa
                        </p>

                        <h3 class="text-3xl font-bold text-primary mt-2">
                            1,248
                        </h3>

                    </div>

                    <div class="bg-surface-container rounded-2xl p-5 border border-outline-variant">

                        <p class="text-sm text-on-surface-variant">
                            Pengajar
                        </p>

                        <h3 class="text-3xl font-bold text-primary mt-2">
                            42
                        </h3>

                    </div>

                    <div class="bg-surface-container rounded-2xl p-5 border border-outline-variant">

                        <p class="text-sm text-on-surface-variant">
                            Program
                        </p>

                        <h3 class="text-3xl font-bold text-primary mt-2">
                            18
                        </h3>

                    </div>

                    <div class="bg-surface-container rounded-2xl p-5 border border-outline-variant">

                        <p class="text-sm text-on-surface-variant">
                            Sertifikat
                        </p>

                        <h3 class="text-3xl font-bold text-primary mt-2">
                            892
                        </h3>

                    </div>

                </div>

            </div>

        </div>

    </div>

    {{-- Program --}}
    <div class="grid grid-cols-1 xl:grid-cols-3 gap-5">

        {{-- Program Aktif --}}
        <div class="xl:col-span-2 bg-white border border-outline-variant rounded-3xl shadow-sm">

            <div class="px-6 py-5 border-b border-outline-variant flex items-center justify-between">

                <div>
                    <h2 class="text-xl font-bold text-primary">
                        Program Aktif
                    </h2>

                    <p class="text-sm text-on-surface-variant mt-1">
                        Daftar program pembelajaran aktif di LMS.
                    </p>
                </div>

                <button
                    class="px-4 py-2 rounded-xl bg-primary text-white text-sm font-medium">
                    Tambah Program
                </button>

            </div>

            <div class="divide-y divide-outline-variant">

                <div class="p-6 flex items-center justify-between">

                    <div>
                        <h3 class="font-bold text-on-surface">
                            Leadership Digital
                        </h3>

                        <p class="text-sm text-on-surface-variant mt-1">
                            248 siswa terdaftar
                        </p>
                    </div>

                    <span
                        class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">
                        Aktif
                    </span>

                </div>

                <div class="p-6 flex items-center justify-between">

                    <div>
                        <h3 class="font-bold text-on-surface">
                            Public Speaking
                        </h3>

                        <p class="text-sm text-on-surface-variant mt-1">
                            184 siswa terdaftar
                        </p>
                    </div>

                    <span
                        class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">
                        Aktif
                    </span>

                </div>

                <div class="p-6 flex items-center justify-between">

                    <div>
                        <h3 class="font-bold text-on-surface">
                            Tata Kelola Digital
                        </h3>

                        <p class="text-sm text-on-surface-variant mt-1">
                            120 siswa terdaftar
                        </p>
                    </div>

                    <span
                        class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-700 text-xs font-semibold">
                        Draft
                    </span>

                </div>

            </div>

        </div>

        {{-- Aktivitas --}}
        <div class="bg-white border border-outline-variant rounded-3xl shadow-sm p-6">

            <div class="flex items-center justify-between mb-5">

                <div>
                    <h2 class="text-xl font-bold text-primary">
                        Aktivitas
                    </h2>

                    <p class="text-sm text-on-surface-variant">
                        Aktivitas terbaru lembaga.
                    </p>
                </div>

            </div>

            <div class="flex flex-col gap-5">

                <div class="flex gap-3">

                    <div
                        class="w-11 h-11 rounded-2xl bg-blue-100 flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-user-plus text-primary"></i>
                    </div>

                    <div>
                        <p class="text-sm font-semibold">
                            24 siswa baru mendaftar
                        </p>

                        <span class="text-xs text-on-surface-variant">
                            3 jam lalu
                        </span>
                    </div>

                </div>

                <div class="flex gap-3">

                    <div
                        class="w-11 h-11 rounded-2xl bg-green-100 flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-award text-green-700"></i>
                    </div>

                    <div>
                        <p class="text-sm font-semibold">
                            Sertifikat berhasil diterbitkan
                        </p>

                        <span class="text-xs text-on-surface-variant">
                            Hari ini
                        </span>
                    </div>

                </div>

                <div class="flex gap-3">

                    <div
                        class="w-11 h-11 rounded-2xl bg-orange-100 flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-book-open text-orange-600"></i>
                    </div>

                    <div>
                        <p class="text-sm font-semibold">
                            Program baru ditambahkan
                        </p>

                        <span class="text-xs text-on-surface-variant">
                            Kemarin
                        </span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection