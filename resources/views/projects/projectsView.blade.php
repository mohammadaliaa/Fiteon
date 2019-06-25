@include('layouts.script')
<div class="header pheader">
    @include('layouts.navbar')
</div>
<br />
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                @foreach ($projects as $project)
                <div class="col-md-6 mt-3">
                    <div class="card">
                        <img src="/images/{{$project->image}}" height="400vh" class="card-img-top" />
                        <div class="card-body">
                            @if (app()->getLocale()== 'fa')
                            <h5 class="card-title text-right">{{$project->title_fa}}</h5>
                            @else
                            <h5 class="card-title">{{$project->title}}</h5>
                            @endif

                            <p class="card-text dots">
                                {{-- {!!html_entity_decode($product->des)!!} --}}
                            </p>
                            <div class="text-center">
                                <a href="/projects/show/{{$project->id}}" style="text-decoration: none" class="btnlink"
                                    >Details</a
                                >
                            </div>
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
