<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="SimpananKu adalah website monitoring dan manajemen tabungan siswa SMK Negeri 4 Kota Tangerang.">
    <title>@yield('title', 'SimpananKu')</title>
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
    {{-- End Local CSS --}}
</head>
<body data-bs-theme="dark">
    @if ($meta['showNavbar'])
        <header class="p-0 m-0">
            @include('components.navbar_component')
        </header>
    @endif
    <main>
        @yield('content')
    </main>
    @if ($meta['showFooter'])
        <footer>
            @include('components.footer_component')
        </footer>
    @endif
    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    {{-- End Bootstrap --}}
</body>
</html>
