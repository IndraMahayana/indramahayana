<x-layouts.app class="px-4 sm:px-6 md:px-16 lg:px-24 xl:px-32 py-28 md:py-32 overflow-hidden">

    <x-slot name="navbar">
        <x-navbar />
    </x-slot>

    <section class="relative">
        <div
            class="absolute inset-0 bg-[url('/images/noise.png')]
            opacity-[0.03] dark:opacity-[0.05] pointer-events-none">
        </div>

        <div
            class="absolute -top-40 -left-40 w-md h-112 bg-highlight/20
            blur-[160px] rounded-full">
        </div>

        <div
            class="absolute bottom-0 right-0 w-[24rem] h-96 bg-highlight/20
            blur-[140px] rounded-full">
        </div>

        <div class="relative z-10 mx-auto
            flex flex-col md:flex-row gap-16">
            <div class="md:w-1/2 flex flex-col justify-between gap-12">
                <div>
                    <h2
                        class="text-3xl sm:text-5xl md:text-6xl
                        font-extrabold uppercase tracking-widest text-heading font-league-spartan
                        leading-tight">
                        Send the Signal
                    </h2>

                    <p
                        class="mt-6 max-w-xl text-heading font-dm-sans
                        text-base sm:text-lg leading-relaxed">
                        If you have a project, an idea, or a problem that needs structure
                        and clarity — leave a message. I’ll find it.
                    </p>

                    <div class="w-24 h-0.5 mt-8 bg-highlight">
                    </div>
                </div>

                <div class="hidden md:grid grid-cols-2 gap-12">
                    <div>
                        <h4
                            class="uppercase tracking-widest text-sm text-heading">
                            Resources
                        </h4>

                        <ul class="space-y-3 text-desc text-sm">
                            <li><a href="#"
                                    class="hover:text-highlight transition">React</a></li>
                            <li><a href="#"
                                    class="hover:text-highlight transition">Tailwind CSS</a></li>
                            <li><a href="#"
                                    class="hover:text-highlight transition">Laravel</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4
                            class="uppercase tracking-widest text-sm text-heading mb-4">
                            Follow
                        </h4>

                        <ul class="space-y-3 text-desc text-sm">
                            <li><a href="#"
                                    class="hover:text-highlight transition">Instagram</a></li>
                            <li><a href="#"
                                    class="hover:text-highlight transition">LinkedIn</a></li>
                            <li><a href="#"
                                    class="hover:text-highlight transition">GitHub</a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <form action="{{ route('contact.send') }}" method="POST"
                class="md:w-1/2 bg-neutral-100 dark:bg-neutral-900 border border-neutral-300 dark:border-neutral-800
                rounded-2xl p-8 space-y-6 shadow-lg dark:shadow-2xl">

                @csrf

                <input type="hidden" name="time" value="{{ now() }}">
                <input type="hidden" name="title" value="Signal from portfolio website">

                <div>
                    <label
                        class="block text-xs uppercase tracking-widest text-desc mb-2">
                        Name
                    </label>

                    <input type="text" name="name" required
                        class="w-full bg-bg border border-desc/10 text-heading
                        px-4 py-3 rounded-lg focus:outline-none focus:text-highlight">
                </div>

                <div>
                    <label
                        class="block text-xs uppercase tracking-widest text-desc mb-2">
                        Email
                    </label>

                    <input type="email" name="email" required
                        class="w-full bg-bg border border-desc/10 text-heading
                        px-4 py-3 rounded-lg focus:outline-none focus:text-highlight">
                </div>

                <div>
                    <label
                        class="block text-xs uppercase tracking-widest text-desc mb-2">
                        Message
                    </label>

                    <textarea name="message" rows="5" required
                        class="w-full bg-bg border border-desc/10 text-heading
                        px-4 py-3 rounded-lg focus:outline-none focus:text-highlight"></textarea>
                </div>

                <button type="submit"
                    class="w-full mt-4
                    bg-highlight hover:bg-sky-600 dark:hover:bg-red-800
                    text-white
                    uppercase tracking-widest text-sm font-semibold
                    py-4 rounded-lg transition">
                    Send Signal
                </button>
            </form>
        </div>

        <div class="relative z-10 mt-24 mx-auto">
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
            text-xs uppercase tracking-widest text-desc gap-4">

            <span>© 2025 Indra Mahayana</span>
            <span>The city never sleeps.</span>
        </div>

    </section>

</x-layouts.app>
