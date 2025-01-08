<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Facade Link">
    <meta name="description" content="{{ config('app.name', 'Pinkary') }} - Transforme cliques em dados valiosos">
    <meta name="keywords"
        content="facade link, link, encurtador de link, encurtador, url, encurtar, encurtador de url, encurtador de links, encurtador de url grátis, encurtador de links grátis, encurtador de url personalizado, encurtador de links personalizado, encurtador de url customizado, encurtador de links customizado, encurtador de url com estatísticas, encurtador de links com estatísticas, encurtador de url com relatórios, encurtador de links com relatórios, encurtador de url com painel, encurtador de links com painel, encurtador de url com dashboard, encurtador de links com dashboard, encurtador de url com domínio personalizado, encurtador de links com domínio personalizado, encurtador de url com domínio próprio, encurtador de links com domínio próprio, encurtador de url com domínio customizado, encurtador de links com domínio customizado">
    <meta name="robots" content="index, follow" />
    <meta name="canonical" content="{{ url()->current() }}" />
    <link rel="manifest" href="/manifest.json" />
    <meta content="Facade Link" property="og:site_name" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ config('app.name', 'Pinkary') }} - Transforme cliques em dados valiosos" />
    <meta property="og:description"
        content="{{ config('app.name', 'Pinkary') }} - Transforme cliques em dados valiosos" />


    <title>{{ config('app.name', 'Facade Link') }}</title>

    @livewireStyles

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @if (app()->environment('production'))
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-TWH9PBG6L0"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-TWH9PBG6L0');
        </script>
    @endif
</head>

<body class="antialiased bg-slate-950 text-slate-200 tracking-tight relative flex flex-col min-h-screen">
    @include('components.layouts.navigation')

    {{ $slot }}

    @include('components.layouts.footer')
    @livewireScriptConfig
</body>

</html>
