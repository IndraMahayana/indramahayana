@props(['title', 'description', 'image', 'url' => '#', 'stacks' => [], 'index' => 1, 'status' => 'ACTIVE'])

@php
    $isEven = $index % 2 === 0;
    $statusColor = $status === 'ACTIVE' ? 'text-red-700 dark:text-red-500' : 'text-neutral-500 dark:text-neutral-600';
@endphp

<div class="relative group">

    <!-- background index -->
    <div class="absolute inset-0 flex items-center justify-center
                pointer-events-none select-none">
        <span
            class="text-[160px] md:text-[240px]
                   font-extrabold uppercase
                   tracking-widest
                   text-neutral-200/40
                   dark:text-neutral-800/20">
            {{ str_pad($index, 2, '0', STR_PAD_LEFT) }}
        </span>
    </div>

    <div class="relative z-10 grid lg:grid-cols-2 gap-20 items-center">

        <!-- IMAGE -->
        <div class="{{ $isEven ? 'lg:order-2' : '' }} relative">

            <!-- cinematic glow -->
            <div
                class="absolute inset-0
                        bg-neutral-200
                        dark:bg-black
                        blur-xl opacity-40 dark:opacity-70">
            </div>

            <div
                class="relative overflow-hidden
                       border border-neutral-200 dark:border-neutral-800
                       bg-white/70 dark:bg-neutral-900/70
                       transition duration-500
                       group-hover:-translate-y-2">

                <!-- accent line -->
                <div
                    class="absolute top-0 left-0 right-0 h-1
                           bg-red-600/40 dark:bg-red-900/50
                           opacity-0 group-hover:opacity-100
                           transition duration-500">
                </div>

                <img src="{{ $image }}" alt="{{ $title }}"
                    class="w-full h-105 object-cover
                           brightness-95 dark:brightness-75
                           contrast-105
                           transition duration-700
                           group-hover:brightness-100">
            </div>
        </div>

        <!-- TEXT -->
        <div class="space-y-6 {{ $isEven ? 'lg:order-1' : '' }}">

            <div
                class="text-[11px] tracking-[0.35em]
                        uppercase space-y-2
                        text-neutral-500 dark:text-neutral-500">

                <div>Case {{ str_pad($index, 2, '0', STR_PAD_LEFT) }}</div>

                <div class="{{ $statusColor }}">
                    Status: {{ $status }}
                </div>

                <div>Type: {{ implode(', ', $stacks) }}</div>
            </div>

            <h3
                class="text-2xl md:text-3xl
                       font-extrabold uppercase
                       leading-tight
                       text-neutral-900 dark:text-neutral-100">
                {{ $title }}
            </h3>

            <div class="w-16 h-0.5 bg-red-600 dark:bg-red-800"></div>

            <p class="leading-relaxed max-w-xl
                      text-neutral-600 dark:text-neutral-400">
                {{ $description }}
            </p>

            <a href="{{ $url }}"
                class="inline-block
                       text-sm uppercase tracking-widest
                       text-neutral-500
                       hover:text-red-600 dark:hover:text-red-500
                       transition">
                Open Case File →
            </a>

        </div>
    </div>
</div>
