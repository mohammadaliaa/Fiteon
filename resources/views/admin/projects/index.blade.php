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
        <td><img src="{{URL::to('/') }}/images/{{ $project->image }}" class="img-thumbnail lists_images"></td>

            <td>{{$project->title}} <br> {{$project->title_fa}}  </td>
            <td>  <pre class="dots with_p_prod"> {!!$project->des!!}</pre>   <br> <pre class="dots with_p_prod"> {!!$project->des_fa!!} </pre>  </td>

            <td><a href="{{ route('projects.edit',$project->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('projects.destroy', $project->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" onclick="return confirm('Are you sure to delete?')" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection
