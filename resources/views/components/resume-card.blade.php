@props(['title', 'icon' => null])

<div
    class="bg-white rounded-2xl p-8
           shadow-sm border-l-4 border-red-600
           transition-all duration-300
           hover:-translate-y-1 hover:shadow-lg">

    <div class="flex items-center gap-3 mb-5">

        @if ($icon)
            <div class="text-red-600">
                {!! $icon !!}
            </div>
        @endif

        <h3 class="text-xl font-semibold text-gray-900">
            {{ $title }}
        </h3>

    </div>
    {{ $slot }}
</div>
