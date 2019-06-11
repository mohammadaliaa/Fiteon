@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add product
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
      <form  method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              <label for="title">product title:</label>
              <input type="text" required class="form-control" name="title"/>
          </div>
          <div class="form-group">
            <label for="title">product title fa :</label>
            <input type="text" required class="form-control" name="title_fa"/>
        </div>

          <div class="form-group">
            <label for="title"> des :</label>
            <input type="text" class="form-control" name="des"/>
        </div>
        <div class="form-group">
            <label for="title"> des fa :</label>
            <input type="text" class="form-control" name="des_fa"/>
        </div>
        <div class="form-group">
                <label for="title"> image :</label>
                <input type="file" id="image" name="image"/>
            </div>
        <div class="form-group">
            <label>cat
                <select name="cat_id" id="cat_id" class="form-control ">
                    @foreach($cats as $cat)
                    <option value="{{ $cat->id}}"> {{ $cat->title}}</option>
                    @endforeach
                   </select>
            </label>
        </div>

          <button type="submit" class="btn btn-primary">Create product</button>
      </form>
  </div>
</div>
@endsection
