{{-- Close your eyes. Count to one. That is how long forever feels. --}}
<form action="{{ route('links.store') }}" method="post">
    @csrf
    <div>
        <input wire:model.live="destination_url" type="url" id="destination_url" name="destination_url"
            required="required" autofocus="autofocus" autocomplete="destination_url"
            placeholder="Comece colando sua URL aqui"
            class="input input-bordered block w-full resize-none rounded-3xl text-white text-sm border-purple-500/70 bg-slate-900/50 shadow-sm p-7 focus-within:border-purple-500 focus-within:text-white focus-within:ring-[5px] focus-within:ring-purple-500/20" />
        @error('destination_url')
            <span class="text-sm text-red-500 mt-2">{{ $message }}</span>
        @enderror
    </div>
    <button type="submit"
        class="btn btn-neutra bg-purple-600 hover:bg-purple-600 font-semibold text-slate-100 shadow-2xl shadow-purple-950/50 border-none block mx-auto mt-4 w-full max-w-xs rounded-full p-4 ocus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-purple-600">
        <span>Gerar link</span>
    </button>
</form>
