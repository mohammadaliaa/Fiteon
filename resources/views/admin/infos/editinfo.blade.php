@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Info
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form id="form" method="post" action="{{ route('infos.update', $info->id) }}" enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">phone:</label>
              <input type="text" class="form-control" required name="phone" value="{{$info->phone}}"/>
          </div>
          <div class="form-group">
            <label for="name">mobile:</label>
            <input type="text" class="form-control" required name="mobile" value="{{$info->mobile}}"/>
        </div>
          <div class="form-group">
            <label for="name">email:</label>
            <input type="text" class="form-control" required name="email" value="{{$info->email}}"/>
        </div>
          <div class="form-group">
            <label for="name">fax:</label>
            <input type="text" class="form-control" required name="fax" value="{{$info->fax}}"/>
        </div>
          <div class="form-group">
            <label for="name">location:</label>
            <input type="text" class="form-control" required name="location" value="{{$info->location}}"/>
        </div>
          <div class="form-group">
            <label for="name">address:</label>
            <input type="text" class="form-control" required name="address_1" value="{{$info->address_1}}"/>
        </div>
          <div class="form-group">
            <label for="name">address:</label>
            <input type="text" class="form-control"  name="address_2" value="{{$info->address_2}}"/>
        </div>
          <div class="form-group">
            <label for="name">address:</label>
            <input type="text" class="form-control"  name="address_3" value="{{$info->address_3}}"/>
        </div>




          <button type="submit" class="btn btn-primary">Update info</button>
      </form>
  </div>
</div>


@endsection
