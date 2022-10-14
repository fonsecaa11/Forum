<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Socialize</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">

</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav me-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><img src="{{ asset('/img/96d6f2e7e1f705ab5e59c84a6dc009b2 (2).png')}}" alt="" width="auto" height="23" class="d-inline-block align-text-top"></a>
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
                <li class="nav-item" >
                    <a class="nav-link" href="create"><i style="font-size: 20px;" class="fas fa-plus-circle"></i></a>
                </li>
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
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#login">Sign In</button>
                    <div class="modal fade" id="login" aria-labelledby="exampleModalLabel" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5">Login</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="name" class="col-form-label">Username/Email:</label>
                                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="col-form-label">Password:</label>
                                        <input type="password" name="password" id="password" class="form-control" >
                                    </div>
                                    @if($errors->any())
                                        <div style="text-align: center" class="alert alert-danger">
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    {{ $error }}
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Login</button>
                                </div>
                                <div class="modal-footer">
                                    Ainda não tens conta <a href="#" data-bs-toggle="modal" data-bs-whatever="@mdo" data-bs-target="#create">clica aqui para criares</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Criar Conta</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{ route('create') }}" >
                                        @csrf
                                        <div class="mb-3">
                                            Avatar:
                                            <img src="{{ asset('/img/avatar/') }}" alt="">
                                            <input type="file" name="create_avatar" id="create_avatar">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Username:</label>
                                            <input type="text" name="create_name" class="form-control" id="create_name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Email:</label>
                                            <input type="email" name="create_email" class="form-control" id="create_email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Password:</label>
                                            <input type="password" name="create_password" class="form-control" id="create_password">
                                        </div>
                                        <button style="text-align: right" type="submit" class="btn btn-primary">Login</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    Já tens conta <a href="#" data-bs-toggle="modal" data-bs-whatever="@mdo" data-bs-target="#login">volta para o login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> {{ Auth::User()->name}} </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarScrollingDropdown">
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
<br>
<div class="center">
    <div class="form-group">
        <img src="{{ asset('/img/59170.png')}}" class="float-start" width="27" height="27">
        <input type="text" class="form-input border-bottom" placeholder="Criar Post" style="width: 95%; padding-left: 20px;">
        <span class="border-bottom-animation right"></span>
    </div>
    <div class="right">
        <input type="file" name="image" id="upload" >
        <label for="upload" class="btn btn-secondary"><i style="font-size: 20px;" class="fas fa-upload"></i></label>
        <input type="submit" class="btn btn-secondary" value="Publicar">
    </div>
</div>

<script>
    $('#submit').click(function(){
        console.log($('#name').val());
        let username = $('#name').val();
        let password = $('#password').val();
        if(username != '' && password != ''){
            $.ajax({
                url:"{{ route('login') }}",
                method:"POST",
                data: {name:username, password, "_token": "{{ csrf_token() }}"},
                success:function(data){
                    //alert(data);
                    if(data === 'No')
                    {
                        alert("Wrong Data");
                    }
                    else
                    {
                        $('#login').hide();
                    }
                }
            });
        }
        else
        {
            alert("Both Fields are required");
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="{{asset('/js/app.js')}}"></script>
</body>
</html>
