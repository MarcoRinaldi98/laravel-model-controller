<header>
    <nav class="navbar bg-dark justify-content-center h-100" data-bs-theme="dark">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'text-info' : '' }}" aria-current="page"
                    href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'about' ? 'text-info' : '' }}"
                    href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'contact' ? 'text-info' : '' }}"
                    href="{{ route('contact') }}">Contact</a>
            </li>
        </ul>
    </nav>
</header>
