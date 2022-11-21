<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav me-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/"><img src="{{ asset('/img/96d6f2e7e1f705ab5e59c84a6dc009b2 (2).png')}}" alt="" width="auto" height="23" class="d-inline-block align-text-top"></a>
                </li>
            </ul>
        </div>
        <div class="mx-auto order-0">
            <form class="d-flex" role="search" style="width: 1000px;">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
            </form>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ms-auto" >

                <li class="nav-item">
                    <a class="nav-link" href="tendencies"><i style="font-size: 20px;" class="fas fa-chart-line"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="notifications"><i style="font-size: 20px;" class="fas fa-bell"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="chat"><i style="font-size: 20px;" class="fas fa-comment"></i></a>
                </li>
                @if(Auth::guest())
                    <label><a href="{{URL('login')}}"><button type="button" class="btn btn-primary">Sign In</button></a></label>
                    <hr>
                    <a href="{{URL('create')}}"><button type="button" class="btn btn-primary">Sign Up</button></a>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> {{ Auth::user()->name}} </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="{{ route('profile', auth()->user()->name) }}">Perfil</a></li>
                            <li><a class="dropdown-item" href="#">Item</a></li>
                            <li><a class="dropdown-item" href="#">Item</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
