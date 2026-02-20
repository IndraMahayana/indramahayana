<x-layouts.app>

    <x-slot name="navbar">
        <x-navbar />
    </x-slot>

    <x-slot name="footer">
        <x-footer />
    </x-slot>

    <section id="projects"
        class="relative overflow-hidden py-32
        px-6 md:px-16 lg:px-24
        bg-white dark:bg-black">

        <div
            class="absolute inset-0 bg-[url('/images/noise.png')]
            opacity-[0.03] dark:opacity-[0.04] pointer-events-none">
        </div>

        <div
            class="absolute -top-40 -right-40 w-120 h-120
            bg-blue-200/40 dark:bg-red-900/20
            blur-[160px] rounded-full">
        </div>

        <div
            class="absolute bottom-0 left-0 w-104 h-104
            bg-slate-200/40 dark:bg-red-800/10
            blur-[140px] rounded-full">
        </div>

        <div class="relative z-10 max-w-6xl mx-auto">
            <div class="mb-24">

                <h2
                    class="text-4xl md:text-5xl
                    font-extrabold uppercase
                    tracking-[0.2em]
                    text-neutral-900 dark:text-neutral-100">
                    Gotham Case Archive
                </h2>

                <div class="w-24 h-0.5 mt-6
                    bg-blue-600 dark:bg-red-800">
                </div>

                <p class="mt-8 max-w-2xl leading-relaxed
                    text-neutral-600 dark:text-neutral-400">
                    A structured record of engineered systems.
                    Each deployment documented. Each architecture deliberate.
                    Built to endure operational pressure.
                </p>

            </div>

            <div class="space-y-40">

                <x-case-file :index="1" status="ACTIVE" title="Gemilang Meubel Platform"
                    description="A full-stack commerce system engineered with modular Laravel architecture and performance-focused front-end rendering."
                    image="https://images.unsplash.com/photo-1506765515384-028b60a970df?q=80&w=1000" url="#"
                    :stacks="['Full Stack', 'Laravel', 'Vue']" />

                <x-case-file :index="2" status="ARCHIVED" title="Corporate Profile System"
                    description="A structured content system where clarity of interface aligns with scalable backend architecture."
                    image="https://images.unsplash.com/photo-1506765515384-028b60a970df?q=80&w=1000" url="#"
                    :stacks="['Web App', 'Blade', 'Tailwind']" />

                <x-case-file :index="3" status="ARCHIVED" title="Corporate Profile System"
                    description="A structured content system where clarity of interface aligns with scalable backend architecture."
                    image="https://images.unsplash.com/photo-1506765515384-028b60a970df?q=80&w=1000" url="#"
                    :stacks="['Web App', 'Blade', 'Tailwind']" />

                <x-case-file :index="4" status="ARCHIVED" title="Corporate Profile System"
                    description="A structured content system where clarity of interface aligns with scalable backend architecture."
                    image="https://images.unsplash.com/photo-1506765515384-028b60a970df?q=80&w=1000" url="#"
                    :stacks="['Web App', 'Blade', 'Tailwind']" />

            </div>

        </div>
    </section>

</x-layouts.app>
