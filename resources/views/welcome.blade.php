<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Fiteon</title>
        <link rel="stylesheet" href="/css/styles.css" />
        <link rel="stylesheet" href="/css/app.css" />
        <script src="/js/app.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" />
        {{-- bootstrap --}}
        {{--
        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"
        ></script>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"
        ></script>
        --}}
    </head>
    <body>
        <div>
            <div class="hero-image">
                @include('navbar')
                <div class="container">
                    <div class="text-center">
                        @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                            <a href="{{ url('/home') }}">Home</a>
                            @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                            @endif @endauth
                        </div>

                        @endif
                    </div>
                    <br />
                    <br />
                    <br />
                    <div class="row">
                        <div
                            class="card "
                            style=" margin: auto;
                            width: 50%; opacity: 0.9;
                            background-color: transparent ;
                            min-width: 450px; border-color: transparent"
                        >
                            <div class="card-body text-center">
                                <h1 class="text-white"><b>Fiteon </b></h1>
                                <div class="text-center" style="display: inline-flex;">
                                    <a href="#" class="text-dark" >
                                        <div class="lbtn">
                                            asdsadasd
                                        </div>
                                    </a>
                                    &nbsp; &nbsp; &nbsp;
                                    <a href="#" class="text-white">
                                        <div class="rbtn">
                                            asdsadasd
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    style=" position: fixed;
left: 0;
bottom: 0;
width: 100%;
opacity: 0.9;
     background-color: #00000025 ;

color: white;
text-align: center;"
                >
                    <div class="row">
                        <div class="col-md-4">s</div>
                        <div class="col-md-4">&copy; 2019 Copyright : Fiteon.ir</div>
                        <div class="col-md-4">s</div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
