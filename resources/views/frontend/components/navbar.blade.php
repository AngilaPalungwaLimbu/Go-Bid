

   <div class="container my-2">
    <div class="row row  ">
        <div class="col-md-3 my-3 ps-0">
            <a href="/" >
                <img src="{{ asset('img/logo.png') }}" width="80%"
                    alt=""></a>
        </div>
        <div class="col-md-4 my-3   offset-2 ">
            <form action="" class=" ">
                <div class="input-group">
                    <form action="/home" class="inline">
                        <input type="text" class="form-control form-control-md" name="search" placeholder="Search Here">
                    <button type="submit" class="input-group-text "><i
                            class="fa-solid fa-magnifying-glass text-success"></i></button>
                    </form>
                </div>
            </form>
        </div>
        <div class="col-md-3 my-3 d-flex justify-content-end">
            @guest

                <a class="  fs-5  text-success ms-4" style="text-decoration: none !important; " href="/login"><i
                        class="fa-solid fa-user me-2"></i>Login</a>
            @else
                <a class=" fs-5 me-0" href="/account">
                    <i class="fa-solid fa-user mx-4  text-secondary"></i>
                </a>

                <a class="fs-5 w-100% text-secondary" href="{{ route('logout') }}"
                    style="text-decoration: none !important; "
                    onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endguest
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg pcolor p-1">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav text-white">
                <li class="nav-item">
                    <a class="nav-link text-white  fw-bold me-3" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white  fw-bold me-3" aria-current="page" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white  fw-bold me-3" aria-current="page" href="/account">My account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white  fw-bold me-3" aria-current="page" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white  fw-bold me-3" aria-current="page" href="#"></a>
                </li>
            </ul>
            <div class="ms-auto">
                @if (Auth::user()->role=='seller')
                <a href="/product/create">
                    <button class="btn text-white fs-5">Add Product</button>
                </a>

                @else
                <a href="/seller/create">
                    <button class="btn text-white fs-5">Become seller</button>
                </a>
                @endif

            </div>
        </div>
    </div>
</nav>

