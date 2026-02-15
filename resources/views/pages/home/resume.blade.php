<section id="resume" class="relative overflow-hidden py-24">

    <div class="absolute inset-0 bg-[url('/images/noise.png')]
                opacity-[0.045] pointer-events-none">
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
            <div class="relative">
                <div
                    class="absolute inset-0
                            rounded-3xl bg-black
                            blur-xl opacity-80">
                </div>

                <div
                    class="relative p-0.5
                            rounded-3xl
                            bg-linear-to-br from-red-900 via-neutral-800 to-black
                            shadow-[0_40px_120px_rgba(0,0,0,0.95)]
                            w-fit">

                    <img src="{{ asset('images/resume2.jpeg') }}" alt="Indra Mahayana"
                        class="w-104 h-136
                               object-cover object-top
                               rounded-3xl
                               contrast-125 saturate-75 brightness-75">
                </div>
            </div>

            <div class="flex flex-col space-y-10 text-neutral-300">

                <div>
                    <h3 class="uppercase tracking-[0.35em]
                               text-xs text-red-700 mb-3">
                        About Me
                    </h3>

                    <h2
                        class="text-3xl sm:text-4xl
                               font-extrabold uppercase
                               text-neutral-100
                               leading-tight max-w-xl">
                        Designing and building web products
                        from interface to logic
                    </h2>

                    <div class="w-24 h-0.5 bg-red-800 mt-5"></div>
                </div>

                <p class="text-lg font-medium
                          text-neutral-400 max-w-xl">
                    I focus on how interfaces feel and how systems
                    behave under real pressure.
                </p>

                <div
                    class="space-y-5
                            text-neutral-500
                            leading-relaxed max-w-xl">

                    <p>
                        I work across the full stack, where interface,
                        logic, and data converge. I build clear user
                        interfaces while engineering back-end systems
                        that stay stable in the dark.
                    </p>

                    <p>
                        Structure and maintainability matter.
                        Code and design should survive growth
                        without collapsing under their own weight.
                    </p>
                </div>

                <p class="text-lg font-medium
                          text-neutral-400 max-w-xl">
                    A good product should look deliberate,
                    operate reliably, and make sense end to end.
                </p>

                <div class="grid grid-cols-2 gap-8 max-w-sm pt-4">

                    <div>
                        <h4 class="text-4xl font-extrabold
                                   text-neutral-100">
                            5+
                        </h4>
                        <p
                            class="text-xs uppercase tracking-widest
                                  text-neutral-500 mt-1">
                            Years Experience
                        </p>
                    </div>

                    <div>
                        <h4 class="text-4xl font-extrabold
                                   text-neutral-100">
                            19+
                        </h4>
                        <p
                            class="text-xs uppercase tracking-widest
                                  text-neutral-500 mt-1">
                            Projects
                        </p>
                    </div>
                </div>

                <div class="flex flex-wrap gap-4 pt-6">

                    <x-button href="#"
                        class="bg-red-800 hover:bg-red-700
                               text-white uppercase tracking-widest
                               px-8 py-4
                               shadow-[0_15px_50px_rgba(139,0,0,0.35)]">
                        Download Resume
                    </x-button>

                    <x-button href="#projects"
                        class="border border-neutral-700
                               text-neutral-300
                               hover:bg-neutral-800/60
                               uppercase tracking-widest
                               px-8 py-4">
                        View Projects
                    </x-button>

                </div>

            </div>
        </div>
    </div>
</section>
