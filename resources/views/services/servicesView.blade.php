@include('layouts.script')
<div class="header pheader">
    @include('layouts.navbar')
</div>
<br />
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                @foreach ($services as $service)
                <div class="col-md-6 mt-3">
                    <div class="card">
                        <a href="/services/show/{{$service->id}}" style="text-decoration: none">
                        <img src="/images/{{$service->image}}" height="400vh" class="card-img-top" />
                        <div class="card-body">
                            @if (app()->getLocale()== 'fa')
                            <h5 class="card-title text-right">{{$service->title_fa}}</h5>
                            @else
                            <h5 class="card-title">{{$service->title}}</h5>
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
<br /> @include('layouts.footer')