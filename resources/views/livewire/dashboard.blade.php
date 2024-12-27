<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="mx-auto w-full max-w-2xl px-4 sm:px-6">
        <div class="pt-6 md:pt-10">
            <div class="mt-20 flex justify-between items-center">
                <h1 class="text-2xl font-semibold">
                    Teus links
                </h1>
                <button wire:click="$dispatch('show.modal')"
                    class="btn btn-neutral bg-purple-600 hover:bg-purple-600 font-semibold text-slate-100 shadow-2xl shadow-purple-950/50 border-none rounded-full p-4 ocus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-purple-600">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                        <path fillRule="evenodd"
                            d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z"
                            clipRule="evenodd" />
                    </svg>
                    Criar novo link
                </button>
            </div>
            <div class="grid grid-cols-1 gap-6 pb-8 pt-8 md:pb-10 md:pt-12">
                @foreach ($links as $link)
                    <livewire:components.link-card :linkId="$link->id" :key="$link->id" />
                @endforeach
            </div>
        </div>
    </div>
    <livewire:components.new-link-modal :user_id="$user->id" />
</div>

<script>
    document.addEventListener('livewire:initialized', () => {
        Livewire.on('show.modal', (event) => {
            document.getElementById('link_modal').showModal()
        });

        Livewire.on('close.modal', (event) => {
            document.getElementById('link_modal').close()
        });
    });
</script>
