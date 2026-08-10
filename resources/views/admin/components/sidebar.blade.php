{{--
    Sidebar Navigation Component
    Menampilkan navigasi utama aplikasi LMS.
    Aktif item ditentukan berdasarkan route saat ini (contoh: request()->routeIs('dashboard'))
--}}
<aside class="fixed left-0 top-0 h-full w-64 bg-surface-container-lowest border-r border-outline-variant flex flex-col py-lg gap-md px-md shadow-sm z-50">

    {{-- Brand / Logo --}}
    <div class="px-md mb-xl">
        <h1 class="text-h2 font-h2 font-bold text-primary">EduFoundation</h1>
        <p class="text-label-md font-label-md text-secondary">Portal LMS</p>
    </div>

    {{-- Navigation Links --}}
    <nav class="flex-grow space-y-sm overflow-y-auto">

        {{-- Dashboard --}}
        <a href="{{ route('dashboard') }}"
           class="{{ request()->routeIs('dashboard') ? 'bg-primary-container text-on-secondary-container font-bold' : 'text-primary hover:bg-surface-container-high' }} flex items-center px-md py-sm gap-md rounded-lg transition-colors">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="text-label-md font-label-md">Dashboard</span>
        </a>

        {{-- Grup: Data Master --}}
        <div class="pt-sm">
            <p class="px-md text-[10px] uppercase font-bold text-outline tracking-widest mb-xs">Data Master</p>

            {{-- Lembaga Dropdown --}}
            <div>
                <button
                    onclick="toggleDropdown('lembaga')"
                    id="btn-lembaga"
                    class="w-full text-primary flex items-center px-md py-sm hover:bg-surface-container-high transition-colors rounded-lg gap-md {{ request()->routeIs('lembaga.*') ? 'bg-surface-container-high' : '' }}">
                    <span class="material-symbols-outlined">account_balance</span>
                    <span class="text-label-md font-label-md flex-1 text-left">Lembaga</span>
                    <span class="material-symbols-outlined text-base transition-transform duration-200" id="chevron-lembaga">expand_more</span>
                </button>

                <div id="dropdown-lembaga"
                     class="ml-md mt-xs space-y-xs border-l-2 border-outline-variant pl-md overflow-hidden transition-all duration-200 {{ request()->routeIs('lembaga.*') ? '' : 'hidden' }}">

                    <a href="{{ route('lembaga.mas') }}"
                       class="{{ request()->routeIs('lembaga.mas') ? 'text-secondary-fixed-dim font-bold' : 'text-secondary hover:text-primary' }} flex items-center py-xs gap-sm text-label-md font-label-md transition-colors">
                        <span class="material-symbols-outlined text-sm">apartment</span>
                        MAS AL MUSTOFAWIYAH
                    </a>

                    <a href="{{ route('lembaga.pkbm') }}"
                       class="{{ request()->routeIs('lembaga.pkbm') ? 'text-secondary-fixed-dim font-bold' : 'text-secondary hover:text-primary' }} flex items-center py-xs gap-sm text-label-md font-label-md transition-colors">
                        <span class="material-symbols-outlined text-sm">apartment</span>
                        PKBM NURUL FATA
                    </a>

                </div>
            </div>

            <a href="{{ route('mapel') }}"
               class="{{ request()->routeIs('mapel') ? 'bg-primary-container text-on-secondary-container font-bold' : 'text-primary hover:bg-surface-container-high' }} flex items-center px-md py-sm gap-md rounded-lg transition-colors">
                <span class="material-symbols-outlined">menu_book</span>
                <span class="text-label-md font-label-md">Mata Pelajaran</span>
            </a>

            <a href="{{ route('user-management') }}"
               class="{{ request()->routeIs('user-management') ? 'bg-primary-container text-on-secondary-container font-bold' : 'text-primary hover:bg-surface-container-high' }} flex items-center px-md py-sm gap-md rounded-lg transition-colors">
                <span class="material-symbols-outlined">group</span>
                <span class="text-label-md font-label-md">Manajemen Pengguna</span>
            </a>
        </div>

        {{-- Grup: Akademik --}}
        <div class="pt-sm">
            <p class="px-md text-[10px] uppercase font-bold text-outline tracking-widest mb-xs">Akademik</p>

            {{-- Kelas Dropdown --}}
            <div>
                <button
                    onclick="toggleDropdown('kelas')"
                    id="btn-kelas"
                    class="w-full text-primary flex items-center px-md py-sm hover:bg-surface-container-high transition-colors rounded-lg gap-md {{ request()->routeIs('kelas.*') ? 'bg-surface-container-high' : '' }}">
                    <span class="material-symbols-outlined">meeting_room</span>
                    <span class="text-label-md font-label-md flex-1 text-left">Kelas</span>
                    <span class="material-symbols-outlined text-base transition-transform duration-200" id="chevron-kelas">expand_more</span>
                </button>

                <div id="dropdown-kelas"
                     class="ml-md mt-xs space-y-xs border-l-2 border-outline-variant pl-md overflow-hidden transition-all duration-200 {{ request()->routeIs('kelas.*') ? '' : 'hidden' }}">

                    <a href="{{ route('kelas.mas') }}"
                       class="{{ request()->routeIs('kelas.mas') ? 'text-secondary-fixed-dim font-bold' : 'text-secondary hover:text-primary' }} flex items-center py-xs gap-sm text-label-md font-label-md transition-colors">
                        <span class="material-symbols-outlined text-sm">door_open</span>
                        MAS AL MUSTOFAWIYAH
                    </a>

                    <a href="{{ route('kelas.pkbm') }}"
                       class="{{ request()->routeIs('kelas.pkbm') ? 'text-secondary-fixed-dim font-bold' : 'text-secondary hover:text-primary' }} flex items-center py-xs gap-sm text-label-md font-label-md transition-colors">
                        <span class="material-symbols-outlined text-sm">door_open</span>
                        PKBM NURUL FATA
                    </a>

                </div>
            </div>
            <a href="{{ route('asesment') }}" class="text-primary flex items-center px-md py-sm hover:bg-surface-container-high transition-colors rounded-lg gap-md">
                <span class="material-symbols-outlined">assignment</span>
                <span class="text-label-md font-label-md">Asesmen</span>
            </a>
            <a href="{{ route('laporan') }}" class="text-primary flex items-center px-md py-sm hover:bg-surface-container-high transition-colors rounded-lg gap-md">
                <span class="material-symbols-outlined">bar_chart</span>
                <span class="text-label-md font-label-md">Laporan</span>
            </a>
        </div>
    </nav>

    {{-- Bottom Actions --}}
    <div class="mt-auto pt-lg border-t border-outline-variant space-y-sm">

        <button class="w-full bg-primary-container text-on-primary py-sm rounded-lg font-bold flex items-center justify-center gap-sm active:scale-95 transition-transform">
            <span class="material-symbols-outlined">add</span>
            <span class="text-label-md font-label-md">Kursus Baru</span>
        </button>

        <a href="#" class="text-secondary flex items-center px-md py-sm hover:bg-surface-container-high transition-colors rounded-lg gap-md">
            <span class="material-symbols-outlined">contact_support</span>
            <span class="text-label-md font-label-md">Bantuan</span>
        </a>

        <form>
            @csrf
            <button type="submit" class="w-full text-secondary flex items-center px-md py-sm hover:bg-surface-container-high transition-colors rounded-lg gap-md">
                <span class="material-symbols-outlined">logout</span>
                <span class="text-label-md font-label-md">Keluar</span>
            </button>
        </form>
    </div>

</aside>

<script>
    function toggleDropdown(name) {
        const dropdown = document.getElementById('dropdown-' + name);
        const chevron  = document.getElementById('chevron-' + name);
        const isHidden = dropdown.classList.contains('hidden');

        dropdown.classList.toggle('hidden', !isHidden);
        chevron.classList.toggle('rotate-180', isHidden);
    }

    // Buka otomatis kalau ada child yang active saat halaman load
    document.querySelectorAll('[id^="dropdown-"]').forEach(function(el) {
        if (el.querySelector('a.font-bold')) {
            el.classList.remove('hidden');
            const name    = el.id.replace('dropdown-', '');
            const chevron = document.getElementById('chevron-' + name);
            if (chevron) chevron.classList.add('rotate-180');
        }
    });
</script>