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
@include('layouts.nav')
<br>
@if(Auth::check())
<div class="center">
    <form action="{{ route('create.post') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <img src="{{ asset('storage'.$avatar) }}" class="float-start" width="48" height="48">
            <input type="text" name="text" class="form-input border-bottom" placeholder="O que estás a pensar?" style="width: 95%; padding-left: 20px;">
            <span class="border-bottom-animation right"></span>
            <br><br>
            <img id="blah" style="text-align: center; width: 100%; height: 100%;" >
            <br><br>
        </div>
        <div class="right">
            <input type="file" name="image" onchange="readURL(this);" id="upload" >
            <label for="upload" class="btn btn-secondary"><i style="font-size: 20px;" class="fas fa-upload"></i></label>
            <input type="submit" class="btn btn-secondary" value="Publicar">
        </div>
    </form>
@endif
</div>
<br>
@foreach(\App\Models\Topic::all() as $topic)
    <div class="center" style="color: black">
        <img src="{{ asset('storage'.$avatar) }}" class="float-start" width="48" height="48">
        <h5 class="card-title">{{ $topic->user_id }}</h5>
        <p class="card-text">{{ $topic->text }}</p>
        <img src="{{ asset('storage/'.$topic->path) }}" class="img-thumbnail" width="100%" height="100%">
    </div>
@endforeach
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="{{asset('/js/app.js')}}"></script>
</body>
</html>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
