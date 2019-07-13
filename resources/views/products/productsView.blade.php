@include('layouts.script')
<div class="header pheader">
    @include('layouts.navbar')
    <br>
    <div class="container ">
        <div style="margin: auto;width: 16%;min-width: 163px;">
                <h1 class="text-center text_shadow">@lang('msg.products')</h1>
        </div>
    </div>

</div>
<br />
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 ">
            <h1 class="text-center">@lang('msg.categories')</h1>
                @foreach ($cats as $cat)
                    <div class="card text-center" style="margin-bottom: 3px;">
                        <h5>
                            <a class="nav-link" href="/cats/{{$cat->id}}">
                                @if (app()->getLocale()== 'fa')
                                {{$cat->title_fa}}
                                @else
                                {{$cat->title}}
                                @endif
                            </a>
                        </h5>
                    </div>
                @endforeach
        </div>
        <div class="col-md-9">
            <div class="row">
                @foreach ($products as $product)
                <div class="col-md-6 mt-3">
                    <div class="card">
                       <a href="/products/show/{{$product->id}}" style="text-decoration: none">
                        <img src="/images/{{$product->image}}" height="400vh" class="card-img-top" />
                        <div class="card-body">
                            @if (app()->getLocale()== 'fa')
                            <h5 class="card-title text-right">{{$product->title_fa}}</h5>
                            @else
                            <h5 class="card-title">{{$product->title}}</h5>
                            @endif
                            <p class="card-text dots">
                                {{-- {!!html_entity_decode($product->des)!!} --}}
                            </p>
                          </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <br>
        </div>
    </div>
</div>

@include('layouts.footer')
