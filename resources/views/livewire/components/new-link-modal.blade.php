<div>
    {{-- Do your work, then step back. --}}
    <dialog wire:ignore.self id="link_modal" class="modal" role="dialog">
        <div class="modal-box w-11/12 max-w-xl bg-slate-950">
            <form method="dialog">
                <button wire:click="$dispatch('close-link-modal')"
                    class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <form wire:submit="store">
                <div class="w-full mt-5">
                    <div class="mb-4">
                        <label class="block text-sm" for="destination_url">
                            URL
                        </label>
                        <input wire:model.live="destination_url"
                            class="input input-bordered block w-full resize-none rounded-lg text-white text-sm border-slate-500/70 bg-slate-900/50 shadow-sm p-3 mt-2 focus:border-purple-500/50 focus:ring-slate-900"
                            id="destination_url" type="url" placeholder="https://example.com" name="destination_url"
                            autofocus="autofocus" autocomplete="destination_url">
                        @error('destination_url')
                            <span class="text-sm text-red-500 mt-2">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm" for="title">
                            Título do link (opcional)
                        </label>
                        <input wire:model="title"
                            class="input input-bordered block w-full resize-none rounded-lg text-white text-sm border-slate-500/70 bg-slate-900/50 shadow-sm p-3 mt-2 focus:border-purple-500/50 focus:ring-slate-900"
                            id="title" type="text" name="title" autofocus="autofocus" autocomplete="title">
                        @error('title')
                            <span class="text-sm text-red-500 mt-2">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="modal-action">
                    <button wire:click="$dispatch('close-link-modal')"
                        class="btn btn-neutral border-1 border-slate-500/70 bg-slate-950 font-semibold text-slate-100 shadow-2xl shadow-purple-950/50 rounded-full px-4 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-purple-600">
                        Cancelar
                    </button>
                    <button type="submit"
                        class="btn btn-neutral bg-purple-600 hover:bg-purple-600 font-semibold text-slate-100 shadow-2xl shadow-purple-950/50 border-none rounded-full px-4 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-purple-600">
                        Criar link
                    </button>
                </div>
            </form>
        </div>
    </dialog>
</div>
