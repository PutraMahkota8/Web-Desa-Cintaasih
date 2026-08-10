@extends('admin.layouts.app')

@section('title', 'Assessment – EduFoundation LMS')

@section('content')

    <div class="flex flex-col gap-6">

        {{-- Header --}}
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">

            <div>
                <h1 class="text-2xl font-bold text-primary">
                    Assessment
                </h1>

                <p class="mt-2 text-sm text-on-surface-variant">
                    Kelola soal assessment, ujian materi, dan evaluasi siswa.
                </p>
            </div>

            <div class="flex items-center gap-3">

                <button
                    class="flex items-center gap-2 px-5 py-2.5 rounded-xl bg-surface border border-outline-variant text-sm font-medium hover:bg-surface-container transition-all">

                    <i class="fa-solid fa-file-export"></i>
                    Export
                </button>

                <button
                    class="flex items-center gap-2 px-5 py-2.5 rounded-xl bg-primary text-white text-sm font-medium shadow-sm hover:opacity-90 transition-all">

                    <i class="fa-solid fa-plus"></i>
                    Tambah Assessment
                </button>

            </div>

        </div>

        {{-- Statistik --}}
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4">

            {{-- Card --}}
            <div class="rounded-2xl border border-outline-variant bg-surface p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>
                        <p class="text-sm text-on-surface-variant">
                            Total Assessment
                        </p>

                        <h3 class="mt-2 text-2xl font-bold text-primary">
                            42
                        </h3>
                    </div>

                    <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                        <i class="fa-solid fa-file-circle-check text-primary text-lg"></i>
                    </div>

                </div>

            </div>

            <div class="rounded-2xl border border-outline-variant bg-surface p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>
                        <p class="text-sm text-on-surface-variant">
                            Assessment Aktif
                        </p>

                        <h3 class="mt-2 text-2xl font-bold text-green-600">
                            28
                        </h3>
                    </div>

                    <div class="w-12 h-12 rounded-xl bg-green-100 flex items-center justify-center">
                        <i class="fa-solid fa-circle-play text-green-600 text-lg"></i>
                    </div>

                </div>

            </div>

            <div class="rounded-2xl border border-outline-variant bg-surface p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>
                        <p class="text-sm text-on-surface-variant">
                            Total Peserta
                        </p>

                        <h3 class="mt-2 text-2xl font-bold text-blue-600">
                            1.240
                        </h3>
                    </div>

                    <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center">
                        <i class="fa-solid fa-users text-blue-600 text-lg"></i>
                    </div>

                </div>

            </div>

            <div class="rounded-2xl border border-outline-variant bg-surface p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>
                        <p class="text-sm text-on-surface-variant">
                            Rata-rata Nilai
                        </p>

                        <h3 class="mt-2 text-2xl font-bold text-yellow-600">
                            86
                        </h3>
                    </div>

                    <div class="w-12 h-12 rounded-xl bg-yellow-100 flex items-center justify-center">
                        <i class="fa-solid fa-chart-line text-yellow-600 text-lg"></i>
                    </div>

                </div>

            </div>

        </div>

        {{-- Filter --}}
        <div
            class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 rounded-2xl border border-outline-variant bg-surface p-4 shadow-sm">

            <div class="flex items-center gap-3 flex-wrap">

                <select
                    class="px-4 py-2.5 rounded-xl border border-outline-variant bg-surface-container-lowest text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                    <option>Semua Program</option>
                    <option>Frontend</option>
                    <option>Backend</option>
                    <option>UI/UX</option>
                </select>

                <select
                    class="px-4 py-2.5 rounded-xl border border-outline-variant bg-surface-container-lowest text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                    <option>Semua Status</option>
                    <option>Aktif</option>
                    <option>Draft</option>
                    <option>Selesai</option>
                </select>

            </div>

            <div class="flex items-center gap-2">

                <div class="relative">

                    <i
                        class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant text-sm"></i>

                    <input type="text" placeholder="Cari assessment..."
                        class="w-full lg:w-[280px] py-2.5 pl-11 pr-4 rounded-xl border border-outline-variant bg-surface-container-lowest text-sm focus:outline-none focus:ring-2 focus:ring-primary">

                </div>

                <button
                    class="px-5 py-2.5 rounded-xl bg-primary text-white text-sm font-medium hover:opacity-90 transition-all">
                    Cari
                </button>

            </div>

        </div>

        {{-- Table --}}
        <div class="rounded-2xl border border-outline-variant overflow-hidden shadow-sm">

            <div class="overflow-x-auto">

                <table class="min-w-full divide-y divide-outline-variant">

                    <thead class="bg-surface-container">

                        <tr class="text-left">

                            <th class="px-6 py-4 text-sm font-bold text-primary">
                                Judul Assessment
                            </th>

                            <th class="px-6 py-4 text-sm font-bold text-primary">
                                Program
                            </th>

                            <th class="px-6 py-4 text-sm font-bold text-primary">
                                Soal
                            </th>

                            <th class="px-6 py-4 text-sm font-bold text-primary">
                                Durasi
                            </th>

                            <th class="px-6 py-4 text-sm font-bold text-primary">
                                Status
                            </th>

                            <th class="px-6 py-4 text-sm font-bold text-primary text-center">
                                Aksi
                            </th>

                        </tr>

                    </thead>

                    <tbody class="divide-y divide-outline-variant bg-surface">

                        {{-- Item --}}
                        <tr class="hover:bg-surface-container-lowest transition-all">

                            <td class="px-6 py-4">

                                <div>
                                    <h4 class="text-sm font-semibold text-on-surface">
                                        Fundamental HTML & CSS
                                    </h4>

                                    <p class="text-xs text-on-surface-variant mt-1">
                                        Assessment dasar frontend developer
                                    </p>
                                </div>

                            </td>

                            <td class="px-6 py-4 text-sm text-on-surface">
                                Frontend
                            </td>

                            <td class="px-6 py-4 text-sm text-on-surface">
                                25 Soal
                            </td>

                            <td class="px-6 py-4 text-sm text-on-surface">
                                60 Menit
                            </td>

                            <td class="px-6 py-4">

                                <span
                                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">

                                    <span class="w-2 h-2 rounded-full bg-green-500"></span>
                                    Aktif

                                </span>

                            </td>

                            <td class="px-6 py-4">

                                <div class="flex items-center justify-center gap-2">

                                    <button
                                        class="w-10 h-10 rounded-xl border border-outline-variant hover:bg-surface-container transition-all">

                                        <i class="fa-solid fa-eye text-sm"></i>
                                    </button>

                                    <button
                                        class="w-10 h-10 rounded-xl border border-outline-variant hover:bg-surface-container transition-all">

                                        <i class="fa-solid fa-pen text-sm"></i>
                                    </button>

                                    <button
                                        class="w-10 h-10 rounded-xl border border-red-200 text-red-600 hover:bg-red-50 transition-all">

                                        <i class="fa-solid fa-trash text-sm"></i>
                                    </button>

                                </div>

                            </td>

                        </tr>

                        <tr class="hover:bg-surface-container-lowest transition-all">

                            <td class="px-6 py-4">

                                <div>
                                    <h4 class="text-sm font-semibold text-on-surface">
                                        Laravel Intermediate Test
                                    </h4>

                                    <p class="text-xs text-on-surface-variant mt-1">
                                        Assessment backend API & database
                                    </p>
                                </div>

                            </td>

                            <td class="px-6 py-4 text-sm text-on-surface">
                                Backend
                            </td>

                            <td class="px-6 py-4 text-sm text-on-surface">
                                40 Soal
                            </td>

                            <td class="px-6 py-4 text-sm text-on-surface">
                                90 Menit
                            </td>

                            <td class="px-6 py-4">

                                <span
                                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-yellow-100 text-yellow-700 text-xs font-semibold">

                                    <span class="w-2 h-2 rounded-full bg-yellow-500"></span>
                                    Draft

                                </span>

                            </td>

                            <td class="px-6 py-4">

                                <div class="flex items-center justify-center gap-2">

                                    <button
                                        class="w-10 h-10 rounded-xl border border-outline-variant hover:bg-surface-container transition-all">

                                        <i class="fa-solid fa-eye text-sm"></i>
                                    </button>

                                    <button
                                        class="w-10 h-10 rounded-xl border border-outline-variant hover:bg-surface-container transition-all">

                                        <i class="fa-solid fa-pen text-sm"></i>
                                    </button>

                                    <button
                                        class="w-10 h-10 rounded-xl border border-red-200 text-red-600 hover:bg-red-50 transition-all">

                                        <i class="fa-solid fa-trash text-sm"></i>
                                    </button>

                                </div>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

            @include('admin.components.pagination')
        </div>

    </div>

@endsection