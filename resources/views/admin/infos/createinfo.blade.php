@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add info
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
      <form id="form"  method="post" action="{{ route('infos.store') }}" enctype="multipart/form-data">
              <div class="form-group">
                @csrf
            <label for="name">mobile:</label>
            <input type="text" class="form-control" required name="mobile" />
        </div>
        <div class="form-group">
                <label for="name">phone:</label>
                <input type="text" class="form-control" required name="phone" />
            </div>
          <div class="form-group">
            <label for="name">email:</label>
            <input type="text" class="form-control" required name="email" />
        </div>
          <div class="form-group">
            <label for="name">fax:</label>
            <input type="text" class="form-control" required name="fax" />
        </div>
          <div class="form-group">
            <label for="name">location:</label>
            <input type="text" class="form-control" required name="location" />
        </div>
          <div class="form-group">
            <label for="name">address:</label>
            <input type="text" class="form-control" required name="address_1" />
        </div>
          <div class="form-group">
            <label for="name">address:</label>
            <input type="text" class="form-control"  name="address_2" />
        </div>
          <div class="form-group">
            <label for="name">address:</label>
            <input type="text" class="form-control"  name="address_3" />
        </div>

          <button type="submit" class="btn btn-primary">Create info</button>
      </form>
  </div>
</div>
@endsection
