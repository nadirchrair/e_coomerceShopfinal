<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/categoriall">categorie</a>
                </li>

            </ul>
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                @if (Route::has('login') && Auth::check())
                    <div class="top-right links">
                        <a href="{{ url('/home') }}">Dashboard</a>
                    </div>
                @elseif (Route::has('login') && !Auth::check())
                    <li class="nav-item">
                        <a class="nav-link active " href="{{ url('/login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/register') }}">Register</a>

                    </li>
                @endif

            </ul>
        </div>
    </div>
</nav>
