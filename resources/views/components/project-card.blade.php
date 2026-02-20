@props(['description', 'imageUrl', 'buttonText', 'buttonUrl', 'stacks' => [], 'cta'])

<div
    class="group relative
           bg-white dark:bg-black
           border border-neutral-200 dark:border-neutral-800
           rounded-2xl
           overflow-hidden
           transition-all duration-300
           hover:-translate-y-1">

    <!-- Image -->
    <div class="relative overflow-hidden">
        <img src="{{ $imageUrl }}" alt="Project preview"
            class="h-72 w-full object-cover
                   transition duration-500
                   group-hover:scale-105">

        <div class="absolute inset-0
                   bg-black/10 dark:bg-black/30
                   transition">
        </div>

        @if (!empty($cta))
            <span
                class="absolute top-4 left-4
                       text-[10px] uppercase tracking-[0.3em]
                       bg-white/80 dark:bg-black/70
                       backdrop-blur
                       px-4 py-2 rounded-full
                       text-neutral-700 dark:text-neutral-200
                       font-semibold">
                {{ $cta }}
            </span>
        @endif
    </div>

    <!-- Content -->
    <div class="p-6 flex flex-col justify-between">
        <h3
            class="text-xl font-bold uppercase
                   tracking-wide
                   text-neutral-900 dark:text-neutral-100
                   mb-2">
            {{ $slot }}
        </h3>

        @if ($stacks)
            <div class="flex flex-wrap gap-2 mb-3">
                @foreach ($stacks as $stack)
                    <span
                        class="text-[10px] uppercase tracking-widest
                               px-3 py-1 rounded-full
                               border border-neutral-300 dark:border-neutral-700
                               text-neutral-600 dark:text-neutral-400">
                        {{ $stack }}
                    </span>
                @endforeach
            </div>
        @endif

        <p
            class="text-sm leading-relaxed
                  text-neutral-600 dark:text-neutral-400
                  flex-1">
            {{ $description }}
        </p>

        <a href="{{ $buttonUrl }}"
            class="inline-flex items-center gap-2
                   mt-6
                   text-sm uppercase tracking-widest
                   font-semibold
                   text-neutral-700 dark:text-neutral-300
                   hover:text-black dark:hover:text-white
                   transition">
            {{ $buttonText }}
            <span class="transition group-hover:translate-x-1">→</span>
        </a>
    </div>

</div>
