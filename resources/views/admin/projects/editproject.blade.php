@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit project
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
      <form method="post" action="{{ route('projects.update', $project->id) }}" enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">project title:</label>
              <input type="text" class="form-control" name="title" value="{{$project->title}}"/>
          </div>
          <div class="form-group">
            <label for="name">title fa:</label>
            <input type="text" class="form-control" name="title_fa" value="{{$project->title_fa}}"/>
        </div>
        <div class="form-group">
            <label for="name">des :</label>
            <input type="text" class="form-control" name="des" value="{{$project->des}}"/>
        </div>
        <div class="form-group">
            <label for="name">des fa:</label>
            <input type="text" class="form-control" name="des_fa" value="{{$project->des_fa}}"/>
        </div>
        <div class="form-group">
                <label for="name">image:</label>
                <input type="file"  name="image"/>
               <img src="{{ URL::to('/') }}/images/{{ $project->image }}"
                     class="img-thumbnail" width="100">
                <input type="hidden" name="hidden_image" value="{{$project->image}}">
            </div>

          <button type="submit" class="btn btn-primary">Update Project</button>
      </form>
  </div>
</div>
@endsection
