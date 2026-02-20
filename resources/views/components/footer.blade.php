<footer
    class="relative overflow-hidden
    border-t border-slate-200 dark:border-neutral-800
    px-6 md:px-16 lg:px-24 xl:px-32
    pt-20 pb-10
    text-slate-600 dark:text-neutral-400">

    <!-- noise -->
    <div class="absolute inset-0 bg-[url('/images/noise.png')]
        opacity-[0.04] pointer-events-none"></div>

    <!-- atmosphere glow -->
    <div
        class="absolute -top-40 right-0
        w-104 h-104
        bg-sky-300/40 dark:bg-red-900/10
        blur-[160px] rounded-full">
    </div>

    <div class="relative z-10 max-w-7xl mx-auto">

        <div class="grid grid-cols-1 md:grid-cols-4 gap-14">

            <!-- BRAND -->
            <div class="md:col-span-2 space-y-6">
                <h3
                    class="font-league-spartan font-bold
                    uppercase tracking-widest
                    text-slate-900 dark:text-neutral-100
                    text-sm">
                    Indra Mahayana
                </h3>

                <p class="max-w-md text-sm leading-relaxed
                    text-slate-500 dark:text-neutral-500">
                    Designing interfaces and building systems with clarity,
                    structure, and restraint. Less noise. More meaning.
                </p>

                <div class="flex items-center gap-5
                    text-slate-500 dark:text-neutral-500">

                    <a href="#"
                        class="hover:text-sky-600
                        dark:hover:text-red-700 transition">
                        GitHub
                    </a>

                    <span class="opacity-30">/</span>

                    <a href="#"
                        class="hover:text-sky-600
                        dark:hover:text-red-700 transition">
                        LinkedIn
                    </a>

                    <span class="opacity-30">/</span>

                    <a href="#"
                        class="hover:text-sky-600
                        dark:hover:text-red-700 transition">
                        Instagram
                    </a>
                </div>
            </div>

            <!-- NAVIGATION -->
            <div>
                <h4
                    class="text-xs uppercase tracking-widest
                    text-slate-700 dark:text-neutral-300
                    mb-6">
                    Navigate
                </h4>

                <ul class="space-y-4 text-sm">
                    <li>
                        <a href="#home"
                            class="hover:text-sky-600
                            dark:hover:text-red-700 transition">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#services"
                            class="hover:text-sky-600
                            dark:hover:text-red-700 transition">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="#projects"
                            class="hover:text-sky-600
                            dark:hover:text-red-700 transition">
                            Projects
                        </a>
                    </li>
                    <li>
                        <a href="#contact"
                            class="hover:text-sky-600
                            dark:hover:text-red-700 transition">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>

            <!-- SIGNAL -->
            <div>
                <h4
                    class="text-xs uppercase tracking-widest
                    text-slate-700 dark:text-neutral-300
                    mb-6">
                    Signal
                </h4>

                <p class="text-sm leading-relaxed
                    text-slate-500 dark:text-neutral-500">
                    Open for serious collaboration and meaningful work.
                </p>

                <a href="mailto:indramahayana3@gmail.com"
                    class="inline-block mt-4
                    text-sm font-semibold uppercase tracking-widest
                    text-sky-600 hover:text-sky-500
                    dark:text-red-700 dark:hover:text-red-600
                    transition">
                    Send Signal
                </a>
            </div>
        </div>

        <!-- divider -->
        <div class="w-full h-px
            bg-slate-200 dark:bg-neutral-800
            my-12">
        </div>

        <!-- bottom -->
        <div
            class="flex flex-col md:flex-row
            items-center justify-between
            gap-4 text-xs uppercase tracking-widest
            text-slate-500 dark:text-neutral-500">

            <span>
                © {{ date('Y') }} Indra Mahayana
            </span>

            <span id="easter-egg-trigger"
                class="relative cursor-default
                text-slate-400 dark:text-neutral-600">

                The city never sleeps.

                <span id="easter-egg"
                    class="absolute left-1/2 -translate-x-1/2
                    -top-10
                    text-[10px] uppercase tracking-[0.3em]
                    text-sky-600 dark:text-red-700
                    opacity-0 blur-sm
                    transition-all duration-700
                    pointer-events-none">
                    I am watching.
                </span>
            </span>
        </div>
    </div>
</footer>
