<section id="projects" class="relative overflow-hidden py-28
           px-4 sm:px-6 md:px-16 lg:px-24 xl:px-32">

    <div class="absolute inset-0 bg-[url('/images/noise.png')]
                opacity-[0.045] pointer-events-none">
    </div>

    <div class="absolute -top-40 -right-40 w-md h-112
                bg-red-900/15 blur-[160px] rounded-full">
    </div>

    <div class="absolute bottom-0 left-0 w-[24rem] h-96
                bg-red-800/10 blur-[140px] rounded-full">
    </div>

    <div class="relative z-10 text-center max-w-3xl mx-auto">
        <h2
            class="text-4xl sm:text-5xl
                   font-extrabold uppercase
                   tracking-widest
                   text-neutral-100
                   drop-shadow-[0_10px_40px_rgba(0,0,0,0.9)]">
            Case Files
        </h2>

        <p class="mt-6 text-neutral-400 text-base sm:text-lg leading-relaxed">
            Selected projects where interface and back-end logic
            were engineered together — clarity under pressure,
            performance in the dark, and code that survives scale.
        </p>

        <div class="w-24 h-0.5 bg-red-800 mx-auto mt-8"></div>
    </div>

    <div class="relative z-10 mt-20
                grid grid-cols-1
                gap-16">

        <x-case-file :index="1" status="ACTIVE" title="Gemilang Meubel Platform"
            description="A full-stack commerce system engineered with modular Laravel architecture and performance-focused front-end rendering."
            image="https://images.unsplash.com/photo-1506765515384-028b60a970df?q=80&w=1000" url="#"
            :stacks="['Full Stack', 'Laravel', 'Vue']" />

        <x-case-file :index="2" status="ACTIVE" title="Gemilang Meubel Platform"
            description="A full-stack commerce system engineered with modular Laravel architecture and performance-focused front-end rendering."
            image="https://images.unsplash.com/photo-1506765515384-028b60a970df?q=80&w=1000" url="#"
            :stacks="['Full Stack', 'Laravel', 'Vue']" />
    </div>

    <div class="relative z-10 text-center mt-20">
        <a href="#"
            class="inline-block
                  uppercase tracking-widest
                  text-neutral-400 text-sm
                  hover:text-red-700
                  transition">
            View All Case Files →
        </a>
    </div>
</section>
