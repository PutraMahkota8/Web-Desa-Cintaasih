<?php

/**
 * DashboardController.php
 *
 * Contoh controller untuk halaman dashboard LMS.
 * Semua data dummy di sini bisa diganti dengan query Eloquent / DB::table()
 * di project production.
 *
 * Letakkan di: app/Http/Controllers/DashboardController.php
 */

namespace App\Http\Controllers;

use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        // ----------------------------------------------------------------
        // 1. STAT CARDS
        //    Props sesuai komponen components/stat-card.blade.php
        // ----------------------------------------------------------------
        $stats = [
            [
                'icon'        => 'groups',
                'iconColor'   => 'text-primary',
                'iconBg'      => 'bg-primary-fixed',
                'badgeText'   => '+12%',
                'badgeBg'     => 'bg-secondary-fixed',
                'badgeColor'  => 'text-on-secondary-fixed-variant',
                'label'       => 'Total Siswa',
                'value'       => '8.421',
            ],
            [
                'icon'        => 'menu_book',
                'iconColor'   => 'text-primary',
                'iconBg'      => 'bg-primary-fixed',
                'badgeText'   => 'Aktif',
                'badgeBg'     => 'bg-secondary-fixed',
                'badgeColor'  => 'text-on-secondary-fixed-variant',
                'label'       => 'Kursus Aktif',
                'value'       => '142',
            ],
            [
                'icon'        => 'verified',
                'iconColor'   => 'text-error',
                'iconBg'      => 'bg-error-container',
                'badgeText'   => 'Mendesak',
                'badgeBg'     => 'bg-error-container',
                'badgeColor'  => 'text-on-error-container',
                'label'       => 'Sertifikat Tertunda',
                'value'       => '24',
            ],
            [
                'icon'        => 'person_add',
                'iconColor'   => 'text-primary',
                'iconBg'      => 'bg-primary-fixed',
                'badgeText'   => 'Baru',
                'badgeBg'     => 'bg-secondary-fixed',
                'badgeColor'  => 'text-on-secondary-fixed-variant',
                'label'       => 'Pendaftaran Baru',
                'value'       => '156',
            ],
        ];


        // ----------------------------------------------------------------
        // 2. CHART DATA (Bar chart simulasi — bisa diganti dengan Chart.js)
        //    heightClass: h-24 s/d h-64 (Tailwind arbitrary value)
        //    colorClass : warna bar dengan opacity Tailwind
        // ----------------------------------------------------------------
        $chartData = [
            ['label' => 'Jan', 'heightClass' => 'h-24', 'colorClass' => 'bg-primary/20'],
            ['label' => 'Feb', 'heightClass' => 'h-32', 'colorClass' => 'bg-primary/40'],
            ['label' => 'Mar', 'heightClass' => 'h-48', 'colorClass' => 'bg-primary/60'],
            ['label' => 'Apr', 'heightClass' => 'h-40', 'colorClass' => 'bg-primary/80'],
            ['label' => 'Mei', 'heightClass' => 'h-56', 'colorClass' => 'bg-primary'],
            ['label' => 'Jun', 'heightClass' => 'h-52', 'colorClass' => 'bg-primary/90'],
        ];

        $peakEnrollment = 'Mei (1.420 siswa)';
        $avgGrowth      = '15,4% Bulanan';


        // ----------------------------------------------------------------
        // 3. QUICK ACTIONS
        // ----------------------------------------------------------------
        $quickActions = [
            [
                'icon'     => 'person_add',
                'title'    => 'Tambah Pengguna Baru',
                'subtitle' => 'Manajemen hak akses',
            ],
            [
                'icon'     => 'domain_add',
                'title'    => 'CRUD Lembaga',
                'subtitle' => 'Kelola data institusi',
            ],
            [
                'icon'     => 'auto_stories',
                'title'    => 'Perbarui Kurikulum',
                'subtitle' => 'Sinkronisasi Mapel',
            ],
        ];


        // ----------------------------------------------------------------
        // 4. CERT HEALTH
        // ----------------------------------------------------------------
        $certHealth = '98,2%';


        // ----------------------------------------------------------------
        // 5. RECENT ACTIVITIES
        //    Props sesuai komponen components/activity-item.blade.php
        //    Di production: ambil dari DB dengan relasi User + ActivityLog
        // ----------------------------------------------------------------
        $activities = [
            [
                'isSystem'    => false,
                'avatar'      => 'https://ui-avatars.com/api/?name=Ahmad+Syarif&background=dde1ff&color=00288e',
                'avatarAlt'   => 'Profil Ahmad Syarif',
                'name'        => 'Ahmad Syarif',
                'description' => 'Menyelesaikan Modul 4: Dasar-Dasar Pendidikan',
                'badgeText'   => 'Selesai',
                'badgeBg'     => 'bg-green-100',
                'badgeColor'  => 'text-green-800',
                'time'        => '2 menit yang lalu',
            ],
            [
                'isSystem'    => false,
                'avatar'      => 'https://ui-avatars.com/api/?name=Laila+Zulkifli&background=d3e4fe&color=505f76',
                'avatarAlt'   => 'Profil Laila Zulkifli',
                'name'        => 'Laila Zulkifli',
                'description' => 'Mengirim Tugas: Pedagogi Komparatif',
                'badgeText'   => 'Menunggu Peninjauan',
                'badgeBg'     => 'bg-secondary-fixed',
                'badgeColor'  => 'text-on-secondary-fixed-variant',
                'time'        => '15 menit yang lalu',
            ],
            [
                'isSystem'    => false,
                'avatar'      => 'https://ui-avatars.com/api/?name=Benjamin+Tan&background=191c1e&color=ffffff',
                'avatarAlt'   => 'Profil Benjamin Tan',
                'name'        => 'Benjamin Tan',
                'description' => 'Mendaftar di: Hukum Administrasi Lanjutan',
                'badgeText'   => 'Pendaftaran Baru',
                'badgeBg'     => 'bg-primary-fixed',
                'badgeColor'  => 'text-on-primary-fixed-variant',
                'time'        => '1 jam yang lalu',
            ],
            [
                'isSystem'    => true,
                'systemIcon'  => 'system_update',
                'name'        => 'Pembaruan Sistem',
                'description' => 'Cadangan data kurikulum berhasil diselesaikan',
                'badgeText'   => 'Sistem',
                'badgeBg'     => 'bg-surface-container',
                'badgeColor'  => 'text-on-surface-variant',
                'time'        => '4 jam yang lalu',
            ],
        ];


        // ----------------------------------------------------------------
        // Kirim semua data ke view
        // ----------------------------------------------------------------
        return view('admin.dashboard', compact(
            'stats',
            'chartData',
            'peakEnrollment',
            'avgGrowth',
            'quickActions',
            'certHealth',
            'activities',
        ));
    }
}