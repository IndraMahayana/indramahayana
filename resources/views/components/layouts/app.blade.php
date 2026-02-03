<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="facebook-domain-verification" content="bb7n2m2ceawcuoeu4o8e3vrcgex0s4" />

    <title>{{ $title ?? 'Indra Mahayana' }}</title>
    <meta name="description" content="{{ $meta_description ?? 'Indra Mahayana - Web Developers Handal' }}">

    <link rel="icon" href="{{ asset('images/logo.webp') }}" type="image/webp">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body class="bg-gray-50">
    @isset($navbar)
        {!! $navbar !!}
    @endisset

    <main class="min-h-screen">
        {{ $slot }}
    </main>

    <x-footer />

    @stack('scripts')

</body>

</html>
