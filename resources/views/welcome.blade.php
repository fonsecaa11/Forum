<!DOCTYPE html>
<html lang="pt-PT">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Socialize</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <link href="/projetos/forum/resources/css/style.css" rel="stylesheet"> <!-- Styles -->
    </head>
    <body>
    <div class="topnav" id="myTopnav">
        <a class="navbar-brand" href="#"><img src="/projetos/forum/resources/img/96d6f2e7e1f705ab5e59c84a6dc009b2 (2).png" alt="" width="auto" height="23" class="d-inline-block align-text-top"></a>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Página Inicial</a>
        <a href="#news"><i class="fa fa-line-chart" aria-hidden="true"></i></a>

        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <div style="padding-left:16px">
        <h2>Responsive Topnav Example</h2>
        <p>Resize the browser window to see how it works.</p>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
    </body>
</html>
