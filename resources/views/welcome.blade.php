<!DOCTYPE html>
<html lang="pt-PT">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Socialize</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="/projetos/forum/resources/css/style.css" rel="stylesheet"> <!-- Styles -->



    </head>
    <body>
        <div class="main">
            <input type="checkbox" id="chk" aria-hidden="true">

            <div class="signup">
                <form method="post" action="http://localhost/projetos/laravel_login/public/admin/login/do">
                    <input type="hidden" name="_token" value="mDkPQRZw0uXwBkzkrGAJGdlN4qLParc1tVvW1XTj">            <label for="chk" aria-hidden="true">Login</label>
                    <input type="email" name="email" id="email" placeholder="Email" required="">
                    <input type="password" name="password" id="password" placeholder="Password" required="">
                    <button type="submit">Login</button>
                </form>
            </div>

            <div class="login">
                <form method="post" action="http://localhost/projetos/laravel_login/public/admin/login/ct">
                    <input type="hidden" name="_token" value="mDkPQRZw0uXwBkzkrGAJGdlN4qLParc1tVvW1XTj">            <label for="chk" aria-hidden="true">Sign up</label>
                    <input type="text" name="name" placeholder="User name" required="">
                    <input type="email" name="email" placeholder="Email" required="">
                    <input type="password" name="password" placeholder="Password" required="">
                    <button type="submit">Sign up</button>
                </form>

            </div>
        </div>
    </body>
</html>
