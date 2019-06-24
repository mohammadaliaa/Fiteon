@include('layouts.script') @include('layouts.navbar')
<div class="container">
    <div class="text-center">
        <img class="pimage" src="/images/{{$project->image}}" alt="" />
    </div>
    <br />
    <h1 class="px-2" class="font-weight-bold">{{ $project->title }}</h1>
    <br />
    <div class="card middle_box">
        <br />
        <div class="px-4">
            {!!html_entity_decode($project->des)!!}
        </div>
    </div>
</div>
@include('layouts.footer')
