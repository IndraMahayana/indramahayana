@props([
    'title',
    'description',
    'image',
    'url' => '#',
    'stacks' => [],
    'index' => 1,
    'status' => 'ACTIVE',
])

@php
    $isEven = $index % 2 === 0;
    $statusColor = $status === 'ACTIVE' ? 'text-red-700' : 'text-neutral-600';
@endphp

<div class="relative group">
    <div class="absolute inset-0 flex items-center justify-center
                pointer-events-none select-none">
        <span
            class="text-[180px] md:text-[260px]
                     font-extrabold uppercase
                     text-neutral-800/20
                     tracking-widest">
            {{ str_pad($index, 2, '0', STR_PAD_LEFT) }}
        </span>
    </div>

    <div class="relative z-10 grid lg:grid-cols-2 gap-20 items-center">
        <div class="{{ $isEven ? 'lg:order-2' : '' }} relative">
            <div class="absolute inset-0 bg-black blur-xl opacity-70"></div>

            <div
                class="relative overflow-hidden
                        border border-neutral-800
                        bg-neutral-900/70
                        shadow-[0_40px_120px_rgba(0,0,0,0.95)]
                        transition duration-500
                        group-hover:-translate-y-2
                        group-hover:shadow-[0_60px_160px_rgba(0,0,0,1)]">

                <div
                    class="absolute top-0 left-0 right-0 h-1
                            bg-red-900/50
                            opacity-0
                            group-hover:opacity-100
                            transition duration-500">
                </div>

                <img src="{{ $image }}"
                    class="w-full h-105 object-cover
                            brightness-75 contrast-110
                            transition duration-700
                            group-hover:brightness-95"
                    alt="{{ $title }}">
            </div>
        </div>

        <div class="space-y-6 {{ $isEven ? 'lg:order-1' : '' }}">
            <div class="text-[11px] tracking-[0.35em]
                        uppercase text-neutral-500 space-y-2">

                <div>Case {{ str_pad($index, 2, '0', STR_PAD_LEFT) }}</div>

                <div class="{{ $statusColor }}">
                    Status: {{ $status }}
                </div>

                <div>Type: {{ implode(', ', $stacks) }}</div>
            </div>

            <h3
                class="text-2xl md:text-3xl
                       font-extrabold uppercase
                       text-neutral-100 leading-tight">
                {{ $title }}
            </h3>

            <div class="w-16 h-0.5 bg-red-800"></div>

            <p class="text-neutral-400 leading-relaxed max-w-xl">
                {{ $description }}
            </p>

            <a href="{{ $url }}"
                class="inline-block
                      text-sm uppercase tracking-widest
                      text-neutral-400
                      hover:text-red-700
                      transition">
                Open Case File →
            </a>
        </div>
    </div>
</div>
