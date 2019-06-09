@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit article
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
      <form method="post" action="{{ route('articles.update', $article->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">article title:</label>
              <input type="text" class="form-control" name="article_title" value="{{$article->article_title}}"/>
          </div>
          <div class="form-group">
              <label for="price">des :</label>
              <input type="text" class="form-control" name="article_des" value="{{$article->article_des}}"/>
          </div>

          <button type="submit" class="btn btn-primary">Update article</button>
      </form>
  </div>
</div>
@endsection
