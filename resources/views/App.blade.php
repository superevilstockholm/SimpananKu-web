<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="SimpananKu adalah website monitoring dan manajemen tabungan siswa SMK Negeri 4 Kota Tangerang.">
    <title>@yield('title', 'SimpananKu')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('static/img/logo.svg') }}">
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
    {{-- End Bootstrap --}}
    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    {{-- End Google Font --}}
    {{-- Local CSS --}}
    <link rel="stylesheet" href="{{ asset('static/css/global-style.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/animation.css') }}">
    {{-- End Local CSS --}}
</head>
<body data-bs-theme="dark" style="background-color: black;">
    @if ($meta['showNavbar'])
        <header class="p-0 m-0 {{ Route::currentRouteName() == 'features' || Route::currentRouteName() == 'about' ? 'fixed-top' : 'sticky-top' }}">
            {{-- Navbar Component --}}
            @include('components.navbar_component')
        </header>
    @endif
    <main class="{{ Route::currentRouteName() == 'features' || Route::currentRouteName() == 'about' ? 'overflow-hidden': '' }}">
        {{-- Content --}}
        @yield('content')
    </main>
    @if ($meta['showFooter'])
        <footer>
            {{-- Footer Component --}}
            @include('components.footer_component')
        </footer>
    @endif
    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    {{-- End Bootstrap --}}
    {{-- Sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- End Sweetalert --}}
    {{-- Axios --}}
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        axios.defaults.headers.common['ngrok-skip-browser-warning'] = 'any';
    </script>
    {{-- End Axios --}}
    {{-- ScrollTrigger --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    {{-- End ScrollTrigger --}}
    {{-- GSAP --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script>
        gsap.registerPlugin(ScrollTrigger);
    </script>
    {{-- End GSAP --}}
    {{-- Local JS --}}
    <script src="{{ asset('static/js/global-script.js') }}"></script>
    {{-- End Local JS --}}
</body>
</html>
