<div class="navbar">
    <div class="flex-1">
        {{-- <a class="btn btn-ghost text-xl">daisyUI</a> --}}
    </div>
    <div class="flex-none gap-2">

        @auth
            <ul class="menu menu-horizontal px-1">
                <li><a href="{{ route('dashboard') }}" wire:navigate>Dashboard</a>
                </li>
            </ul>
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img alt="Tailwind CSS Navbar component" src="{{ auth()->user()->avatar }}" />
                    </div>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-slate-900 rounded-box z-[1] mt-3 w-52 p-2 shadow-lg">
                    <li><a href="{{ route('landing') }}" wire.navigation>Sobre</a></li>
                    <li><a>Configurações</a></li>
                    <li><a href="{{ route('auth.logout') }}">Sair</a></li>
                </ul>
            </div>
        @else
            <ul class="menu menu-horizontal px-1">
                <li><a href="{{ route('login') }}">Entrar</a>
                </li>
            </ul>
        @endauth
    </div>
</div>
