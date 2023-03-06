<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Colegio de Farmacéuticos</title>
        <meta name="description" content="">
        <meta name="keywords" content="">

        <meta property="og:title" content="Colegio de Farmacéuticos">
        <meta property="og:image" content="{{ asset('img/site/cofa.jpg') }}">
        <meta name="og:description" content="">
        <meta property="og:site_name" content="Colegio de Farmacéuticos">
        <meta property="og:url" content="https://cofa.ar">
        <meta property="og:type" content="website">

        <meta name="format-detection" content="telephone=no">

        <link href="{{ asset('favicon.ico') }}" rel="shortcut icon">

        @vite(['resources/sass/site.scss', 'resources/js/site.js'])

        @livewireStyles

    </head>
    <body>
        @yield('contenido')
        @livewireScripts
    </body>
</html>