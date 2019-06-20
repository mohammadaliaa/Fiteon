{{--
<nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="#">Fiteon</a>
    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Features</a>
            <a class="nav-item nav-link" href="#">Pricing</a>
            <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </div>
    </div>
</nav>
--}}
<nav class="navbar navbar-light  navbar-expand-md">
    <div class="container-fluid">
        <a class="navbar-brand " href="{{ url('/') }}"></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
            <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " style="    padding-right: 149px;" id="navcol-1">
            <ul class="nav navbar-nav mx-auto">
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="{{ url('products') }}"><b> Products</b></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="{{ url('services') }}"><b>Services</b></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="{{ url('projects') }}"><b>Projects</b></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="{{ url('articles') }}"><b>Articles</b></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="{{ url('about') }}"><b>About</b></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="{{ url('contact') }}"><b>Contact Us</b></a>
                </li>
            </ul>
        </div>
    </div>
</nav>