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
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round"
                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex items-center justify-between bg-slate-950 rounded-lg p-3">
                <span id="text-copy-{{ $link->id }}"
                    class="text-sm font-medium text-slate-600">{{ route('links.redirect', $link->url_key) }}</span>
                <button id="btn-copy-{{ $link->id }}" class="flex items-center text-sm gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                    Copiar
                </button>
            </div>
            <div class="mt-3 flex items-center justify-between text-sm text-slate-500">
                <span>Total Clicks: 150</span>
                <span>
                    Criado: {{ $link->created_at->format('d/m/Y') }}
                </span>
            </div>
        </div>
    </div>
</div>

@script
    <script>
        document.getElementById("btn-copy-{{ $link->id }}").addEventListener('click', function() {
            const text = document.getElementById('text-copy-{{ $link->id }}').textContent;
            navigator.clipboard.writeText(text)
        });
    </script>
@endscript
