<div
    class="navbar antialiased text-slate-200 tracking-tight fixed top-0 z-20 border-b border-slate-200/10 bg-slate-950/50 backdrop-blur-md">
    <div class="flex-1">
        {{-- <a class="btn btn-ghost text-xl">daisyUI</a> --}}
    </div>
    <div class="flex-none gap-2">
        @auth
            <ul class="menu menu-horizontal px-1">
                <li>
                    <a href="{{ route('dashboard') }}" wire:navigate
                        class="btn btn-neutral border-none bg-slate-950 font-semibold text-slate-100 shadow-2xl shadow-purple-950/50 rounded-full p-4 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-purple-600">Dashboard</a>
                </li>
            </ul>
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="{{ auth()->user()->avatar }}" alt="User Avatar" />
                    </div>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content antialiased text-slate-200 tracking-tight bg-slate-900 rounded-box z-[1] mt-3 w-52 p-2 shadow-lg">
                    <li><a href="{{ route('landing') }}" wire.navigation>Sobre</a></li>
                    <li><a href="{{ route('auth.logout') }}">Sair</a></li>
                </ul>
            </div>
        @else
            <ul class="menu menu-horizontal px-1">
                <li>
                    <a href="https://github.com/monteirofutila/facade-link" target="_blank"
                        class="btn btn-neutral border-none bg-slate-950 p-4 text-gray-400 hover:text-gray-100 hover:bg-slate-950">
                        <svg class="w-5 h-5" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M16 0C7.16 0 0 7.16 0 16c0 7.08 4.58 13.06 10.94 15.18.8.14 1.1-.34 1.1-.76 0-.38-.02-1.64-.02-2.98-4.02.74-5.06-.98-5.38-1.88-.18-.46-.96-1.88-1.64-2.26-.56-.3-1.36-1.04-.02-1.06 1.26-.02 2.16 1.16 2.46 1.64 1.44 2.42 3.74 1.74 4.66 1.32.14-1.04.56-1.74 1.02-2.14-3.56-.4-7.28-1.78-7.28-7.9 0-1.74.62-3.18 1.64-4.3-.16-.4-.72-2.04.16-4.24 0 0 1.34-.42 4.4 1.64 1.28-.36 2.64-.54 4-.54 1.36 0 2.72.18 4 .54 3.06-2.08 4.4-1.64 4.4-1.64.88 2.2.32 3.84.16 4.24 1.02 1.12 1.64 2.54 1.64 4.3 0 6.14-3.74 7.5-7.3 7.9.58.5 1.08 1.46 1.08 2.96 0 2.14-.02 3.86-.02 4.4 0 .42.3.92 1.1.76A16.026 16.026 0 0 0 32 16c0-8.84-7.16-16-16-16Z"
                                fill="currentColor"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('auth.google.redirect') }}"
                        class="btn btn-neutral border-none bg-slate-950 font-semibold text-slate-100 shadow-2xl shadow-purple-950/50 rounded-full p-4 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-purple-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9">
                            </path>
                        </svg>

                        <span>Iniciar sessão</span>
                    </a>
                </li>
            </ul>
        @endauth
    </div>
</div>
