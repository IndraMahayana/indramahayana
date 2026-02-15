<nav
    class="fixed top-0 w-full z-50
           backdrop-blur-md
           bg-[#0E0A0A]/85
           border-b border-red-900/30
           shadow-[0_0_40px_rgba(120,0,0,0.08)]
           px-6 md:px-16 lg:px-24 xl:px-32
           h-20
           flex items-center justify-between
           text-neutral-200">

    <a href="{{ config('APP_URL') }}"
        class="font-dm-sans text-lg md:text-xl
          tracking-[0.25em]
          uppercase
          text-neutral-100
          hover:text-red-700
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
                    class="nav-link transition {{ $current === $route ? 'text-red-700' : 'hover:text-red-700' }}">
                    {{ $label }}
                </a>

                <span
                    class="absolute left-0 -bottom-2 h-0.5 bg-red-700
               transition-all duration-300
               {{ $current === $route ? 'w-full' : 'w-0 group-hover:w-full' }}">
                </span>
            </li>
        @endforeach
    </ul>


    <a href="{{ route('contact') }}"
        class="hidden md:inline-flex
          items-center justify-center
          h-10 px-6
          text-xs uppercase tracking-[0.2em] font-semibold
          text-neutral-100
          border border-red-900/50
          bg-red-900/10
          hover:bg-red-900/40
          hover:border-red-700
          transition
          shadow-[0_0_15px_rgba(120,0,0,0.2)]">
        Send Signal
    </a>

    <button id="theme-toggle"
        class="ml-6
           h-10 px-4
           text-xs uppercase tracking-[0.2em]
           border border-neutral-700
           text-neutral-200
           hover:bg-neutral-800
           transition">
        Toggle Theme
    </button>


    <button aria-label="menu"
        class="menu-btn md:hidden
               flex flex-col gap-1.5
               active:scale-95 transition">

        <span class="block w-6 h-0.5 bg-neutral-200"></span>
        <span class="block w-6 h-0.5 bg-neutral-200"></span>
        <span class="block w-6 h-0.5 bg-neutral-200"></span>
    </button>

    <div
        class="mobile-menu fixed inset-0
           bg-[#0A0A0A]/95
           backdrop-blur-xl
           hidden flex-col
           justify-center items-center
           gap-10
           text-neutral-200
           uppercase tracking-[0.2em] text-lg">


        <a href="{{ route('home') }}" class="hover:text-red-700 transition">Home</a>
        <a href="{{ route('resume') }}" class="hover:text-red-700 transition">It's Me</a>
        <a href="{{ route('projects') }}" class="hover:text-red-700 transition">Projects</a>
        <a href="{{ route('contact') }}" class="hover:text-red-700 transition">Contact</a>

        <a href="#contact"
            class="mt-10
                  px-10 py-4
                  border border-red-900
                  text-sm font-semibold
                  hover:bg-red-900/40
                  transition">
            Send Signal
        </a>

        <button
            class="close-menu absolute top-6 right-6
                   text-neutral-400 hover:text-red-700 transition">
            ✕
        </button>
    </div>

    <div class="scan-line"></div>
</nav>

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

    // toggle theme
    const html = document.documentElement;
    const toggleBtn = document.getElementById("theme-toggle");

    if (localStorage.theme === "light") {
        html.classList.remove("dark");
    } else {
        html.classList.add("dark");
    }

    toggleBtn.addEventListener("click", () => {
        html.classList.toggle("dark");

        if (html.classList.contains("dark")) {
            localStorage.theme = "dark";
        } else {
            localStorage.theme = "light";
        }
    });
</script>
