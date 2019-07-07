
<nav class="navbar navbar-light  navbar-expand-md">
    <div class="container-fluid">
        <a style="z-index: 1;" class="navbar-brand " href="{{ url('/') }}"></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
            <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse nav_margin" id="navcol-1">
            <ul class="nav navbar-nav mx-auto">
                @if (app()->getLocale()== 'fa')
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="{{ url('contact') }}"><b> @lang('msg.contatus')</b></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="{{ url('articles') }}"><b>@lang('msg.articles')</b></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="{{ url('projects') }}"><b> @lang('msg.projects') </b></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="{{ url('services') }}"><b>@lang('msg.services') </b></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="{{ url('products') }}"><b>@lang('msg.products') </b></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="{{ url('about') }}"><b> @lang('msg.aboutus')</b></a>
                </li>
                @else
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="{{ url('about') }}"><b> @lang('msg.aboutus')</b></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="{{ url('products') }}"><b>@lang('msg.products') </b></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="{{ url('services') }}"><b>@lang('msg.services') </b></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="{{ url('projects') }}"><b> @lang('msg.projects') </b></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="{{ url('articles') }}"><b>@lang('msg.articles')</b></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="{{ url('contact') }}"><b> @lang('msg.contatus')</b></a>
                </li>
                @endif
            </ul>

        <a class="text-white" style="text-decoration: none ; margin-right: 10px" href="/locale/fa"> <img src="/images/fa.svg" height="12px" alt="" /> </a>

        <a class="text-white" style="text-decoration: none" href="/locale/en"> <img src="/images/en.svg" height="12px" alt="" /> </a>
        </div>


    </div>
</nav>
