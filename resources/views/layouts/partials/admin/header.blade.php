<header class="sticky-top">
    <nav class="navbar navbar-expand-lg" style="background-color: #FFECD6">
        <div class="container">
            <div class="btn-group me-3">
                <button class="dropdown-toggle nav-link text-dark" type="button" data-bs-toggle="dropdown"
                    data-bs-auto-close="true" aria-expanded="false">
                    <i class="fa-solid fa-user me-2"></i>
                    <span class="d-none d-md-inline">
                        {{ Auth::user()->name }}
                    </span>
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" style="color: black" href="{{route("admin.index")}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: black" href="{{route("products.index")}}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: black" href="{{route("products.create")}}">Add Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: black" href="{{route("admin.users")}}">Users</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
