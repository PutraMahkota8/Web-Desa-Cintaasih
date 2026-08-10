@extends('admin.layouts.app')

@section('title', 'Laporan LMS')

@section('content')
<div class="flex flex-col gap-6">

    {{-- Header --}}
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-primary">
                Laporan LMS
            </h1>
            <p class="text-on-surface-variant mt-1">
                Monitoring aktivitas pembelajaran, progres siswa, dan performa kursus.
            </p>
        </div>

        <div class="flex items-center gap-3">
            <button
                class="px-5 py-2.5 rounded-xl border border-outline-variant text-sm font-medium hover:bg-surface-container transition-all">
                <i class="fa-solid fa-file-pdf mr-2"></i>
                Export PDF
            </button>

            <button
                class="px-5 py-2.5 rounded-xl bg-primary text-white text-sm font-medium hover:opacity-90 transition-all">
                <i class="fa-solid fa-file-excel mr-2"></i>
                Export Excel
            </button>
        </div>
    </div>

    {{-- Statistik --}}
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5">

        <div class="bg-white border border-outline-variant rounded-2xl p-5 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-on-surface-variant">
                        Total Siswa
                    </p>

                    <h2 class="text-3xl font-bold text-primary mt-2">
                        1,248
                    </h2>
                </div>

                <div class="w-14 h-14 rounded-2xl bg-blue-100 flex items-center justify-center">
                    <i class="fa-solid fa-users text-primary text-xl"></i>
                </div>
            </div>

            <p class="text-xs text-green-600 mt-4 font-medium">
                +12% dari bulan lalu
            </p>
        </div>

        <div class="bg-white border border-outline-variant rounded-2xl p-5 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-on-surface-variant">
                        Kursus Aktif
                    </p>

                    <h2 class="text-3xl font-bold text-primary mt-2">
                        36
                    </h2>
                </div>

                <div class="w-14 h-14 rounded-2xl bg-purple-100 flex items-center justify-center">
                    <i class="fa-solid fa-book-open text-purple-700 text-xl"></i>
                </div>
            </div>

            <p class="text-xs text-green-600 mt-4 font-medium">
                +4 kursus baru minggu ini
            </p>
        </div>

        <div class="bg-white border border-outline-variant rounded-2xl p-5 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-on-surface-variant">
                        Tingkat Kelulusan
                    </p>

                    <h2 class="text-3xl font-bold text-primary mt-2">
                        87%
                    </h2>
                </div>

                <div class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center">
                    <i class="fa-solid fa-chart-line text-green-700 text-xl"></i>
                </div>
            </div>

            <p class="text-xs text-green-600 mt-4 font-medium">
                Stabil dalam 3 bulan terakhir
            </p>
        </div>

    </div>

    {{-- Chart + Aktivitas --}}
    <div class="grid grid-cols-1 xl:grid-cols-3 gap-5">

        {{-- Grafik --}}
        <div class="xl:col-span-2 bg-white border border-outline-variant rounded-2xl p-6 shadow-sm">

            <div class="flex items-center justify-between mb-6">
                <div>
                    <h2 class="text-xl font-bold text-primary">
                        Statistik Pembelajaran
                    </h2>

                    <p class="text-sm text-on-surface-variant">
                        Aktivitas pembelajaran selama 6 bulan terakhir
                    </p>
                </div>

                <button
                    class="px-4 py-2 rounded-lg border border-outline-variant text-sm hover:bg-surface-container transition-all">
                    6 Bulan Terakhir
                </button>
            </div>

            {{-- Fake Chart --}}
            <div class="h-[320px] flex items-end justify-between gap-3">

                <div class="flex flex-col items-center gap-2">
                    <div class="w-10 bg-primary rounded-t-xl h-28"></div>
                    <span class="text-xs text-on-surface-variant">Jan</span>
                </div>

                <div class="flex flex-col items-center gap-2">
                    <div class="w-10 bg-primary rounded-t-xl h-40"></div>
                    <span class="text-xs text-on-surface-variant">Feb</span>
                </div>

                <div class="flex flex-col items-center gap-2">
                    <div class="w-10 bg-primary rounded-t-xl h-52"></div>
                    <span class="text-xs text-on-surface-variant">Mar</span>
                </div>

                <div class="flex flex-col items-center gap-2">
                    <div class="w-10 bg-primary rounded-t-xl h-36"></div>
                    <span class="text-xs text-on-surface-variant">Apr</span>
                </div>

                <div class="flex flex-col items-center gap-2">
                    <div class="w-10 bg-primary rounded-t-xl h-64"></div>
                    <span class="text-xs text-on-surface-variant">Mei</span>
                </div>

                <div class="flex flex-col items-center gap-2">
                    <div class="w-10 bg-primary rounded-t-xl h-72"></div>
                    <span class="text-xs text-on-surface-variant">Jun</span>
                </div>

            </div>
        </div>

        {{-- Aktivitas --}}
        <div class="bg-white border border-outline-variant rounded-2xl p-6 shadow-sm">

            <div class="flex items-center justify-between mb-5">
                <h2 class="text-xl font-bold text-primary">
                    Aktivitas Terbaru
                </h2>

                <button class="text-sm text-primary font-medium">
                    Lihat Semua
                </button>
            </div>

            <div class="flex flex-col gap-4">

                <div class="flex gap-3">
                    <div class="w-11 h-11 rounded-xl bg-blue-100 flex items-center justify-center">
                        <i class="fa-solid fa-user-plus text-primary"></i>
                    </div>

                    <div>
                        <p class="text-sm font-semibold text-on-surface">
                            12 siswa baru mendaftar
                        </p>

                        <span class="text-xs text-on-surface-variant">
                            2 jam lalu
                        </span>
                    </div>
                </div>

                <div class="flex gap-3">
                    <div class="w-11 h-11 rounded-xl bg-green-100 flex items-center justify-center">
                        <i class="fa-solid fa-award text-green-700"></i>
                    </div>

                    <div>
                        <p class="text-sm font-semibold text-on-surface">
                            24 sertifikat berhasil diterbitkan
                        </p>

                        <span class="text-xs text-on-surface-variant">
                            Hari ini
                        </span>
                    </div>
                </div>

                <div class="flex gap-3">
                    <div class="w-11 h-11 rounded-xl bg-orange-100 flex items-center justify-center">
                        <i class="fa-solid fa-book text-orange-600"></i>
                    </div>

                    <div>
                        <p class="text-sm font-semibold text-on-surface">
                            Kursus baru berhasil ditambahkan
                        </p>

                        <span class="text-xs text-on-surface-variant">
                            Kemarin
                        </span>
                    </div>
                </div>

            </div>

        </div>

    </div>

    {{-- Table --}}
    <div class="bg-white border border-outline-variant rounded-2xl shadow-sm overflow-hidden">

        <div class="px-6 py-5 border-b border-outline-variant flex items-center justify-between">

            <div>
                <h2 class="text-xl font-bold text-primary">
                    Laporan Progress Siswa
                </h2>

                <p class="text-sm text-on-surface-variant mt-1">
                    Daftar perkembangan pembelajaran siswa terbaru.
                </p>
            </div>

            <div class="flex items-center gap-3">

                <input type="text"
                    placeholder="Cari siswa..."
                    class="px-4 py-2.5 rounded-xl border border-outline-variant text-sm focus:outline-none focus:ring-2 focus:ring-primary">

                <button
                    class="px-4 py-2.5 rounded-xl bg-primary text-white text-sm font-medium">
                    Cari
                </button>

            </div>

        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full">

                <thead class="bg-surface-container">

                    <tr class="text-left">
                        <th class="px-6 py-4 text-sm font-bold text-primary">
                            Nama
                        </th>

                        <th class="px-6 py-4 text-sm font-bold text-primary">
                            Program
                        </th>

                        <th class="px-6 py-4 text-sm font-bold text-primary">
                            Progress
                        </th>

                        <th class="px-6 py-4 text-sm font-bold text-primary">
                            Nilai
                        </th>

                        <th class="px-6 py-4 text-sm font-bold text-primary">
                            Status
                        </th>
                    </tr>

                </thead>

                <tbody class="divide-y divide-outline-variant">

                    <tr>
                        <td class="px-6 py-4 text-sm font-medium">
                            Budi Santoso
                        </td>

                        <td class="px-6 py-4 text-sm">
                            Leadership Digital
                        </td>

                        <td class="px-6 py-4">
                            <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                                <div class="bg-primary h-full w-[90%]"></div>
                            </div>
                        </td>

                        <td class="px-6 py-4 text-sm font-semibold text-primary">
                            92
                        </td>

                        <td class="px-6 py-4">
                            <span
                                class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-medium">
                                Selesai
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-6 py-4 text-sm font-medium">
                            Siti Aminah
                        </td>

                        <td class="px-6 py-4 text-sm">
                            Public Speaking
                        </td>

                        <td class="px-6 py-4">
                            <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                                <div class="bg-primary h-full w-[70%]"></div>
                            </div>
                        </td>

                        <td class="px-6 py-4 text-sm font-semibold text-primary">
                            84
                        </td>

                        <td class="px-6 py-4">
                            <span
                                class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-700 text-xs font-medium">
                                Proses
                            </span>
                        </td>
                    </tr>

                </tbody>

            </table>
        </div>

    </div>

</div>
@endsection