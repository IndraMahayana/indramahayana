@props([
    'href' => '#',
    'variant' => 'gray',
    'fontSize' => 'md',
    'class' => '',
    'target' => '_self',
])

@php
    $variants = [
        'red' => 'bg-red-700 hover:bg-red-800 text-gray-50 border-red-700',
        'gray' => 'bg-gray-800 hover:bg-gray-900 text-gray-50',
        'transparent' => 'bg-transparent text-gray-800 hover:bg-gray-800 hover:text-gray-50 border border-gray-800',
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
    class="w-fit flex items-center justify-center focus:outline-none font-heading font-bold rounded-lg
          {{ $sizeClass }} py-2 text-center cursor-pointer
          {{ $color }} {{ $class }}">
    {{ $slot }}
</a>
