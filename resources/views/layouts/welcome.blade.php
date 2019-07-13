<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.script')
</head>

<body>
    <div class="hero-image">
        @include('layouts.navbar')
        <div class="container">
            <br />
            <br />
            <br />
            <div class="row">
                <div class="card " style=" margin: auto;
                                width: 50%; opacity: 0.9;
                                background-color: transparent ;
                                min-width: 450px; border-color: transparent">
                    <div class="card-body text-center">
                        <h1 class="text-white" ><b class="text_shadow">@lang('msg.fiteon') </b></h1>
                        <br />
                        <div class="text-center" style="display: inline-flex;">
                            <a href="http://fitcrete.com/" class="text-dark" style="text-decoration: none">
                                <div class="lbtn">
                                    Fitcrete
                                </div>
                            </a>
                            &nbsp; &nbsp; &nbsp;
                            <a href="#" class="text-white">
                                <div class="rbtn">
                                    test
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>
</body>

</html>
