@include('layouts.script') @include('layouts.navbar')
<div class="container"></div>
<br />
@if (app()->getLocale()== 'fa')
<h1 class="px10 font-weight-bold text-right">تماس با ما</h1>
@else
<h1 class="px10 font-weight-bold">Contact us</h1>
@endif

<br />
<div class="">
    <div
        class="card"
        style="margin: auto;border-color: transparent;width: 80%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"
    >
        <br />
        @if (app()->getLocale()== 'fa')
        <div class="px-5 text-right">
            لورم
        </div>
        @else
        <div class="px-5">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae praesentium nulla tempore aperiam odit
            itaque atque error ad quos in, voluptatem quod nesciunt, vel iure. Et dicta deleniti asperiores rerum!
        </div>
        @endif

        <br />
    </div>
</div>
@include('layouts.footer')
