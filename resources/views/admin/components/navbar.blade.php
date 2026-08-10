{{--
    Top Navigation Bar Component
    Menampilkan judul, search bar, notifikasi, dan profil admin.
    Data user diambil dari Auth::user() atau dapat di-pass via $adminName / $adminRole.
--}}
<header class="sticky top-0 z-40 w-full flex justify-between items-center px-lg py-sm bg-surface-container-lowest border-b border-outline-variant shadow-sm">

    {{-- Brand Title --}}
    <div class="flex items-center gap-md">
        <span class="text-h3 font-h3 font-bold text-primary">Yayasan Darussalam</span>
    </div>

    {{-- Right Section: Search + Actions + Profile --}}
    <div class="flex items-center gap-lg">

        {{-- Search Bar --}}
        <div class="relative w-96">
            <span class="material-symbols-outlined absolute left-sm top-1/2 -translate-y-1/2 text-outline">search</span>
            <input
                type="text"
                placeholder="Cari siswa, kursus..."
                class="w-full pl-xl pr-md py-xs rounded-lg border border-outline-variant bg-surface-container-low focus:ring-2 focus:ring-primary-container transition-all"
            />
        </div>

        {{-- Icon Actions --}}
        <div class="flex items-center gap-md text-on-surface-variant">
            <button class="p-xs hover:bg-surface-container rounded-full transition-all duration-200" title="Notifikasi">
                <span class="material-symbols-outlined">notifications</span>
            </button>
            <button class="p-xs hover:bg-surface-container rounded-full transition-all duration-200" title="Bantuan">
                <span class="material-symbols-outlined">help</span>
            </button>
        </div>

        {{-- Admin Profile --}}
        <div class="flex items-center gap-sm pl-md border-l border-outline-variant">
            <div class="text-right">
                {{-- Gunakan Auth::user()->name di production --}}
                <p class="text-label-md font-bold text-on-surface">{{ $adminName ?? auth()->user()->name ?? 'Admin User' }}</p>
                <p class="text-label-sm text-secondary">{{ $adminRole ?? 'Administrator' }}</p>
            </div>
            <img
                src="{{ $adminAvatar ?? 'https://ui-avatars.com/api/?name=Admin+User&background=dde1ff&color=00288e' }}"
                alt="Profil Administrator"
                class="w-10 h-10 rounded-full border border-primary-fixed object-cover"
            />
        </div>

    </div>
</header>