<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
