<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" type="image/x-icon" href="{{ url('/faviconlv.ico') }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">

        <!-- Scripts -->
        @routes
        <script src="{{ url(mix('js/app.js')) }}" defer></script>
    </head>
    <body class="font-sans antialiased dark:bg-gray-800">
        @inertia
    </body>
    <script>
        //habilita el modo nocturno detectado por el sistema
        var mql = window.matchMedia('(prefers-color-scheme: dark)');
        //if al iniciar o recargar
        if(mql.matches)
            document.querySelector('html').classList.add('dark')
        else
            document.querySelector('html').classList.remove('dark')
        //al detectar cambios
        mql.addEventListener("change", (e) => {
            if (e.matches) {
                document.querySelector('html').classList.add('dark')
            } else {
                document.querySelector('html').classList.remove('dark')
            }
        });
    </script>
</html>
