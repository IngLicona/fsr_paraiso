<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FSR PARAISO - Familias en La Roca')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @yield('extra-css')
</head>
<body>
    <!-- NAVBAR (componente reutilizable) -->
    @include('components.navbar')

    <!-- CONTENIDO PRINCIPAL (diferente por cada página) -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- FOOTER (componente reutilizable) -->
    @include('components.footer')

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('extra-js')
</body>
</html>
