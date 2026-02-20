@props(['title', 'icon' => null])

<div
    class="bg-white dark:bg-black
           rounded-2xl p-8
           border border-neutral-200 dark:border-neutral-800
           transition-all duration-300
           hover:-translate-y-1">

    <div class="flex items-center gap-3 mb-5">

        @if ($icon)
            <div class="text-neutral-700 dark:text-neutral-300">
                {!! $icon !!}
            </div>
        @endif

        <h3 class="text-xl font-semibold
                   text-neutral-900 dark:text-neutral-100">
            {{ $title }}
        </h3>

    </div>

    <div class="text-neutral-600 dark:text-neutral-400">
        {{ $slot }}
    </div>
</div>
