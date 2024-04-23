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
            <li class="border-bottom border-dark p-3">
                <a class="nav-link text-dark" href="{{ route('login') }}">Login</a>
            </li>
            <li class="border-bottom border-dark p-3">

            </li>
        </ul>

       <div class="d-flex ">
        <div class="btn-group me-3">
            <button class="dropdown-toggle nav-link text-dark" type="button" data-bs-toggle="dropdown"
                data-bs-auto-close="true" aria-expanded="false">
                {{ Auth::user()->name }}
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn dropdown-item">Log Out</button>
                    </form>
                </li>
            </ul>
        </div>
         <button class="navbar-toggler"
            style="border-color:#102C57!important;background-color:#FFECD6!important;color:#102C57!important"
            type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
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
    </div>
</nav>
