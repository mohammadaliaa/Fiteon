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
      <form method="post" action="{{ route('products.store') }}">
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
            <label>cat
                <select name="cat_id" id="cat_id" class="form-control ">
                    <option value=""></option>
                    @foreach($cats as $cat)
                       {{ $cat->title}}
                    @endforeach
                   </select>
            </label>
        </div>

          <button type="submit" class="btn btn-primary">Create product</button>
      </form>
  </div>
</div>
@endsection
