{{--
    Activity Item Component
    Menampilkan satu baris aktivitas siswa terbaru.

    Props (dari array $activity):
    - $activity['avatar']       : URL avatar atau null untuk icon sistem
    - $activity['avatarAlt']    : Teks alt untuk avatar
    - $activity['name']         : Nama pengguna atau entitas
    - $activity['description']  : Deskripsi aktivitas
    - $activity['badgeText']    : Label status (contoh: 'Selesai', 'Sistem')
    - $activity['badgeBg']      : Class background badge
    - $activity['badgeColor']   : Class warna teks badge
    - $activity['time']         : Waktu relatif (contoh: '2 menit yang lalu')
    - $activity['isSystem']     : bool - true jika aktivitas sistem (gunakan icon, bukan avatar)
    - $activity['systemIcon']   : Nama icon Material Symbols jika isSystem = true

    Contoh penggunaan:
    @foreach ($activities as $activity)
        @include('components.activity-item', compact('activity'))
    @endforeach
--}}
<div class="py-md flex items-center justify-between">

    {{-- Avatar atau System Icon --}}
    <div class="flex items-center gap-md">
        @if (!empty($activity['isSystem']) && $activity['isSystem'])
            {{-- Icon untuk aktivitas sistem --}}
            <div class="w-10 h-10 rounded-full bg-surface-container-high flex items-center justify-center flex-shrink-0">
                <span class="material-symbols-outlined text-secondary">{{ $activity['systemIcon'] ?? 'settings' }}</span>
            </div>
        @else
            {{-- Avatar pengguna --}}
            <img
                src="{{ $activity['avatar'] }}"
                alt="{{ $activity['avatarAlt'] ?? 'Profil Siswa' }}"
                class="w-10 h-10 rounded-full flex-shrink-0 object-cover"
            />
        @endif

        {{-- Info Aktivitas --}}
        <div>
            <p class="text-body-md font-bold">{{ $activity['name'] }}</p>
            <p class="text-body-sm text-secondary">{{ $activity['description'] }}</p>
        </div>
    </div>

    {{-- Badge Status + Waktu --}}
    <div class="text-right flex-shrink-0 ml-md">
        <span class="inline-block px-sm py-xs {{ $activity['badgeBg'] }} {{ $activity['badgeColor'] }} text-label-sm font-bold rounded-full mb-xs">
            {{ $activity['badgeText'] }}
        </span>
        <p class="text-label-sm text-secondary">{{ $activity['time'] }}</p>
    </div>

</div>