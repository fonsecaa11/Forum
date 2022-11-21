<!doctype html>
<html lang="pt-BR">
<head>
    <title>SOCIALIZE | CREATE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('/css/style.css')}}">

</head>
<body class="img js-fullheight" style="background-image: url(img/gy.jpg);">
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <img src="{{ asset('/img/96d6f2e7e1f705ab5e59c84a6dc009b2 (2).png')}}" alt="">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <h3 class="mb-4 text-center">Sing Up</h3>
                    <form action="{{ route('create.do') }}" method="POST" class="signin-form">
                        @csrf
                        <div class="form-group">
                            Avatar:
                            @foreach($avatars as $avatar)
                                <label for="{{ $avatar->id }}"><img id="avatarLabel" src="{{ route('avatars.show',['avatar'=>$avatar->id]) }}" alt="" width="100" height="100"></label>
                                <input type="hidden" name="avatar_id" value="{{ $avatar->id }}" id="{{ $avatar->id }}">
                            @endforeach
                            <button type="button" id="getRandomAvatar" class="btn btn-primary">Trocar avatar</button>
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input id="password-field" name="password" type="password" class="form-control" placeholder="Password" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
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
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-100">
                                <p>Já tens conta <a href="{{URL('login')}}">acede aqui</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
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
</body>
</html>

