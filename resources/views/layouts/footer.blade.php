<div class="ftr">
    <div class="row">
        <div class="col-sm-6">
            @foreach ($infos as $info)
            <i class="fas fa-phone-square-alt"></i> {{$info->phone}} &nbsp; <i class="fas fa-envelope-square"></i> {{$info->email}} @endforeach
        </div>
        <div class="col-sm-6 ">&copy; 2019 Copyright : Fiteon.ir</div>
    </div>
</div>
