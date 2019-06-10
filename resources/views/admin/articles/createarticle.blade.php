@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add article
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
      <form method="post" action="{{ route('articles.store') }}">
          <div class="form-group">
              @csrf
              <label for="title">article title:</label>
              <input type="text" required class="form-control" name="article_title"/>
          </div>
          <div class="form-group">

            <label for="title">article title fa:</label>
            <input type="text" class="form-control" name="article_title_fa"/>
        </div>
          <div class="form-group">
              <label for="des">article des :</label>
              <input type="text" required class="form-control" name="article_des"/>
          </div>
          <div class="form-group">
            <label for="des">article des fa :</label>
            <input type="text" class="form-control" name="article_des_fa"/>
        </div>
          <button type="submit" class="btn btn-primary">Create article</button>
      </form>
  </div>
</div>
@endsection
