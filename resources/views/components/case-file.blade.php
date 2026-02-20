@props(['title', 'description', 'image', 'url' => '#', 'stacks' => [], 'index' => 1, 'status' => 'ACTIVE'])

@php
    $isEven = $index % 2 === 0;
    $statusColor = $status === 'ACTIVE' ? 'text-red-700 dark:text-red-500' : 'text-neutral-500 dark:text-neutral-600';
@endphp

<div class="relative group">
    <div class="absolute inset-3 -right-5 flex items-center justify-center
                pointer-events-none select-none">
        <span
            class="text-[160px] md:text-[240px]
                   font-extrabold uppercase
                   tracking-widest
                   text-gray-300/50 dark:text-neutral-900">
            {{ str_pad($index, 2) }}
        </span>
    </div>

    <div class="relative z-10 grid lg:grid-cols-2 gap-30 items-center">
        <div class="{{ $isEven ? 'lg:order-2' : '' }} relative">
            <div
                class="absolute inset-0
                        hover:bg-highlight/10
                        blur-xl">
            </div>

            <div
                class="relative overflow-hidden
                       border border-bg hover:border-highlight
                       bg-bg transition duration-500 group-hover:-translate-y-2">
                <div
                    class="absolute top-0 left-0 right-0 h-1
                           bg-highlight
                           opacity-0 group-hover:opacity-100
                           transition duration-500">
                </div>

                <img src="{{ $image }}" alt="{{ $title }}"
                    class="w-full h-105 object-cover
                           brightness-95 dark:brightness-60
                           contrast-105
                           transition duration-700
                           group-hover:brightness-100">
            </div>
        </div>

        <div class="space-y-6 {{ $isEven ? 'lg:order-1' : '' }}">

            <div
                class="text-[12px] tracking-[0.35em]
                        uppercase space-y-2
                        text-neutral-500">

                <div>Case {{ str_pad($index, 2, '0', STR_PAD_LEFT) }}</div>

                <div class="{{ $statusColor }}">
                    Status: {{ $status }}
                </div>

                <div>Type: {{ implode(', ', $stacks) }}</div>
            </div>

            <h3
                class="text-2xl md:text-4xl font-extrabold uppercase leading-tight text-heading">
                {{ $title }}
            </h3>

            <div class="w-44 h-0.5 bg-highlight"></div>

            <p class="leading-relaxed max-w-xl text-desc">
                {{ $description }}
            </p>

            <a href="{{ $url }}"
                class="inline-block
                       text-sm uppercase tracking-widest
                       text-neutral-500
                       hover:text-highlight
                       transition">
                Open Case File →
            </a>
        </div>
    </div>
</div>
