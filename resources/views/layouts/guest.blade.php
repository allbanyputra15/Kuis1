<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Politeknik Negeri Malang - PSDKU Pamekasan') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    @vite('resources/js/app.js')
</head>

<body class="bg-body-tertiary">
    <main class="min-vh-100 d-flex align-items-center justify-content-center py-5">
        <div class="container" style="max-width: 480px">
            <div class="text-center mb-4">
                <a class="d-inline-flex flex-column align-items-center gap-2 h4 fw-bold text-decoration-none text-primary"
                    href="{{ url('/') }}">
                    <img src="{{ asset('img/logo.webp') }}" alt="Logo PSDKU Pamekasan" width="96" height="96"
                        class="rounded-circle object-fit-cover">
                    <span>POLINEMA PAMEKASAN</span>
                </a>
            </div>
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4 p-sm-5">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
