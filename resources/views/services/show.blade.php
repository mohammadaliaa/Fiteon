@include('layouts.script') @include('layouts.navbar')
<div class="container">
    <div class="text-center">
        <img class="pimage" src="/images/{{$service->image}}" alt="" />
    </div>
    <br />
    @if (app()->getLocale()== 'fa')
    <h1 class="px-2 font-weight-bold text-right">{{ $service->title_fa }}</h1>
    @else
    <h1 class="px-2 font-weight-bold">{{ $service->title }}</h1>
    @endif

    <br />
    <div class="card middle_box">
        <br />
        @if (app()->getLocale()== 'fa')
        <div class="px-4 text-right dir_r">
            {!!html_entity_decode($service->des_fa)!!}
        </div>
        @else
        <div class="px-4">
            {!!html_entity_decode($service->des)!!}
        </div>
        @endif
    </div>
    <br> <br>
</div>
@include('layouts.footer')
