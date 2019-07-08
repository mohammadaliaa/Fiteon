@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="ml-5">
    <a class="btn btn-primary" href="{{ url('admin/services/create') }}">create service</a>
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
          <td>service title</td>
          <td>service des</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($services as $service)
        <tr>
        <td><img src="{{URL::to('/') }}/images/{{ $service->image }}" class="img-thumbnail lists_images"></td>
            <td>{{$service->title}} <br> {{$service->title_fa}}  </td>
            <td>  <pre class="dots with_p_prod"> {!!$service->des!!}</pre>   <br> <pre class="dots with_p_prod"> {!!$service->des_fa!!} </pre>  </td>
            <td><a href="{{ route('services.edit',$service->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('services.destroy', $service->id)}}" method="post">
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
