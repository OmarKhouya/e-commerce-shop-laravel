<nav class="navbar sticky-top" style="background-color: #FFECD6;">
    <div class="container">
        {{-- Logo --}}
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/electro ka.png') }}" style="width:6rem!important" />
        </a>
        {{-- header's center nav --}}
        <div class="d-md-flex d-none">
            <ul class="list-unstyled d-flex my-auto">
                <li class="p-3">
                    <a class="nav-link text-dark" href="{{ route('home.index') }} ">
                        <i class="fa-solid fa-house"></i>
                        Home
                    </a>
                </li>
                <li class="p-3">
                    <a class="nav-link text-dark" href="{{ route('products.index') }}">
                        <i class="fa-solid fa-store"></i> Products
                    </a>
                </li>
                <li class="p-3  d-none d-lg-inline">
                    <a class="nav-link" href="{{ route('home.about') }}"><i class="fa-solid fa-circle-info me-2"></i>
                        About</a>
                </li>
                @Auth
                    <li class="p-3">
                        <a class="nav-link text-dark" href="{{ route('cart.index') }}">
                            <i class="fa-solid fa-cart-shopping me-2"></i>Cart</a>
                    </li>
                @endAuth
                @guest
                    <li class="p-3">
                        <div class="btn-group">
                            <a class="nav-link text-dark" href="{{ route('login') }}">
                                <i class="fa-solid fa-right-to-bracket"></i> Login
                            </a>
                            <button type="button" class="nav-link text-dark ms-2 dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden"></span>
                            </button>
                            <ul class="dropdown-menu p-3" style="background-color: #FFECD6">
                                <li>
                                    <a class="nav-link text-dark" href="{{ route('register') }}">
                                        <i class="fa-solid fa-user-plus"></i> Register
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
        <div class="d-flex  ">
            {{-- user's name and buttons --}}
            @Auth
                <div class="dropstart d-flex">
                    <button type="button" class="px-3 py-1 nav-link dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden"></span>
                    </button>
                    <ul class="dropdown-menu" style="background-color: #FFECD6">
                        <li class="border-dark">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn dropdown-item">Log Out</button>
                            </form>
                        </li>
                    </ul>
                    <div class="vr mx-3"></div>
                    <button type="button" class="nav-link text-dark">
                        <a class="nav-link " href="{{ route('profile.edit') }}">
                            <span class="d-none d-md-inline me-2">
                                {{ Auth::user()->name }}
                            </span>
                            <i class="fa-solid fa-user me-3"></i>
                        </a>
                    </button>
                </div>
            @endAuth
            {{-- mobile menu --}}
            <button class="navbar-toggler d-inline d-md-none ms-2"
                style="border-color:#102C57!important;background-color:#FFECD6!important;color:#102C57!important"
                type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
                aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel" style="background-color: #102C57">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title text-white" id="offcanvasDarkNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close" style="background-color: aliceblue"></button>
                </div>
                {{-- upper nav --}}
                <div class="offcanvas-body d-flex flex-column justify-content-between">
                    <div class="border border-white rounded p-3">
                        <ul class="list-unstyled text-white">
                            <li>
                                <a class="nav-link" href="{{ route('home.index') }}"><i
                                        class="fa-solid fa-house me-2"></i> Home</a>
                            </li>
                            <hr>
                            <li>
                                <a class="nav-link" href="{{ route('home.about') }}"><i
                                        class="fa-solid fa-circle-info me-2"></i> About</a>
                            </li>
                            <hr>
                            @Auth
                                <li>
                                    <a class="nav-link" href="{{ route('cart.index') }}">
                                        <i class="fa-solid fa-cart-shopping me-2"></i> Cart</a>
                                </li>
                                <hr>
                            @endAuth
                            <li>
                                <a class="nav-link" href="{{ route('products.index') }}">
                                    <i class="fa-solid fa-store me-2"></i> Products
                                </a>
                            </li>
                        </ul>
                    </div>
                    {{-- lower nav --}}
                    <div class="border border-white  rounded p-3 fs-5 d-flex justify-content-between">
                        @Auth
                            <a href="{{ route('profile.edit') }}" class="d-flex text-decoration-none text-white">
                                <div class="my-auto pt-1">
                                    <i class="fa-regular fa-circle-user"></i>
                                </div>
                                <div class="my-auto ms-3">
                                    {{ Auth::user()->name }}
                                </div>
                            </a>
                            <div class="vr text-white"></div>
                            <div class="my-auto pt-1">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <button type="submit" class="nav-link text-white"><i
                                            class="fa-solid fa-arrow-right-from-bracket"></i></button>
                                </form>
                            </div>
                        @endAuth
                        @guest
                            <a class="nav-link text-white" href="{{ route('login') }}">
                                <i class="fa-solid fa-right-to-bracket"></i> Login
                            </a>
                            <div class="vr text-white"></div>
                            <a class="nav-link text-white" href="{{ route('register') }}">
                                <i class="fa-solid fa-user-plus"></i> Register
                            </a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
