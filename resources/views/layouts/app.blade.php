<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Politeknik Negeri Malang - PSDKU Pamekasan')
    </title>

    <link rel="stylesheet"
          href="{{ asset('css/style.css') }}">

</head>

<body>

    <!-- NAVBAR -->

    <header class="navbar">

        <div class="container navbar-container">

            <a href="{{ route('home') }}"
               class="logo">

                <div class="logo-icon">
                    🎓
                </div>

                <div>
                    <strong>
                        POLINEMA
                    </strong>

                    <span>
                        PSDKU Pamekasan
                    </span>
                </div>

            </a>


            <nav>

                <a href="{{ route('home') }}"
                   class="{{ request()->routeIs('home') ? 'active' : '' }}">
                    Beranda
                </a>

                <a href="{{ route('tentang') }}"
                   class="{{ request()->routeIs('tentang') ? 'active' : '' }}">
                    Tentang
                </a>

                <a href="{{ route('akademik') }}"
                   class="{{ request()->routeIs('akademik') ? 'active' : '' }}">
                    Akademik
                </a>

                <a href="{{ route('berita') }}"
                   class="{{ request()->routeIs('berita') ? 'active' : '' }}">
                    Berita
                </a>

                <a href="{{ route('kontak') }}"
                   class="{{ request()->routeIs('kontak') ? 'active' : '' }}">
                    Kontak
                </a>

            </nav>

        </div>

    </header>


    <!-- CONTENT -->

    <main>

        @yield('content')
        @yield('card1')
        @yield('card2')
        @yield('card3')
    </main>


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

                <a href="{{ route('home') }}">
                    Beranda
                </a>

                <a href="{{ route('tentang') }}">
                    Tentang
                </a>

                <a href="{{ route('akademik') }}">
                    Akademik
                </a>

                <a href="{{ route('berita') }}">
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