<!DOCTYPE html>
<html lang="pt-PT">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Socialize</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
        <style>
            .center {
                background-color: lightgrey;
                width: 1000px;
                border: 2px solid green;
                border-radius: 5px;
                padding: 10px;
                margin: auto;
                text-align: center;
            }
            .form-input {
                position: relative;
                font-family: "Source Sans Pro", sans-serif;
                font-weight: 600;
                width: 100%;
                height: 40px;
                border: none;
                padding: 0 10px;
                box-shadow: none;
                outline: none;
                -webkit-transition: all .5s ease;
                -moz-transition: all .5s ease;
                -ms-transition: all .5s ease;
                -o-transition: all .5s ease;
                transition: all .5s ease;
            }
            .form-input.border-bottom {
                position: relative;
                background: transparent;
                padding: 0;
                border-bottom: 2px solid rgba(0, 0, 0, .2);
            }
            .form-input.border-bottom ~ .border-bottom-animation {
                position: absolute;
                content: "";
                width: 0;
                background: rgba(0, 0, 0, .2);
                height: 2px;
                z-index: 99;
                -webkit-transition: all .5s ease;
                -moz-transition: all .5s ease;
                -ms-transition: all .5s ease;
                -o-transition: all .5s ease;
                transition: all .5s ease;
            }
            /* Border bottom center */
            .form-input.border-bottom ~ .border-bottom-animation.center {
                left: 0;
                right: 0;
                bottom: 0;
                margin: 0 auto;
            }
            .form-input.border-bottom:focus ~ .border-bottom-animation.center {
                background: #4285F4;
                width: 100%;
            }
        </style>
    </head>

    <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item active">
                        <a class="nav-link" class="center" href="#"><img src="/projetos/forum/resources/img/96d6f2e7e1f705ab5e59c84a6dc009b2 (2).png" alt="" width="auto" height="23" class="d-inline-block align-text-top"></a>
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
                        <a class="nav-link" href="#"><i style="font-size: 20px;" class="fas fa-plus-circle"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i style="font-size: 20px;" class="fas fa-chart-line"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i style="font-size: 20px;" class="fas fa-bell"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i style="font-size: 20px;" class="fas fa-comment"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Menu </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Item</a></li>
                            <li><a class="dropdown-item" href="#">Item</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <div class="center">
        <div class="form-group">
            <img src="/projetos/forum/resources/img/59170.png" class="float-start" width="27" height="27">
            <input type="text" class="form-input border-bottom" placeholder="Criar Post" style="width: 95%; ">
            <span class="border-bottom-animation right"></span>
            <br>
            <input type="submit" value="Publicar" class="float-end">
            <input type="file" name="upload" id="" class="btn btn-secondary" class="float-end">

        </div>
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
