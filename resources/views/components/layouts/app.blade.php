<!DOCTYPE html>
<html lang="id" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="facebook-domain-verification" content="bb7n2m2ceawcuoeu4o8e3vrcgex0s4" />

    <title>{{ $title ?? 'Indra Mahayana' }}</title>
    <meta name="description" content="{{ $meta_description ?? 'Indra Mahayana - Web Developers Handal' }}">

    <link rel="icon" href="{{ asset('images/logo.webp') }}" type="image/webp">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body
    class="gotham-bg bg-zinc-950 bg-linear-to-br from-[#0A0A0B] via-[#111113] to-black
         text-neutral-200 antialiased selection:bg-red-800 selection:text-black">
    @isset($navbar)
        {!! $navbar !!}
    @endisset

    <main class="min-h-screen">
        {{ $slot }}
    </main>

    @isset($footer)
        {!! $footer !!}
    @endisset

    @stack('scripts')

</body>

</html>
