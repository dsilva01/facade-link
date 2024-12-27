<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="card shadow-xl bg-slate-900">
        <div class="card-body">
            <div class="flex justify-between items-center mb-4">
                <div>
                    <h2 class="font-semibold md:text-lg">{{ $link->title }}</h2>
                    <p class="text-sm text-slate-500">{{ $link->destination_url }}</p>
                </div>
                <div class="flex items-center gap-2">
                    <a href="#">
                        <x-icons.chart-square class="h-6 w-6" />
                    </a>
                    <button x-on:click="navigator.share({ url: '{{ route('links.redirect', $link->url_key) }}' })">
                        <x-icons.share class="h-6 w-6" />
                    </button>
                    <button>
                        <x-icons.trash class="h-6 w-6" />
                    </button>
                </div>
            </div>
            <div x-data="{ textToCopy: '{{ route('links.redirect', $link->url_key) }}', copied: false }" class="flex items-center justify-between bg-slate-950 rounded-lg p-3">
                <span id="text-copy-{{ $link->id }}"
                    class="text-sm font-medium text-slate-600">{{ route('links.redirect', $link->url_key) }}</span>
                <button class="flex items-center text-sm"
                    x-on:click="navigator.clipboard.writeText(textToCopy).then(() => { 
                        copied = true; 
                        setTimeout(() => copied = false, 1500); 
                    })">

                    <span x-show="!copied" class="flex items-center gap-1">
                        <x-icons.copy class="h-6 w-6" />
                        Copiar
                    </span>
                    <span x-show="copied" class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                        Copiado!
                    </span>
                </button>
            </div>
            <div class="mt-3 flex items-center justify-between text-sm text-slate-500">
                <span>Total Clicks: {{ $link->link_visits_count }}</span>
                <span>
                    Criado: {{ $link->created_at->format('d/m/Y') }}
                </span>
            </div>
        </div>
    </div>
</div>
