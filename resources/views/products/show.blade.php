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
    <div class="card" style="height:auto;">
        <br />
        <div class="px10">
            {!!html_entity_decode($product->des)!!}
        </div>
    </div>
</div>
