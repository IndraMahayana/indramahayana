<nav
    class="fixed top-0 w-full z-50 backdrop-blur-md bg-white/80 dark:bg-[#0E0A0A]/85 border-b border-red-600 dark:border-red-900/30
    shadow-[0_10px_30px_rgba(0,0,0,0.08)]
    dark:shadow-[0_0_40px_rgba(120,0,0,0.08)]
    px-6 md:px-16 lg:px-24 xl:px-32 h-20
    flex items-center justify-between
    text-slate-700 dark:text-neutral-200">

    <a href="{{ config('APP_URL') }}"
        class="font-dm-sans text-md md:text-xl
        tracking-[0.25em] uppercase
        text-slate-900 dark:text-neutral-100
        hover:text-sky-600 dark:hover:text-red-700
        transition">
        Indra Mahayana
    </a>

    <ul class="hidden md:flex items-center gap-12
        uppercase tracking-[0.2em] text-xs">

        @php
            $current = Route::currentRouteName();
        @endphp

        @foreach ([
        'home' => 'Home',
        'resume' => "It's Me",
        'projects' => 'Projects',
        'contact' => 'Contact',
    ] as $route => $label)
            <li class="relative group">
                <a href="{{ route($route) }}"
                    class="transition
                {{ $current === $route ? 'text-sky-600 dark:text-red-700' : 'hover:text-sky-600 dark:hover:text-red-700' }}">
                    {{ $label }}
                </a>

                <span
                    class="absolute left-0 -bottom-2 h-0.5
                bg-sky-600 dark:bg-red-700
                transition-all duration-300
                {{ $current === $route ? 'w-full' : 'w-0 group-hover:w-full' }}">
                </span>
            </li>
        @endforeach
    </ul>

    <div class="flex flex-row gap-4">
        <a href="{{ route('contact') }}"
            class="hidden md:inline-flex
        items-center justify-center
        h-10 px-6
        text-xs uppercase tracking-[0.2em] font-semibold
        text-slate-900 dark:text-neutral-100
        border border-slate-300 dark:border-red-900/50
        bg-sky-100 dark:bg-red-900/10
        hover:bg-sky-300
        dark:hover:bg-red-900/40
        transition">
            Send Signal
        </a>

        <button id="theme-toggle"
            class="ml-6 relative w-18 md:w-20 h-8 md:h-10
    rounded-full
    bg-slate-200 dark:bg-neutral-800
    border border-slate-300 dark:border-neutral-700
    transition flex items-center px-1">

            <span id="theme-thumb"
                class="theme-thumb absolute left-1 w-6 md:w-8 h-6 md:h-8 rounded-full bg-white dark:bg-black shadow-md flex items-center justify-center">

                <span id="theme-icon"></span>
            </span>

        </button>

    </div>

    <button aria-label="menu"
        class="menu-btn md:hidden
        flex flex-col gap-1.5
        active:scale-95 transition">

        <span class="block w-6 h-0.5 bg-slate-700 dark:bg-neutral-200"></span>
        <span class="block w-6 h-0.5 bg-slate-700 dark:bg-neutral-200"></span>
        <span class="block w-6 h-0.5 bg-slate-700 dark:bg-neutral-200"></span>
    </button>

    <div class="scan-line"></div>
</nav>

<div
    class="mobile-menu fixed inset-0 z-999 hidden flex-col bg-white dark:bg-[#0A0A0A] backdrop-blur-xl items-center pt-28 gap-10 text-slate-800 dark:text-neutral-200 uppercase tracking-[0.08em] text-lg opacity-0 translate-y-6 transition-all duration-500 ease-out">

    <button
        class="close-menu absolute top-8 right-8 text-2xl
        text-slate-500 dark:text-neutral-400
        hover:text-sky-600 dark:hover:text-red-500
        transition">
        ✕
    </button>

    <div class="w-full max-w-sm text-center space-y-8">

        <a href="{{ route('home') }}" class="block hover:text-sky-500 dark:hover:text-red-400 transition">
            Home
        </a>

        <a href="{{ route('resume') }}" class="block hover:text-sky-500 dark:hover:text-red-400 transition">
            It's Me
        </a>

        <a href="{{ route('projects') }}" class="block hover:text-sky-500 dark:hover:text-red-400 transition">
            Projects
        </a>

        <a href="{{ route('contact') }}" class="block hover:text-sky-500 dark:hover:text-red-400 transition">
            Contact
        </a>

        <a href="#contact"
            class="inline-block mt-10 px-10 py-4
            border border-slate-300/60 dark:border-red-800
            bg-slate-100/40 dark:bg-red-950/30
            backdrop-blur-md
            text-sm font-semibold
            hover:scale-105
            transition-all duration-300">
            Send Signal
        </a>
    </div>
</div>

<script>
    const menuBtn = document.querySelector('.menu-btn');
    const mobileMenu = document.querySelector('.mobile-menu');
    const closeBtn = document.querySelector('.close-menu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.remove('hidden');
    });

    closeBtn.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
    });
</script>
