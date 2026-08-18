<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="@yield('meta_description', 'Desa Cintaasih - Kecamatan Gekbrong')">
    <title>@yield('title', 'Desa Cintaasih') | Profil Desa</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,600;0,700;1,400&family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    {{-- Main CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('landing_page/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('landing_page/images/kabupaten-cianjur-logo-png_seeklogo-353574.png') }}" type="image/x-icon">

    {{-- Page-specific styles --}}
    @stack('styles')
</head>
<body>

    {{-- Navbar --}}
    @include('landing_page.partials.navbar')

    {{-- Main Content --}}
    <main id="main-content">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('landing_page.partials.footer')

    {{-- Back to Top Button --}}
    <button id="back-to-top" aria-label="Kembali ke atas">
        <i class="fas fa-chevron-up"></i>
    </button>

    {{-- Main JS --}}
    <script src="{{ asset('landing_page/js/landng_app.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    {{-- Page-specific scripts --}}
    @stack('scripts')
</body>
</html>