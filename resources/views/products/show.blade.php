@include('layouts.script') @include('layouts.navbar')
<div class="container">
    <div class="text-center">
        <img class="pimage" src="/images/{{$product->image}}" alt="" />
    </div>
    <br />
    @if (app()->getLocale()== 'fa')
    <h1 class="px-2 font-weight-bold text-right">{{ $product->title_fa }}</h1>
    @else
    <h1 class="px-2 font-weight-bold">{{ $product->title }}</h1>
    @endif
    <br />
    <div class="card middle_box">
        <br />
        @if (app()->getLocale()== 'fa')
        <div class="px-4 text-right">
            {!!html_entity_decode($product->des_fa)!!}
        </div>
        @else
        <div class="px-4">
            {!!html_entity_decode($product->des)!!}
        </div>
        @endif
    </div>
</div>
{{-- @include('layouts.footer') --}}
