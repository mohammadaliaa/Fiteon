@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add cat
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
      <form method="post" action="{{ route('cats.store') }}">
          <div class="form-group">
              @csrf
              <label for="title">cat title:</label>
              <input type="text" required class="form-control" name="title"/>
          </div>
          <div class="form-group">

            <label for="title"> title fa:</label>
            <input type="text" class="form-control" name="title_fa"/>
        </div>
          <button type="submit" class="btn btn-primary">Create cat</button>
      </form>
  </div>
</div>
@endsection
