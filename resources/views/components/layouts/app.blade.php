<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Indra Mahayana' }}</title>
    <meta name="description" content="{{ $meta_description ?? 'Indra Mahayana - Web Developers Handal' }}">

    <link rel="icon" href="{{ asset('images/logo.webp') }}" type="image/webp">

    <script>
        (function() {
            const saved = localStorage.getItem('theme');

            if (
                saved === 'dark' ||
                (!saved &&
                    window.matchMedia('(prefers-color-scheme: dark)').matches)
            ) {
                document.documentElement.classList.add('dark');
            }
        })();
    </script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body x-data="themeSwitcher()" class="antialiased transition-colors duration-500">
    @isset($navbar)
        {!! $navbar !!}
    @endisset

    <div
        class="min-h-screen bg-linear-to-br from-bg via-bg-soft to-blue-100 dark:to-black px-4 sm:px-6 md:px-16 lg:px-24 xl:px-32 pt-28 md:pt-0
    ">

        <main class="min-h-screen">
            {{ $slot }}
        </main>
    </div>

    @isset($footer)
        {!! $footer !!}
    @endisset

    @stack('scripts')

</body>

</html>
