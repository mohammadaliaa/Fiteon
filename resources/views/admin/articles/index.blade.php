@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="ml-5">
    <a class="btn btn-primary" href="{{ url('admin/articles/create') }}">create article</a>
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
          <td>article title</td>
          <td>article des</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr>
            <td><img src="{{URL::to('/') }}/images/{{ $article->image }}" class="img-thumbnail lists_images" ></td>
            <td>  {{$article->title}}    <br>   {{$article->title_fa}} </td>
            <td> <pre class="dots with_p_prod" > {!!$article->des!!}  </pre> <br> <pre class="dots with_p_prod" >{!!$article->des_fa!!}  </pre>  </td>
            <td><a href="{{ route('articles.edit',$article->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('articles.destroy', $article->id)}}" method="post">
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
