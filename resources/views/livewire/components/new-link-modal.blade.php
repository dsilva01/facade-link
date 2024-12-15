<div>
    {{-- Do your work, then step back. --}}
    <dialog wire:ignore.self id="new_link" class="modal" role="dialog">
        <div class="modal-box w-11/12 max-w-xl bg-slate-950">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <div class="w-full mt-5">
                <form action="" method="post">
                    {{-- <h3 class="text-lg font-bold">Criar Novo Link</h3> --}}
                    <div class="mb-4">
                        <label class="block text-sm text-slate-500" for="name">
                            URL
                        </label>
                        <input
                            class="input input-bordered block w-full resize-none rounded-xl text-white text-sm border-slate-500/70 bg-slate-900/50 shadow-sm p-3 mt-2 focus:border-purple-500/50 focus:ring-slate-900"
                            id="url" type="text" placeholder="https://example.com" name="url"
                            required="required" autofocus="autofocus" autocomplete="url">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm text-slate-500" for="name">
                            Título do link (opcional)
                        </label>
                        <input
                            class="input input-bordered block w-full resize-none rounded-xl text-white text-sm border-slate-500/70 bg-slate-900/50 shadow-sm p-3 mt-2 focus:border-purple-500/50 focus:ring-slate-900"
                            id="title" type="text" name="title" autofocus="autofocus" autocomplete="title">
                    </div>
                </form>
            </div>
            <div class="modal-action">
                <button
                    class="btn btn-neutral border-1 border-slate-500/70 bg-slate-950 font-semibold text-slate-100 shadow-2xl shadow-purple-950/50 rounded-xl px-4 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-purple-600">
                    Cancelar
                </button>
                <button
                    class="btn btn-neutral bg-purple-600 hover:bg-purple-600 font-semibold text-slate-100 shadow-2xl shadow-purple-950/50 border-none rounded-xl px-4 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-purple-600">
                    Criar link
                </button>
            </div>
        </div>
    </dialog>
</div>
