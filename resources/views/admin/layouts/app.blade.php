<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>@yield('title', 'EduFoundation LMS')</title>

    {{-- Tailwind CSS + Plugins --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

    {{-- Tailwind Config --}}
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary-fixed-dim": "#d0eee5",
                        "surface-container-highest": "#e0e3e5",
                        "on-tertiary": "#ffffff",
                        "on-surface": "#191c1e",
                        "surface-container": "#eceef0",
                        "error": "#ba1a1a",
                        "tertiary-fixed": "#c9e6ff",
                        "inverse-on-surface": "#eff1f3",
                        "surface-dim": "#d8dadc",
                        "on-tertiary-container": "#68c4ff",
                        "on-surface-variant": "#444653",
                        "on-background": "#191c1e",
                        "on-tertiary-fixed": "#001e2f",
                        "tertiary-fixed-dim": "#89ceff",
                        "secondary-fixed-dim": "#b7c8e1",
                        "on-primary-fixed-variant": "#173bab",
                        "outline": "#757684",
                        "on-error": "#ffffff",
                        "primary-container": "#043328",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-high": "#e6e8ea",
                        "outline-variant": "#c4c5d5",
                        "secondary-fixed": "#d3e4fe",
                        "surface-variant": "#e0e3e5",
                        "on-primary": "#ffffff",
                        "tertiary": "#0a7a5e",
                        "surface-container-low": "#f2f4f6",
                        "primary-fixed": "#ecf8f3",
                        "inverse-primary": "#b8c4ff",
                        "on-primary-container": "#a8b8ff",
                        "background": "#f7f9fb",
                        "inverse-surface": "#2d3133",
                        "secondary-container": "#d9b878",
                        "on-secondary-fixed-variant": "#38485d",
                        "on-secondary-container": "#faf5ea",
                        "on-tertiary-fixed-variant": "#004c6e",
                        "on-secondary-fixed": "#0b1c30",
                        "surface-tint": "#3755c3",
                        "primary": "#064e3b",
                        "surface-bright": "#f7f9fb",
                        "error-container": "#ffdad6",
                        "on-error-container": "#93000a",
                        "surface": "#f7f9fb",
                        "tertiary-container": "#005074",
                        "secondary": "#9e7f3f",
                    },
                    borderRadius: {
                        DEFAULT: "0.25rem",
                        lg: "0.5rem",
                        xl: "0.75rem",
                        full: "9999px",
                    },
                    spacing: {
                        unit: "4px", xl: "32px", xs: "4px", md: "16px",
                        xxl: "48px", "container-margin": "24px",
                        gutter: "20px", lg: "24px", sm: "8px",
                    },
                    fontFamily: {
                        "h1": ["Inter"], "body-lg": ["Inter"], "body-md": ["Inter"],
                        "display": ["Inter"], "h3": ["Inter"], "body-sm": ["Inter"],
                        "h2": ["Inter"], "label-sm": ["Inter"], "label-md": ["Inter"],
                    },
                    fontSize: {
                        "h1": ["30px", { lineHeight: "1.2", fontWeight: "600" }],
                        "body-lg": ["18px", { lineHeight: "1.6", fontWeight: "400" }],
                        "body-md": ["16px", { lineHeight: "1.5", fontWeight: "400" }],
                        "display": ["36px", { lineHeight: "1.2", fontWeight: "700" }],
                        "h3": ["20px", { lineHeight: "1.4", fontWeight: "600" }],
                        "body-sm": ["14px", { lineHeight: "1.5", fontWeight: "400" }],
                        "h2": ["24px", { lineHeight: "1.3", fontWeight: "600" }],
                        "label-sm": ["12px", { lineHeight: "1.0", letterSpacing: "0.04em", fontWeight: "600" }],
                        "label-md": ["14px", { lineHeight: "1.0", letterSpacing: "0.02em", fontWeight: "500" }],
                    },
                },
            },
        }
    </script>

    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        body {
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
        }
    </style>

    @stack('styles')
</head>
<body class="bg-background text-on-surface">

<div class="flex min-h-screen">

    {{-- Sidebar --}}
    @include('admin.components.sidebar')

    {{-- Main Content Area --}}
    <main class="flex-grow ml-64 min-h-screen">

        {{-- Navbar --}}
        @include('admin.components.navbar')

        {{-- Page Content --}}
        <div class="max-w-[1280px] mx-auto p-xl space-y-xl">
            @yield('content')
        </div>

        {{-- Footer --}}
        <footer class="mt-xxl border-t border-outline-variant bg-surface-container-lowest py-xl px-lg">
            <div class="max-w-[1280px] mx-auto flex flex-col md:flex-row justify-between items-center gap-md">
                <div class="flex items-center gap-md">
                    <span class="text-h3 font-h3 font-bold text-primary">EduFoundation</span>
                    <p class="text-body-sm text-secondary border-l border-outline-variant pl-md">
                        &copy; {{ date('Y') }} Yayasan Darusalam Services. Hak Cipta Dilindungi.
                    </p>
                </div>
                <div class="flex gap-lg">
                    <a class="text-label-md text-secondary hover:text-primary" href="#">Kebijakan Privasi</a>
                    <a class="text-label-md text-secondary hover:text-primary" href="#">Syarat Layanan</a>
                    <a class="text-label-md text-secondary hover:text-primary" href="#">Log Audit</a>
                </div>
            </div>
        </footer>

    </main>
</div>

@stack('scripts')
</body>
</html>