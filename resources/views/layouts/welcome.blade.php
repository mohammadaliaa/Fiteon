<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Fiteon</title>
  @include('layouts.script')
    </head>
    <body>
        <div>
            <div class="hero-image">
                @include('layouts.navbar')
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
                                <br />
                                <div class="text-center" style="display: inline-flex;">
                                    <a href="#" class="text-dark" style="text-decoration: none">
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
              @include('layouts.footer')
            </div>
        </div>
    </body>
</html>
