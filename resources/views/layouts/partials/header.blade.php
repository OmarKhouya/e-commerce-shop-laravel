<nav class="navbar sticky-top" style="background-color: #FFECD6;">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/electro ka.png') }}" style="width:6rem!important" />
            {{-- Electromenager Ka --}}</a>
        {{-- <form class="d-lg-flex d-none w-50" role="search">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search"
                    style="border-color:#102C57!important;background-color:#FFECD6">
                <button class="btn btn-dark" style="background-color:#102C57!important;" type="submit">Search</button>
            </div>
        </form> --}}
        <ul class="list-unstyled d-lg-flex d-none">
            <li class="border-bottom border-dark p-3">
                <a class="nav-link text-dark" href="{{ route('home.index') }}">Home</a>
            </li>
            <li class="border-bottom border-dark p-3">
                <a class="nav-link text-dark" href="{{ route('products.index') }}">Products</a>
            </li>
        </ul>
        <button class="navbar-toggler d-none d-sm-block" style="border-color:#102C57!important;background-color:#FFECD6!important;color:#102C57!important" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
            aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel" style="background-color: #EADBC8">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="list-unstyled">
                    <li class="border-bottom border-dark p-3">
                        <a class="nav-link text-dark" href="{{ route('home.index') }}">Home</a>
                    </li>
                    <li class="border-bottom border-dark p-3">
                        <a class="nav-link text-dark" href="{{ route('products.index') }}">Products</a>
                    </li>
                    <li class="border-bottom border-dark p-3">
                        <a class="nav-link text-dark" href="{{ route('home.about') }}">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
