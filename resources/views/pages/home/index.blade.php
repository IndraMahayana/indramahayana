<x-layouts.app>
    <x-slot name="navbar">
        <x-navbar />
    </x-slot>

    <x-slot name="footer">
        <x-footer />
    </x-slot>

    <section id="home"
        class="relative flex flex-col min-h-screen md:flex-row
           items-center justify-center md:justify-between
           px-4 sm:px-6 md:px-16 lg:px-24 xl:px-32
           pt-28 md:pt-0
           overflow-hidden">

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
                   text-red-700/80 font-dm-sans">
                Developer & Designer
            </h3>

            <h1
                class="font-league-spartan font-extrabold
                   text-4xl sm:text-5xl md:text-6xl lg:text-7xl
                   text-neutral-100
                   leading-[1.05] uppercase
                   mt-4
                   drop-shadow-[0_15px_60px_rgba(0,0,0,0.95)]">
                I Build Fast, Accessible,<br class="hidden sm:block">
                User-Centered Websites
            </h1>

            <p
                class="text-neutral-400 text-sm sm:text-base md:text-lg
                  mt-5 max-w-2xl leading-relaxed font-dm-sans">
                I help businesses and individuals transform ideas into
                modern, high-performing digital products—quietly lethal,
                scalable, and built to convert.
            </p>

            <div class="flex flex-col sm:flex-row
                    items-center gap-4 mt-8 w-full sm:w-auto">

                <x-button href="#projects"
                    class="w-full sm:w-auto
                       bg-red-800 hover:bg-red-700
                       text-white uppercase tracking-widest
                       shadow-[0_15px_50px_rgba(139,0,0,0.35)]
                       px-8 py-4">
                    See My Work
                </x-button>

                <x-button href="#contact"
                    class="w-full sm:w-auto
                       border border-neutral-700
                       text-neutral-300
                       hover:bg-neutral-800/60
                       uppercase tracking-widest
                       px-8 py-4">
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
                    bg-black
                    blur-xl opacity-70">
            </div>

            <img src="{{ asset('images/profilepicture.webp') }}"
                alt="Portrait of Indra Mahayana - Web Developer and UI/UX Designer"
                class="relative w-full h-full object-cover rounded-2xl
                    contrast-125 saturate-75 brightness-75
                    shadow-[0_40px_100px_rgba(0,0,0,0.95)]">
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
