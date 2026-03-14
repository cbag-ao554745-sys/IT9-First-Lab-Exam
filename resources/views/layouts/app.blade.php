<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="py-3 px-4" style="background-color: #ffffff; border-bottom: 2px solid #e7e5e4;">
        <a href="" class="link-underline link-underline-opacity-0 fs-3 fw-semibold" style="color: #1c1917;">
            Character Dictionary
        </a>
    </header>

    @if (session('success'))
        <div class="container mt-3">
            <div class="alert" role="alert"
                style="background-color: #d6f5e3; border: 1.5px solid #6fcf97; color: #1a6640; border-radius: 10px;">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <main>
        <div class="container mt-5">
            @yield('content')
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>