<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <title>
        @yield('title', 'Politeknik Negeri Malang - PSDKU Pamekasan')
    </title>

    <link rel="stylesheet"
        href="{{ asset('css/style.css') }}">

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>

    <!-- FOOTER -->

    <footer>

        <div class="container footer-content">

            <div>

                <h3>
                    POLINEMA PAMEKASAN
                </h3>

                <p>
                    Membangun generasi unggul,
                    berkarakter dan berdaya saing.
                </p>

            </div>


            <div>

                <h3>
                    Menu
                </h3>

                <a href="/home">
                    Beranda
                </a>

                <a href="/tentang">
                    Tentang
                </a>

                <a href="/akademik">
                    Akademik
                </a>

                <a href="/berita">
                    Berita
                </a>

            </div>


            <div>

                <h3>
                    Kontak
                </h3>

                <p>
                    Jl. Stadion No.IX/03, Ombul, Lawangan Daya, Kec. Pademawu, Kabupaten Pamekasan, Jawa Timur 69323.
                </p>

                <p>
                    Indonesia
                </p>

                <p>
                    info@universitas.ac.id
                </p>

            </div>

        </div>


        <div class="copyright">

            © {{ date('Y') }}
            Politeknik Negeri Malang - PSDKU Pamekasan

        </div>

    </footer>
    </body>
</html>
