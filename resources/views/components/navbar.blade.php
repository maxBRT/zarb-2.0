<header>
    <div class="navbar bg-base-100 shadow-sm">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl" href="/">Zarb</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1 flex gap-3 items-center">
                @auth
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-ghost">Déconnection</button>
                        </form>
                    </li>
                @else
                    <li>
                        <a class="btn" href="{{ route('register') }}">Inscription</a>
                    </li>
                    <li>
                        <a class="btn btn-primary" href="{{ route('login') }}">Connection</a>
                    </li>
                    <li>
                        <x-theme-toggle />
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</header>
