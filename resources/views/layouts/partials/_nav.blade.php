<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ set_active_route('home') }}">
                <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ set_active_route('about') }}" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Artisans</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="planet-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
                <div class="dropdown-menu" aria-labelledby="planet-dropdown">
                    <a class="dropdown-item" href="https://laravel.com">Laravel.com</a>
                    <a class="dropdown-item" href="https://laravel.io">Laravel.io</a>
                    <a class="dropdown-item" href="https://laracasts.com">Laracasts</a>
                    <a class="dropdown-item" href="https://larajobs.com">Larajob</a>
                    <a class="dropdown-item" href="https://laravel-news.com">Laravel News</a>
                    <a class="dropdown-item" href="https://larachat.com">Larachat</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ set_active_route('contacts.create') }}" href="{{ route('contacts.create') }}">Contact</a>
            </li>
        </ul>
        <ul class="navbar-nav ">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
    </div>
</nav>
