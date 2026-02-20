<x-layouts.app>
    <x-slot name="navbar">
        <x-navbar />
    </x-slot>

    <x-slot name="footer">
        <x-footer />
    </x-slot>

    <section class="relative overflow-hidden py-32
        bg-white dark:bg-black">

        <div
            class="absolute inset-0 bg-[url('/images/noise.png')]
            opacity-[0.03] dark:opacity-[0.05] pointer-events-none">
        </div>

        <div
            class="absolute -top-40 -left-40 w-120 h-120
            bg-blue-200/40 dark:bg-red-900/20 blur-[160px] rounded-full">
        </div>

        <div
            class="absolute bottom-0 right-0 w-104 h-104
            bg-slate-200/40 dark:bg-red-800/10 blur-[140px] rounded-full">
        </div>

        <div class="max-w-5xl mx-auto px-6 relative z-10 text-center">

            <h3
                class="uppercase tracking-[0.35em]
                text-xs
                text-blue-700 dark:text-red-700
                mb-6">
                Profile Dossier
            </h3>

            <h1
                class="text-4xl sm:text-5xl md:text-6xl
                font-extrabold uppercase
                text-neutral-900 dark:text-neutral-100
                leading-tight">
                Indra Mahayana
            </h1>

            <div class="w-24 h-0.5
                bg-blue-600 dark:bg-red-800
                mx-auto mt-6"></div>

            <p
                class="mt-8 max-w-3xl mx-auto text-lg leading-relaxed
                text-neutral-600 dark:text-neutral-400">
                I design and engineer digital systems with intention.
                Interfaces must feel deliberate. Architectures must endure.
                Every line of code should survive scale, stress, and scrutiny.
            </p>
        </div>
    </section>

    <section
        class="relative py-28 border-t
        border-neutral-200 dark:border-neutral-900
        bg-slate-50 dark:bg-black">

        <div class="max-w-6xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-20 items-start">

                <div>
                    <h2
                        class="text-3xl font-extrabold uppercase
                        text-neutral-900 dark:text-neutral-100">
                        Philosophy
                    </h2>

                    <div
                        class="w-20 h-0.5
                        bg-blue-600 dark:bg-red-800
                        mt-6">
                    </div>
                </div>

                <div
                    class="space-y-6 text-lg leading-relaxed
                    text-neutral-600 dark:text-neutral-400">

                    <p>
                        I operate at the intersection of interface and logic.
                        Design without structure collapses. Code without clarity decays.
                    </p>

                    <p>
                        My work prioritizes maintainability, scalability,
                        and performance.
                    </p>

                    <p>
                        A product should communicate purpose immediately,
                        behave predictably under load,
                        and evolve without architectural compromise.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section
        class="relative py-32 border-t
        border-neutral-200 dark:border-neutral-900
        bg-white dark:bg-black">

        <div class="max-w-6xl mx-auto px-6">

            <h2 class="text-3xl font-extrabold uppercase
                text-neutral-900 dark:text-neutral-100 mb-16">
                Professional Record
            </h2>

            <div class="relative">
                <div class="absolute left-6 top-0 bottom-0 w-px
                    bg-blue-300 dark:bg-red-900/40">
                </div>

                <div class="space-y-28">

                    <div class="relative pl-16">
                        <div
                            class="absolute left-6 top-2 -translate-x-1/2
                            w-4 h-4 rounded-full
                            bg-blue-600 dark:bg-red-800">
                        </div>

                        <h3
                            class="text-xl font-bold uppercase
                            text-neutral-900 dark:text-neutral-100">
                            Full Stack Developer
                        </h3>

                        <p class="text-sm tracking-widest mt-1
                            text-neutral-500">
                            2022 — Present
                        </p>

                        <p
                            class="mt-4 leading-relaxed max-w-2xl
                            text-neutral-600 dark:text-neutral-400">
                            Architected scalable web applications using Laravel
                            and modern frontend frameworks.
                        </p>
                    </div>

                    <div class="relative pl-16">
                        <div
                            class="absolute left-6 top-2 -translate-x-1/2
                            w-4 h-4 rounded-full
                            bg-blue-600 dark:bg-red-800">
                        </div>

                        <h3
                            class="text-xl font-bold uppercase
                            text-neutral-900 dark:text-neutral-100">
                            UI/UX Designer
                        </h3>

                        <p class="text-sm tracking-widest mt-1
                            text-neutral-500">
                            2020 — 2022
                        </p>

                        <p
                            class="mt-4 leading-relaxed max-w-2xl
                            text-neutral-600 dark:text-neutral-400">
                            Crafted high-contrast, accessibility-driven interfaces.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section
        class="relative py-28 border-t
        border-neutral-200 dark:border-neutral-900
        bg-slate-50 dark:bg-black">

        <div class="max-w-6xl mx-auto px-6">

            <h2 class="text-3xl font-extrabold uppercase
                text-neutral-900 dark:text-neutral-100 mb-16">
                Education
            </h2>

            <div
                class="p-10 rounded-2xl max-w-3xl
                bg-white dark:bg-neutral-900/60
                border border-neutral-200 dark:border-neutral-800
                shadow-sm dark:shadow-[0_40px_100px_rgba(0,0,0,0.9)]">

                <h3 class="text-xl font-bold uppercase
                    text-neutral-900 dark:text-neutral-100">
                    Bachelor of Information Systems
                </h3>

                <p class="tracking-widest text-sm mt-2
                    text-neutral-500">
                    2018 — 2022
                </p>

                <p class="mt-6 leading-relaxed
                    text-neutral-600 dark:text-neutral-400">
                    Specialized in software architecture,
                    database systems, and human-computer interaction.
                </p>

            </div>
        </div>
    </section>

    <section
        class="relative py-32 border-t
        border-neutral-200 dark:border-neutral-900
        bg-white dark:bg-black">

        <div class="max-w-6xl mx-auto px-6">

            <h2 class="text-3xl font-extrabold uppercase
                text-neutral-900 dark:text-neutral-100 mb-16">
                Technical Arsenal
            </h2>

            <div class="grid md:grid-cols-3 gap-10">

                @foreach ([
        'Frontend Systems' => 'TailwindCSS, AlpineJS, Responsive Design, Accessibility Standards, UI Systems.',
        'Backend Architecture' => 'Laravel, REST API Design, Database Modeling, Authentication & Security.',
        'Performance & Deployment' => 'Optimization Strategies, Query Tuning, Hosting Environments, Monitoring.',
    ] as $title => $desc)
                    <div class="space-y-4">
                        <h4
                            class="font-bold uppercase
                            text-neutral-900 dark:text-neutral-100">
                            {{ $title }}
                        </h4>

                        <div class="w-12 h-0.5
                            bg-blue-600 dark:bg-red-800"></div>

                        <p
                            class="text-sm leading-relaxed
                            text-neutral-600 dark:text-neutral-400">
                            {{ $desc }}
                        </p>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

</x-layouts.app>
