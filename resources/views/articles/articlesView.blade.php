@include('layouts.script')
<div class="header pheader">
    @include('layouts.navbar')
    <br>
    <div class="container ">
        <div style="margin: auto;width: 16%;min-width: 163px;">
                <h1 class="text-center text_shadow">@lang('msg.articles')</h1>
        </div>
    </div>
</div>
<br />
<div class="container-fluid">
    <div class="row">
            @if (app()->getLocale()== 'fa')
            <div class="col-md-9 mx-auto dir_r">
                    <div class="row">
                        @foreach ($articles as $article)
                        <div class="col-md-4 mt-3 ">
                            <div class="card">
                                <a href="/articles/show/{{$article->id}}">
                                    <img src="/images/{{$article->image}}" height="300vh" class="card-img-top" />
                                </a>
                                <div class="card-body">
                                    <a class="nav-link" href="/articles/show/{{$article->id}}">
                                        @if (app()->getLocale()== 'fa')
                                        <h5 class="card-title text-right">{{$article->title_fa}}</h5>
                                        @else
                                        <h5 class="card-title">{{$article->title}}</h5>
                                        @endif
                                    </a>
                                    <p class="card-text dots">
                                        {{-- {!!html_entity_decode($product->des)!!} --}}
                                    </p>
                                    {{-- created at : {{$article->created_at}} --}}
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                    <br>
                </div>
            @else
            <div class="col-md-9 mx-auto">
                    <div class="row">
                        @foreach ($articles as $article)
                        <div class="col-md-4 mt-3 ">
                            <div class="card">
                                <a href="/articles/show/{{$article->id}}">
                                    <img src="/images/{{$article->image}}" height="300vh" class="card-img-top" />
                                </a>
                                <div class="card-body">
                                    <a class="nav-link" href="/articles/show/{{$article->id}}">
                                        @if (app()->getLocale()== 'fa')
                                        <h5 class="card-title text-right">{{$article->title_fa}}</h5>
                                        @else
                                        <h5 class="card-title">{{$article->title}}</h5>
                                        @endif
                                    </a>
                                    <p class="card-text dots">
                                        {{-- {!!html_entity_decode($product->des)!!} --}}
                                    </p>
                                    {{-- created at : {{$article->created_at}} --}}
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                    <br>
                </div>
            @endif

    </div>
</div>
        <div style="width: fit-content;
        margin: auto;">
                {{$articles->links()}}
        </div>
<br />
@include('layouts.footer')
