<nav class="navbar navbar-expand-md navbar-light bg-light static-top px-5 mb-3">
    <a class="navbar-brand" href="{{ route('root_path') }}">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ set_active_route('root_path') }}">
                <a class="nav-link" href="{{ route('root_path') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ set_active_route('about_path') }}" href="{{ route('about_path') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Artisans</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="https://laravel.com">Laravel.com</a>
                    <a class="dropdown-item" href="https://laravel.io">Laravel.io</a>
                    <a class="dropdown-item" href="https://laracasts.com">Laracasts</a>
                    <a class="dropdown-item" href="https://larajobs.com">Larajob</a>
                    <a class="dropdown-item" href="https://laravel-news.com">Laravel News</a>
                    <a class="dropdown-item" href="https://larachat.com">Larachat</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
            </li>
        </ul>
    </div>
</nav>
