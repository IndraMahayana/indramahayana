@props(['description', 'imageUrl', 'buttonText', 'buttonUrl', 'stacks' => [], 'cta'])

<div
    class="group relative
           bg-[#0C0C0E]
           border border-neutral-800
           rounded-2xl
           overflow-hidden
           shadow-[0_30px_80px_rgba(0,0,0,0.85)]
           transition-all duration-500
           hover:-translate-y-2
           hover:shadow-[0_40px_120px_rgba(0,0,0,0.95)]">

    <div class="relative overflow-hidden">
        <img src="{{ $imageUrl }}" alt="Project preview"
            class="h-72 w-full object-cover
                   contrast-125 saturate-75 brightness-75
                   transition duration-700
                   group-hover:scale-105">

        <div
            class="absolute inset-0
                    bg-black/30
                    group-hover:bg-black/10
                    transition">
        </div>

        @if (!empty($cta))
            <span
                class="absolute top-4 left-4
                   text-[10px] uppercase tracking-[0.3em]
                   bg-black/80 backdrop-blur
                   px-4 py-2 rounded-full
                   text-red-700 font-semibold">
                {{ $cta }}
            </span>
        @endif
    </div>

    <div class="relative p-6 flex flex-col justify-between">
        <h3
            class="text-xl font-extrabold uppercase
                   tracking-wide
                   text-neutral-100
                   mb-2">
            {{ $slot }}
        </h3>

        @if ($stacks)
            <div class="flex flex-wrap gap-2 mb-2">
                @foreach ($stacks as $stack)
                    <span
                        class="text-[10px] uppercase tracking-widest
                           px-3 py-1 rounded-full
                           border border-neutral-700
                           text-neutral-400">
                        {{ $stack }}
                    </span>
                @endforeach
            </div>
        @endif

        <p class="text-sm leading-relaxed
                   text-neutral-500
                   flex-1">
            {{ $description }}
        </p>

        <a href="{{ $buttonUrl }}"
            class="inline-flex items-center gap-2
                  mt-6
                  text-sm uppercase tracking-widest
                  font-semibold
                  text-neutral-400
                  hover:text-red-700
                  transition">
            {{ $buttonText }}
            <span class="transition group-hover:translate-x-1">→</span>
        </a>
    </div>

    <div
        class="absolute inset-0 pointer-events-none
                opacity-0 group-hover:opacity-100
                transition duration-500
                shadow-[inset_0_0_0_1px_rgba(127,29,29,0.6)]">
    </div>
</div>
