<footer
    class="relative overflow-hidden
           border-t border-neutral-800
           px-6 md:px-16 lg:px-24 xl:px-32
           pt-20 pb-10 text-neutral-400">

    <div class="absolute inset-0 bg-[url('/images/noise.png')]
                opacity-[0.04] pointer-events-none"></div>

    <div
        class="absolute -top-40 right-0
                w-104 h-104
                bg-red-900/10 blur-[160px] rounded-full">
    </div>

    <div class="relative z-10 max-w-7xl mx-auto">

        <div class="grid grid-cols-1 md:grid-cols-4 gap-14">

            <div class="md:col-span-2 space-y-6">
                <h3
                    class="font-league-spartan font-bold
                           uppercase tracking-widest
                           text-neutral-100 text-sm">
                    Indra Mahayana
                </h3>

                <p class="max-w-md text-sm leading-relaxed text-neutral-500">
                    Designing interfaces and building systems with clarity,
                    structure, and restraint. Less noise. More meaning.
                </p>

                <div class="flex items-center gap-5 text-neutral-500">
                    <a href="#" class="hover:text-red-700 transition">GitHub</a>
                    <span class="opacity-30">/</span>
                    <a href="#" class="hover:text-red-700 transition">LinkedIn</a>
                    <span class="opacity-30">/</span>
                    <a href="#" class="hover:text-red-700 transition">Instagram</a>
                </div>
            </div>

            <div>
                <h4 class="text-xs uppercase tracking-widest
                           text-neutral-300 mb-6">
                    Navigate
                </h4>
                <ul class="space-y-4 text-sm">
                    <li><a href="#home" class="hover:text-red-700 transition">Home</a></li>
                    <li><a href="#services" class="hover:text-red-700 transition">Services</a></li>
                    <li><a href="#projects" class="hover:text-red-700 transition">Projects</a></li>
                    <li><a href="#contact" class="hover:text-red-700 transition">Contact</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-xs uppercase tracking-widest
                           text-neutral-300 mb-6">
                    Signal
                </h4>

                <p class="text-sm text-neutral-500 leading-relaxed">
                    Open for serious collaboration and meaningful work.
                </p>

                <a href="mailto:indramahayana3@gmail.com"
                    class="inline-block mt-4
                          text-sm font-semibold
                          uppercase tracking-widest
                          text-red-700 hover:text-red-600 transition">
                    Send Signal
                </a>
            </div>
        </div>

        <div class="w-full h-px bg-neutral-800 my-12"></div>

        <div
            class="flex flex-col md:flex-row
                   items-center justify-between
                   gap-4 text-xs uppercase tracking-widest
                   text-neutral-500">

            <span>
                © {{ date('Y') }} Indra Mahayana
            </span>

            <span id="easter-egg-trigger" class="relative cursor-default text-neutral-600">
                The city never sleeps.

                <span id="easter-egg"
                    class="absolute left-1/2 -translate-x-1/2
               -top-10
               text-[10px] uppercase tracking-[0.3em]
               text-red-700
               opacity-0 blur-sm
               transition-all duration-700
               pointer-events-none">
                    I am watching.
                </span>
            </span>
        </div>
    </div>
</footer>

<script>
    const trigger = document.getElementById('easter-egg-trigger');
    const egg = document.getElementById('easter-egg');

    let hoverTimer;

    if (trigger && egg) {
        trigger.addEventListener('mouseenter', () => {
            hoverTimer = setTimeout(() => {
                egg.classList.remove('opacity-0', 'blur-sm');
                egg.classList.add('opacity-100', 'blur-0');
            }, 1500);
        });

        trigger.addEventListener('mouseleave', () => {
            clearTimeout(hoverTimer);
            egg.classList.add('opacity-0', 'blur-sm');
            egg.classList.remove('opacity-100', 'blur-0');
        });
    }
</script>
