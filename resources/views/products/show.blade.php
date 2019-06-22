@include('layouts.script') @include('layouts.navbar')
<div class="container">
    <div class="text-center">
        <img class="pimage" src="/images/{{$product->image}}" alt="" />
    </div>
</div>
<br />
<h1 class="px10" class="font-weight-bold">{{ $product->title }}</h1>
<br />
<div class="">
    <div class="card" style="margin: auto;border-color: transparent;width: 80%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <br />
        <div class="px-5">
            {!!html_entity_decode($product->des)!!}
        </div>
    </div>
</div>
