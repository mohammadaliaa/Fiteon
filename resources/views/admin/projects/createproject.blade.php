@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add project
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
      <form method="post" action="{{ route('projects.store') }}" enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              <label for="name">Project Name:</label>
              <input type="text" class="form-control" name="title"/>
          </div>
          <div class="form-group">
                <label for="name">Project Name fa:</label>
                <input type="text" class="form-control" name="title_fa"/>
            </div>
          <div class="form-group">
              <label for="price">Project des :</label>
              <input type="text" class="form-control" name="des"/>
          </div>
          <div class="form-group">
              <label for="price">Project des fa:</label>
              <input type="text" class="form-control" name="des_fa"/>
          </div>
          <div class="form-group">
                <label for="title"> image :</label>
                <input type="file" id="image" name="image"/>
            </div>
          <button type="submit" class="btn btn-primary">Create Project</button>
      </form>
  </div>
</div>
@endsection
