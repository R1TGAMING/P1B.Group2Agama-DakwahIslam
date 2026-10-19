
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'e-Masjid.id')</title>

    <!-- CSS umum untuk semua halaman -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v=1">

    <!-- CSS khusus halaman Dakwah Islam -->
    @if (request()->routeIs('blog.*'))
        <link rel="stylesheet" href="{{ asset('css/dakwah.css') }}?v=1">
    @endif

    <!-- CSS khusus halaman Jadwal Kegiatan -->
    @if (request()->routeIs('jadwal.*'))
        <link rel="stylesheet" href="{{ asset('css/jadwal.css') }}?v=1">
    @endif

    <!-- CSS khusus halaman Dashboard -->
    @if (request()->routeIs('dashboard'))
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}?v=1">
    @endif

    <!-- CSS khusus halaman Tentang Kami -->
    @if (request()->routeIs('tentang'))
        <link rel="stylesheet" href="{{ asset('css/tentang.css') }}?v=1">
    @endif
</head>

<body>

    <!-- NAVBAR -->
    <header class="site-header">
        <div class="navbar">

            <a href="{{ route('dashboard') }}" class="brand">
                <span class="brand-name">e-Masjid.id</span>
                <small>Website Informasi Masjid</small>
            </a>

            <nav class="nav-menu">

                <a href="{{ route('dashboard') }}"
                   class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    Dashboard
                </a>

                <a href="{{ route('jadwal.index') }}"
                   class="{{ request()->routeIs('jadwal.*') ? 'active' : '' }}">
                    Jadwal Kegiatan
                </a>

                <a href="{{ route('blog.index') }}"
                   class="{{ request()->routeIs('blog.*') ? 'active' : '' }}">
                    Dakwah Islam
                </a>

                <a href="{{ route('tentang') }}"
                   class="{{ request()->routeIs('tentang') ? 'active' : '' }}">
                    Tentang Kami
                </a>

            </nav>

        </div>
    </header>

    <!-- KONTEN HALAMAN -->
    <main>
        @yield('content')
    </main>

</body>
</html>
