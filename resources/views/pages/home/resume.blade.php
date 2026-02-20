<section id="resume" class="relative overflow-hidden py-28">
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 lg:gap-20 items-center">
            <div class="relative flex justify-center lg:justify-start">
                <div
                    class="absolute inset-0
                    rounded-3xl
                    bg-red-200/40 blur-2xl
                    dark:bg-black/70">
                </div>

                <img src="{{ asset('images/resume2.jpeg') }}" alt="Indra Mahayana"
                    class="relative
                    w-[320px] sm:w-90 lg:w-105
                    h-auto
                    object-cover object-top
                    rounded-3xl
                    contrast-110 saturate-95 brightness-100
                    dark:contrast-125 dark:saturate-75 dark:brightness-75
                    shadow-[0_25px_70px_rgba(0,0,0,0.25)]
                    dark:shadow-[0_50px_140px_rgba(0,0,0,0.95)]">
            </div>
            
            <div class="flex flex-col space-y-4">

                <div>
                    <h3
                        class="uppercase tracking-[0.35em]
                        text-xs
                        text-highlight mb-4">
                        About Me
                    </h3>

                    <h2
                        class="text-3xl sm:text-4xl lg:text-5xl
                        font-extrabold uppercase
                        text-heading
                        leading-[1.15] max-w-xl">
                        Designing and building web products
                        from interface to logic
                    </h2>

                    <div class="w-44 h-0.5
                        bg-sky-500 dark:bg-red-800 mt-6">
                    </div>
                </div>

                <p
                    class="text-lg font-medium
                    text-slate-600 dark:text-neutral-400
                    max-w-xl">
                    I focus on how interfaces feel and how systems behave
                    under real pressure.
                </p>

                <div
                    class="space-y-6
                    text-slate-500 dark:text-neutral-500
                    leading-relaxed max-w-xl">

                    <p>
                        I work across the full stack, where interface,
                        logic, and data converge. I build clear user
                        interfaces while engineering back-end systems
                        that remain stable as complexity grows.
                    </p>

                    <p>
                        Structure and maintainability matter.
                        Code and design should survive scale
                        without collapsing under their own weight.
                    </p>
                </div>

                <p class="text-lg font-medium
                    text-slate-600 dark:text-neutral-400 max-w-xl">
                    A good product should look deliberate,
                    operate reliably, and make sense end to end.
                </p>

                <div class="grid grid-cols-2 gap-10 max-w-md pt-2">

                    <div>
                        <h4
                            class="text-5xl font-extrabold
                            text-slate-900 dark:text-neutral-100">
                            5+
                        </h4>
                        <p
                            class="text-xs uppercase tracking-widest
                            text-slate-500 dark:text-neutral-500 mt-2">
                            Years Experience
                        </p>
                    </div>

                    <div>
                        <h4
                            class="text-5xl font-extrabold
                            text-slate-900 dark:text-neutral-100">
                            19+
                        </h4>
                        <p
                            class="text-xs uppercase tracking-widest
                            text-slate-500 dark:text-neutral-500 mt-2">
                            Projects
                        </p>
                    </div>

                </div>

                <div class="flex flex-wrap gap-4 pt-4">

                    <x-button href="#" variant="main" target="_blank" fontSize="lg"
                        class="uppercase tracking-widest"> 
                        Download Resume
                    </x-button>

                    <x-button href="#projects" variant="gray" class="uppercase" fontSize="lg">
                        View Projects
                    </x-button>
                </div>
            </div>
        </div>
    </div>
</section>
