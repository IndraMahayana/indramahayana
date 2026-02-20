<x-layouts.app>

    <x-slot name="navbar">
        <x-navbar />
    </x-slot>

    <section id="contact"
        class="relative scroll-mt-28 overflow-hidden
        py-28 px-4 sm:px-6 md:px-16 lg:px-24 xl:px-32
        bg-white dark:bg-black">

        <div
            class="absolute inset-0 bg-[url('/images/noise.png')]
            opacity-[0.03] dark:opacity-[0.05] pointer-events-none">
        </div>

        <div
            class="absolute -top-40 -left-40 w-md h-112
            bg-blue-200/40 dark:bg-red-900/15
            blur-[160px] rounded-full">
        </div>

        <div
            class="absolute bottom-0 right-0 w-[24rem] h-96
            bg-slate-200/40 dark:bg-red-800/10
            blur-[140px] rounded-full">
        </div>

        <div class="relative z-10 max-w-7xl mx-auto
            flex flex-col md:flex-row gap-16">

            <div class="md:w-1/2 flex flex-col justify-between gap-12">

                <div>
                    <h2
                        class="text-3xl sm:text-5xl md:text-6xl
                        font-extrabold uppercase tracking-widest
                        text-neutral-900 dark:text-neutral-100
                        leading-tight">
                        Send the Signal
                    </h2>

                    <p
                        class="mt-6 max-w-xl
                        text-neutral-600 dark:text-neutral-400
                        text-base sm:text-lg leading-relaxed">
                        If you have a project, an idea, or a problem that needs structure
                        and clarity — leave a message. I’ll find it.
                    </p>

                    <div class="w-24 h-0.5 mt-8
                        bg-blue-600 dark:bg-red-800">
                    </div>
                </div>

                <div class="hidden md:grid grid-cols-2 gap-12">

                    <div>
                        <h4
                            class="uppercase tracking-widest text-sm
                            text-neutral-700 dark:text-neutral-300 mb-4">
                            Resources
                        </h4>

                        <ul class="space-y-3 text-neutral-500 text-sm">
                            <li><a href="#"
                                    class="hover:text-blue-600 dark:hover:text-red-700 transition">React</a></li>
                            <li><a href="#"
                                    class="hover:text-blue-600 dark:hover:text-red-700 transition">Tailwind CSS</a></li>
                            <li><a href="#"
                                    class="hover:text-blue-600 dark:hover:text-red-700 transition">Laravel</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4
                            class="uppercase tracking-widest text-sm
                            text-neutral-700 dark:text-neutral-300 mb-4">
                            Follow
                        </h4>

                        <ul class="space-y-3 text-neutral-500 text-sm">
                            <li><a href="#"
                                    class="hover:text-blue-600 dark:hover:text-red-700 transition">Instagram</a></li>
                            <li><a href="#"
                                    class="hover:text-blue-600 dark:hover:text-red-700 transition">LinkedIn</a></li>
                            <li><a href="#"
                                    class="hover:text-blue-600 dark:hover:text-red-700 transition">GitHub</a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <form action="{{ route('contact.send') }}" method="POST"
                class="md:w-1/2
                bg-neutral-100 dark:bg-neutral-900
                border border-neutral-300 dark:border-neutral-800
                rounded-2xl
                p-8 space-y-6
                shadow-lg dark:shadow-2xl">

                @csrf

                <input type="hidden" name="time" value="{{ now() }}">
                <input type="hidden" name="title" value="Signal from portfolio website">

                <div>
                    <label
                        class="block text-xs uppercase tracking-widest
                        text-neutral-600 dark:text-neutral-400 mb-2">
                        Name
                    </label>

                    <input type="text" name="name" required
                        class="w-full
                        bg-white dark:bg-black/60
                        border border-neutral-300 dark:border-neutral-700
                        text-neutral-900 dark:text-neutral-200
                        px-4 py-3 rounded-lg
                        focus:outline-none
                        focus:border-blue-600 dark:focus:border-red-800">
                </div>

                <div>
                    <label
                        class="block text-xs uppercase tracking-widest
                        text-neutral-600 dark:text-neutral-400 mb-2">
                        Email
                    </label>

                    <input type="email" name="email" required
                        class="w-full
                        bg-white dark:bg-black/60
                        border border-neutral-300 dark:border-neutral-700
                        text-neutral-900 dark:text-neutral-200
                        px-4 py-3 rounded-lg
                        focus:outline-none
                        focus:border-blue-600 dark:focus:border-red-800">
                </div>

                <div>
                    <label
                        class="block text-xs uppercase tracking-widest
                        text-neutral-600 dark:text-neutral-400 mb-2">
                        Message
                    </label>

                    <textarea name="message" rows="5" required
                        class="w-full
                        bg-white dark:bg-black/60
                        border border-neutral-300 dark:border-neutral-700
                        text-neutral-900 dark:text-neutral-200
                        px-4 py-3 rounded-lg
                        focus:outline-none
                        focus:border-blue-600 dark:focus:border-red-800"></textarea>
                </div>

                <button type="submit"
                    class="w-full mt-4
                    bg-blue-600 hover:bg-blue-700
                    dark:bg-red-900 dark:hover:bg-red-800
                    text-white
                    uppercase tracking-widest text-sm font-semibold
                    py-4 rounded-lg transition">
                    Send Signal
                </button>
            </form>
        </div>

        <div class="relative z-10 mt-24 max-w-7xl mx-auto">
            <div
                class="h-64 md:h-80 rounded-2xl overflow-hidden
                border border-neutral-300 dark:border-neutral-800
                grayscale contrast-125 brightness-90 dark:brightness-75">

                <iframe title="Map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126761.187169715!2d114.8378932!3d-8.5454461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23b965b12b495%3A0x3030bfbca7cbee0!2sKabupaten%20Badung%2C%20Bali%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1633071234567!5m2!1sen!2sus"
                    class="w-full h-full border-none" loading="lazy">
                </iframe>
            </div>
        </div>

        <div
            class="relative z-10 mt-16
            flex flex-col md:flex-row
            justify-between items-center
            text-xs uppercase tracking-widest
            text-neutral-500 gap-4">

            <span>© 2025 Indra Mahayana</span>
            <span>The city never sleeps.</span>
        </div>

    </section>

</x-layouts.app>
