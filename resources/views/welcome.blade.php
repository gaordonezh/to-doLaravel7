<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600,900" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url('https://images.pexels.com/photos/4338173/pexels-photo-4338173.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');
                color: #f2f2f2;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 75px;
                font-weight: 900;
            }
            .title p{
                font-size: 40px
            }

            .links > a {
                color: #2f2f2f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                border: 2px solid rgba(0,0,0,0.25);
                padding: 10px 30px;
                background: #f2f2f2;
            }
            .links_cuerpo > a{
                color: #f2f2f2;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                border: 2px solid #f2f2f2;
                padding: 10px 30px;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <!--@if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar Sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registro</a>
                        @endif
                    @endauth
                </div>
            @endif-->

            <div class="content">
                <div class="title m-b-md">
                    Bienvenidos
                    <p>A mi portafolio</p>
                </div>

                <div class="links_cuerpo">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}">Inicio</a>
                            @else
                            <a href="{{ route('login') }}">Iniciar Sesión</a>
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registro</a>
                            @endif
                        @endauth
                    @endif


                    
                </div>
            </div>
        </div>
    </body>
</html>
