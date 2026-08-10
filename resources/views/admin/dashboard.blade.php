{{--
    Dashboard View
    Extends layout utama dan menampilkan semua section dashboard LMS.
    Data dikirim dari DashboardController::index()
--}}
@extends('admin.layouts.app')

@section('title', 'Dashboard – EduFoundation LMS')

@section('content')

    {{-- ============================================================
         1. Welcome Banner
    ============================================================ --}}
    <section class="relative overflow-hidden bg-primary rounded-xl p-xxl text-on-primary flex flex-col md:flex-row items-center justify-between shadow-lg">

        {{-- Teks Sambutan --}}
        <div class="relative z-10 space-y-md md:w-3/5">
            <h2 class="font-display text-display">Selamat datang kembali, Admin.</h2>
            <p class="font-body-lg text-body-lg text-primary-fixed-dim">
                Sistem Manajemen Pembelajaran Yayasan terintegrasi.
                Pantau data lembaga, kurikulum mata pelajaran, dan performa akademik
                seluruh user dalam satu platform.
            </p>
            <div class="pt-md">
                <button class="bg-surface-container-lowest text-primary font-bold px-lg py-sm rounded-lg shadow-sm hover:bg-primary-fixed transition-all active:scale-95">
                    Buat Laporan Bulanan
                </button>
            </div>
        </div>

        {{-- Ilustrasi / Gambar --}}
        <div class="mt-lg md:mt-0 md:w-1/3 h-48 relative rounded-lg overflow-hidden border-2 border-primary-fixed-dim/30">
            <img
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAsX7UGz1bHEjo76tjVMYM-JU4R3uT9sMebXeras-G4q1yp7zrI3PPqU6m1NJpsElxepXZe2V3sx_m-6YToC1WTSccueUyHlB1rtlRL7i4-SAk07ountjj1JmlvFWVkbaGc_ZXd1ZiVCje9pCMUGQ_HmkIQkd2H5r21eR3Vj4anNbZfSXA7irStFeyWl1b8uvdVkxs7M7yI39tw_iHpxfBnrtbYF7gjTuhdJNxyXLjR1CZDPztxFzgKwDI8n6pGhgA3k646AnBGcbvh"
                alt="Visualisasi Data Akademik"
                class="w-full h-full object-cover opacity-80 mix-blend-overlay"
            />
            <div class="absolute inset-0 bg-gradient-to-tr from-primary/60 to-transparent"></div>
        </div>
    </section>


    {{-- ============================================================
         2. Key Metrics Grid (Stat Cards)
         Data: $stats — array dari controller
    ============================================================ --}}
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
        @foreach ($stats as $stat)
            @include('admin.components.stat-card', $stat)
        @endforeach
    </section>


    {{-- ============================================================
         3. Main Content: Tren Pendaftaran + Aksi Cepat
    ============================================================ --}}
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">

        {{-- === Enrollment Trend Chart === --}}
        <section class="lg:col-span-8 bg-surface-container-lowest p-lg rounded-lg border border-outline-variant shadow-sm">

            {{-- Header Chart --}}
            <div class="flex justify-between items-center mb-xl">
                <div>
                    <h3 class="text-h2 font-h2 text-on-surface">Tren Pendaftaran</h3>
                    <p class="text-body-sm text-secondary">Pertumbuhan kuartalan di seluruh departemen akademik</p>
                </div>
                <select class="bg-surface-container-low border border-outline-variant rounded-lg px-md py-xs text-label-md focus:ring-primary-container">
                    <option>6 Bulan Terakhir</option>
                    <option>Tahun Terakhir</option>
                </select>
            </div>

            {{-- Bar Chart (Simulated) --}}
            {{-- Data: $chartData — array ['label' => 'Jan', 'heightClass' => 'h-24', 'opacityClass' => 'bg-primary/20'] --}}
            <div class="h-64 flex items-end justify-between gap-sm px-md border-b border-outline-variant pb-md">
                @foreach ($chartData as $bar)
                    <div class="w-full flex flex-col items-center gap-sm">
                        <div class="w-full {{ $bar['colorClass'] }} rounded-t-lg {{ $bar['heightClass'] }}"></div>
                        <span class="text-label-sm text-secondary">{{ $bar['label'] }}</span>
                    </div>
                @endforeach
            </div>

            {{-- Chart Summary --}}
            <div class="mt-lg grid grid-cols-2 gap-md">
                <div class="p-md bg-surface-container rounded-lg">
                    <p class="text-label-sm text-secondary">Puncak Pendaftaran</p>
                    <p class="text-h3 font-h3 text-on-surface">{{ $peakEnrollment }}</p>
                </div>
                <div class="p-md bg-surface-container rounded-lg">
                    <p class="text-label-sm text-secondary">Pertumbuhan Rata-rata</p>
                    <p class="text-h3 font-h3 text-on-surface">{{ $avgGrowth }}</p>
                </div>
            </div>
        </section>

        {{-- === Aksi Cepat + Sertifikasi === --}}
        <section class="lg:col-span-4 flex flex-col gap-gutter">

            {{-- Quick Actions --}}
            <div class="bg-surface-container-lowest p-lg rounded-lg border border-outline-variant shadow-sm space-y-lg">
                <h3 class="text-h3 font-h3 text-on-surface">Aksi Cepat</h3>
                <div class="grid grid-cols-1 gap-md">

                    {{-- Data: $quickActions — array dari controller --}}
                    @foreach ($quickActions as $action)
                        <button class="flex items-center gap-md p-md border border-outline-variant rounded-lg hover:bg-primary-fixed-dim/10 transition-all group text-left">
                            <span class="material-symbols-outlined text-primary bg-primary-fixed p-sm rounded-lg group-hover:scale-110 transition-transform">
                                {{ $action['icon'] }}
                            </span>
                            <div>
                                <p class="text-label-md font-bold">{{ $action['title'] }}</p>
                                <p class="text-label-sm text-secondary">{{ $action['subtitle'] }}</p>
                            </div>
                        </button>
                    @endforeach

                </div>
            </div>

            {{-- Sertifikasi Health Card --}}
            <div class="bg-tertiary p-lg rounded-lg text-on-tertiary shadow-sm relative overflow-hidden">
                <span class="material-symbols-outlined absolute -right-4 -bottom-4 text-[96px] opacity-10">verified_user</span>
                <h4 class="text-label-md font-bold uppercase tracking-wider opacity-80">Kesehatan Sertifikasi</h4>
                <p class="text-display mt-sm">{{ $certHealth }}</p>
                <p class="text-body-sm opacity-90 mt-xs">Rata-rata tingkat kelulusan untuk kursus dasar.</p>
            </div>
        </section>
    </div>


    {{-- ============================================================
         4. Recent Activities Feed
         Data: $activities — array dari controller
    ============================================================ --}}
    <section class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
        <div class="lg:col-span-12 bg-surface-container-lowest p-lg rounded-lg border border-outline-variant shadow-sm">

            {{-- Header --}}
            <div class="flex justify-between items-center mb-lg">
                <h3 class="text-h3 font-h3 text-on-surface">Aktivitas Siswa Terbaru</h3>
                <a class="text-primary text-label-md font-bold hover:underline" href="#">Lihat Semua Aktivitas</a>
            </div>

            {{-- Activity List --}}
            <div class="divide-y divide-outline-variant">
                @forelse ($activities as $activity)
                    @include('admin.components.activity-item', compact('activity'))
                @empty
                    <p class="py-lg text-body-sm text-secondary text-center">Belum ada aktivitas terbaru.</p>
                @endforelse
            </div>

        </div>
    </section>

@endsection