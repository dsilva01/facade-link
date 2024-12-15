<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Facade Link' }}</title>
    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-slate-950 text-slate-200 tracking-tight relative flex flex-col min-h-screen">
    @include('components.layouts.navigation')

    {{ $slot }}

    @include('components.layouts.footer')
</body>

</html>
