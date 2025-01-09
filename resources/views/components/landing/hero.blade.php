<div class="mx-auto animate-fade-up pt-12 animate-delay-[200ms] md:pt-16">
    <div class="mx-auto pb-6 text-center md:pb-12">
        <div class="mb-12 md:mb-16 z-10 w-72 rounded-full mx-auto">
            <a href="{{ route('landing') }}" wire.navigation>
                <img src="{{ asset('img/logo.png') }}" alt="Logo" />
            </a>
        </div>
        <h1 class="text-5xl font-semibold ">Transforme cliques em dados valiosos</h1>
        <p class="py-6 font-mona text-xl font-light">
            Crie links encurtados e rastreáveis ​​em segundos. Perfeito para mídias sociais,
            campanhas de marketing e rastreamento de sua influência.
        </p>
    </div>
    <div>
        <livewire:components.link-shortener />
    </div>
</div>
