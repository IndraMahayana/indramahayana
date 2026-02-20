<x-layouts.app>
    <x-slot name="navbar">
        <x-navbar />
    </x-slot>

    <x-slot name="footer">
        <x-footer />
    </x-slot>

    <section id="home"
        class="relative flex min-h-screen flex-col-reverse md:flex-row items-center justify-center md:justify-between">

        <div class="absolute inset-0 bg-[url('/images/noise.png')]
                opacity-[0.04] pointer-events-none">
        </div>

        <div
            class="absolute -z-10 w-120 h-120
                bg-red-900/20 blur-[160px]
                rounded-full -top-40 -left-40">
        </div>

        <div
            class="absolute -z-10 w-88 h-88
                bg-red-800/10 blur-[140px]
                rounded-full bottom-0 right-0">
        </div>

        <div
            class="flex flex-col items-center md:items-start
                text-center md:text-left
                max-w-4xl relative z-10">

            <h3
                class="text-xs sm:text-sm
                   tracking-[0.35em] uppercase
                   text-highlight font-dm-sans">
                Developer & Designer
            </h3>

            <h1
                class="font-league-spartan font-extrabold text-4xl sm:text-5xl md:text-6xl lg:text-7xl text-heading leading-[1.05] uppercase mt-4">
                I Build Fast, Accessible,<br class="hidden sm:block">User-Centered Websites
            </h1>

            <p
                class="text-neutral-500 text-sm sm:text-base md:text-lg mt-5 max-w-2xl leading-relaxed font-dm-sans">
                I help businesses and individuals transform ideas into
                modern, high-performing digital products—quietly lethal,
                scalable, and built to convert.
            </p>

            <div class="flex flex-col sm:flex-row items-center gap-4 mt-8 w-full sm:w-auto">
                <x-button href="#projects" variant="main" fontSize="lg" class="uppercase">
                    See My Work
                </x-button>

                <x-button href="#contact" variant="gray" fontSize="lg" class="uppercase">
                    Get in Touch
                </x-button>
            </div>

            <div
                class="flex flex-wrap justify-center md:justify-start
                    gap-x-6 gap-y-3 mt-10
                    text-[11px] uppercase tracking-widest
                    text-neutral-500 font-dm-sans">
                <span>— Responsive Design</span>
                <span>— Clean Code</span>
                <span>— SEO Ready</span>
                <span>— Modern UI</span>
            </div>
        </div>

        <div
            class="relative w-60 h-80 sm:w-72 sm:h-96
                md:w-104 md:h-136
                mt-12 md:mt-0 z-10">

            <div
                class="absolute inset-0
                    rounded-2xl
                    bg-bg
                    blur-xl opacity-70">
            </div>

            <img src="{{ asset('images/profilepicture.webp') }}"
                alt="Portrait of Indra Mahayana - Web Developer and UI/UX Designer"
                class="relative w-full h-full object-cover rounded-2xl
                    contrast-125 saturate-75 brightness-75
                    dark:shadow-[0_50px_140px_rgba(0,0,0,0.95)]">
        </div>
    </section>

    @include('pages.home.resume')

    @include('pages.home.project')

    @push('scripts')
        <script>
            const openMenu = document.getElementById("open-menu");
            const closeMenu = document.getElementById("close-menu");
            const navLinks = document.getElementById("mobile-navLinks");

            openMenu?.addEventListener("click", () => {
                navLinks.classList.remove("-translate-x-full");
                navLinks.classList.add("translate-x-0");
            });

            closeMenu?.addEventListener("click", () => {
                navLinks.classList.remove("translate-x-0");
                navLinks.classList.add("-translate-x-full");
            });
        </script>
    @endpush

</x-layouts.app>
