@props([
    'href' => '#',
    'variant' => 'gray',
    'fontSize' => 'md',
    'class' => '',
    'target' => '_self',
])

@php
    $variants = [
        'main' => '
            bg-red-600 hover:bg-red-700
            dark:bg-red-700 dark:hover:bg-red-800
            text-white
            border border-red-600 dark:border-red-700
        ',

        'gray' => '
            bg-neutral-900 hover:bg-neutral-800
            dark:bg-neutral-800 dark:hover:bg-neutral-700
            text-neutral-100
            border border-neutral-800 dark:border-neutral-700
        ',

        'transparent' => '
            bg-transparent
            text-neutral-900 dark:text-neutral-100
            border border-neutral-300 dark:border-neutral-700
            hover:bg-neutral-900 hover:text-white
            dark:hover:bg-neutral-100 dark:hover:text-neutral-900
        ',
    ];

    $sizes = [
        'md' => 'h-10 px-4 text-sm',
        'lg' => 'h-12 px-6 text-base',
        'xl' => 'h-14 px-8 text-lg',
    ];

    $color = $variants[$variant] ?? $variants['gray'];
    $sizeClass = $sizes[$fontSize] ?? $sizes['md'];
@endphp

<a href="{{ $href }}" target="{{ $target }}"
    class="w-fit flex items-center justify-center
           font-league-spartan font-bold rounded-lg
           transition-all duration-300
           focus:outline-none
           shadow-[0_15px_50px_rgba(139,0,0,0.35)]
           {{ $sizeClass }} py-2
           {{ $color }} {{ $class }}">
    {{ $slot }}
</a>
