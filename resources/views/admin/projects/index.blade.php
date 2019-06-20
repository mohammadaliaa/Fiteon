@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="ml-5">
    <a class="btn btn-primary" href="{{ url('admin/projects/create') }}">create project</a>
</div>
<br>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif

  <table class="table table-striped">
    <thead>
        <tr>
          <td>image</td>
          <td>project title</td>
          <td>project des</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($projects as $project)
        <tr>
        <td><img src="{{URL::to('/') }}/images/{{ $project->image }}" class="img-thumbnail" width="75"></td>

            <td>{{$project->title}} <br> {{$project->title_fa}}  </td>
            <td>{{$project->des}} <br> {{$project->des_fa}}  </td>

            <td><a href="{{ route('projects.edit',$project->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('projects.destroy', $project->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection
