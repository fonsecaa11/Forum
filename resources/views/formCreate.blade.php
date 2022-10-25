<!doctype html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Login Page</title>

    <style>
        body{
            background-color: lightslategray;
        }
        .main-content{
            width: 50%;
            border-radius: 20px;
            box-shadow: 0 5px 5px rgba(0,0,0,.4);
            margin: 5em auto;
            display: flex;
        }
        .company__info{
            background-color: #008080;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: #fff;
        }

        @media screen and (max-width: 640px) {
            .main-content{width: 90%;}
            .company__info{
                display: none;
            }
            .login_form{
                border-top-left-radius:20px;
                border-bottom-left-radius:20px;
            }
        }
        @media screen and (min-width: 642px) and (max-width:800px){
            .main-content{width: 70%;}
        }
        .row > h2{
            color:#008080;
        }
        .login_form{
            background-color: #fff;
            border-top-right-radius:20px;
            border-bottom-right-radius:20px;
            border-top:1px solid #ccc;
            border-right:1px solid #ccc;
        }
        form{
            padding: 0 2em;
        }
        .form__input{
            width: 100%;
            border:0px solid transparent;
            border-radius: 0;
            border-bottom: 1px solid #aaa;
            padding: 1em .5em .5em;
            padding-left: 2em;
            outline:none;
            margin:1.5em auto;
            transition: all .5s ease;
        }
        .form__input:focus{
            border-bottom-color: #008080;
            box-shadow: 0 0 5px rgba(0,80,80,.4);
            border-radius: 4px;
        }
        .btn{
            transition: all .5s ease;
            width: 70%;
            border-radius: 30px;
            color:#008080;
            font-weight: 600;
            background-color: #fff;
            border: 1px solid #008080;
            margin-top: 1.5em;
            margin-bottom: 1em;
        }
        .btn:hover, .btn:focus{
            background-color: #008080;
            color:#fff;
        }
    </style>
</head>
<body>
<!-- Main Content -->
<div class="container-fluid">
    <div class="row main-content bg-success text-center">
        <div class="col-md-4 text-center company__info">
            <span class="company__logo"><h2><span class="fa fa-android"></span></h2></span>
            <a class="nav-link" href="{{URL('/')}}"><img src="{{ asset('/img/96d6f2e7e1f705ab5e59c84a6dc009b2 (2).png')}}" alt="" width="auto" height="23" class="d-inline-block align-text-top"></a>
        </div>
        <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
            <div class="container-fluid">
                <div class="row">
                    <h2>Criar Conta</h2>
                </div>
                <div class="row">
                    <form action="{{ route('create.do') }}" method="POST">
                        @csrf
                        <div class="row">
                            Avatar:
                            @foreach($avatars as $avatar)
                                <label for="{{ $avatar->id }}"><img id="avatarLabel" src="{{ route('avatars.show',['avatar'=>$avatar->id]) }}" alt="" width="100" height="100"></label>
                                <input type="number" name="avatar" value="{{ $avatar->id }}" id="{{ $avatar->id }}" style="display: none" class="form-control">
                            @endforeach
                            <button type="button" id="getRandomAvatar" class="btn btn-primary">Trocar avatar</button>
                        </div>
                        <div class="row">
                            <input type="text" name="name" id="name" class="form__input @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Username">
                        </div>
                        <div class="row">
                            <input type="email" name="email" id="email" class="form__input" placeholder="Email">
                        </div>
                        <div class="row">
                            <!-- <span class="fa fa-lock"></span> -->
                            <input type="password" name="password" id="password" class="form__input" placeholder="Password">
                        </div>
                        <div class="row">
                            <input type="checkbox" name="remember_me" id="remember_me" class="">
                            <label for="remember_me">Remember Me!</label>
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
                        <div class="row">
                            <input type="submit" value="Submit" class="btn">
                        </div>
                    </form>
                </div>
                <div class="row">
                    <p>Já tens conta <a href="{{URL('login')}}">acede aqui</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script>
    $('#getRandomAvatar').click(()=>{
        $.ajax({
            url: "{{route('avatars.getRandom')}}",
            method: 'get',
            success: data =>{
                $('#avatarLabel').attr('src', data.avatar)
                console.log(typeof  data)
            }
        })
    })
</script>
