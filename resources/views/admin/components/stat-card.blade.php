{{--
    Stat Card Component
    Menampilkan satu metrik kunci di dashboard.

    Props:
    - $icon       : string  - nama Material Symbol icon (contoh: 'groups')
    - $iconColor  : string  - warna teks icon (contoh: 'text-primary', 'text-error')
    - $iconBg     : string  - warna background icon (contoh: 'bg-primary-fixed', 'bg-error-container')
    - $badgeText  : string  - teks badge di pojok kanan (contoh: '+12%', 'Aktif')
    - $badgeBg    : string  - class background badge (contoh: 'bg-secondary-fixed')
    - $badgeText2 : string  - class teks badge (contoh: 'text-on-secondary-fixed-variant')
    - $label      : string  - label metrik (contoh: 'Total Siswa')
    - $value      : string  - nilai metrik (contoh: '8.421')

    Contoh penggunaan:
    @include('components.stat-card', [
        'icon'       => 'groups',
        'iconColor'  => 'text-primary',
        'iconBg'     => 'bg-primary-fixed',
        'badgeText'  => '+12%',
        'badgeBg'    => 'bg-secondary-fixed',
        'badgeColor' => 'text-on-secondary-fixed-variant',
        'label'      => 'Total Siswa',
        'value'      => '8.421',
    ])
--}}
<div class="bg-surface-container-lowest p-lg rounded-lg border border-outline-variant shadow-sm flex flex-col gap-sm">

    {{-- Icon + Badge --}}
    <div class="flex justify-between items-start">
        <span class="material-symbols-outlined {{ $iconColor }} p-sm {{ $iconBg }} rounded-lg">
            {{ $icon }}
        </span>
        <span class="text-label-sm font-bold {{ $badgeColor }} {{ $badgeBg }} px-sm py-xs rounded-full">
            {{ $badgeText }}
        </span>
    </div>

    {{-- Label + Nilai --}}
    <div>
        <p class="text-label-md text-secondary">{{ $label }}</p>
        <h3 class="text-h1 font-h1 text-on-surface">{{ $value }}</h3>
    </div>

</div>