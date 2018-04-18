<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Orkut</title>

        <link href="/css/style.css" rel="stylesheet" type="text/css">
        <link href="/css/app.css" rel="stylesheet" type="text/css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        
            <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif -->

            <div class="photo"></div>
            <div class="darkness"></div>

            <div class="main">
                <div class="container">
                    <div class="center">
                    <center>
                    <img src="/img/logo.png" class="logo">
                    <h1>Igual à vida real</h1>
                    <a href="/login"><button class="btn-a" id="login">Já é usuário</button></a>
                    <br>
                    <a href="/register"><button class="btn-a" id="registro">Cadastrar-se</button></a>
                    </center>
                    </div>
                </div>
            </div>
    </body>
</html>
