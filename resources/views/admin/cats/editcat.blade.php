@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit cat
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
      <form method="post" action="{{ route('cats.update', $cat->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">cat title:</label>
              <input type="text" class="form-control" name="title" value="{{$cat->title}}"/>
          </div>
          <div class="form-group">
            <label for="name">title fa:</label>
            <input type="text" class="form-control" name="title_fa" value="{{$cat->title_fa}}"/>
        </div>

          <button type="submit" class="btn btn-primary">Update cat</button>
      </form>
  </div>
</div>
@endsection
