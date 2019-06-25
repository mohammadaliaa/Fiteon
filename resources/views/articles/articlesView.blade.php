@include('layouts.script')
<div class="header pheader">
    @include('layouts.navbar')
</div>
<br />
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 mx-auto">
            <div class="row">
                @foreach ($articles as $article)
                <div class="col-md-9 mt-3 mx-auto">
                    <div class="card">
                        <a href="/articles/show/{{$article->id}}">
                            <img src="/images/{{$article->image}}" height="400vh" class="card-img-top" />
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
        </div>
    </div>
</div>
<br />
@include('layouts.footer')
