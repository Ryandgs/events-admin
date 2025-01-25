<section class="md:h-[600px] w-full flex justify-center items-center flex-col relative py-12">
    <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/90 to-black to-95%"></div>
    <div class="h-full text-center container mx-auto relative z-10 flex flex-col gap-y-4 justify-center">
        <x-card class="text-left grid md:grid-cols-2 p-0">
            <div class="p-8">
                <h1 class="text-text-high text-3xl font-bold font-secondary first-letter:uppercase mb-5">Entrar em contato</h1>
                <p class="text-text-medium font-primary font-semibold leading-5 mb-5">Ut harum quia doloremque ex in earum. Ad et voluptatibus consequatur. Sequi non omnis nulla numquam qui. Sapiente id quae qui sit voluptatem quis reprehenderit. Nihil aut voluptates nesciunt beatae.</p>
                <form action="/" method="POST">
                    @csrf
                    <x-landing.input
                        name="email"
                        type="email"
                        label="Email Address"
                        placeholder="Enter your email"
                        required />
                    <x-landing.input
                        name="email"
                        type="email"
                        label="Email Address"
                        placeholder="Enter your email"
                        required />
                    <x-landing.input
                        name="email"
                        type="email"
                        label="Email Address"
                        placeholder="Enter your email"
                        required />

                    <div class="w-full flex justify-end mt-8">
                        <button class="bg-primary-500 text-white px-4 py-2 rounded-sm">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="bg-[#7B5AFF] p-8">
                <h1 class="text-text-high text-3xl font-bold font-secondary first-letter:uppercase mb-5">FAQ</h1>
                <p class="text-text-high font-primary font-semibold leading-5">Ut harum quia doloremque ex in earum. Ad et voluptatibus consequatur. Sequi non omnis nulla numquam qui. Sapiente id quae qui sit voluptatem quis reprehenderit. Nihil aut voluptates nesciunt beatae.</p>
            </div>
        </x-card>
</section>
