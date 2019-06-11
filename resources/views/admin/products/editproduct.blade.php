@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit product
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
      <form method="post" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">product title:</label>
              <input type="text" class="form-control" name="title" value="{{$product->title}}"/>
          </div>
          <div class="form-group">
            <label for="name">title fa:</label>
            <input type="text" class="form-control" name="title_fa" value="{{$product->title_fa}}"/>
        </div>
        <div class="form-group">
            <label for="name">des :</label>
            <input type="text" class="form-control" name="des" value="{{$product->des}}"/>
        </div>
        <div class="form-group">
            <label for="name">des fa:</label>
            <input type="text" class="form-control" name="des_fa" value="{{$product->des_fa}}"/>
        </div>
        <div class="form-group">
                <label for="name">image:</label>
                <input type="file"  name="image"/>
               <img src="{{ URL::to('/') }}/images/{{ $product->image }}"
                     class="img-thumbnail" width="100">
                <input type="hidden" name="hidden_image" value="{{$product->image}}">
            </div>

        <div class="form-group">
            <label>cat
                <select name="cat_id" id="cat_id" class="form-control " >
                    @foreach($cats as $cat)
                    <option value="{{ $cat->id}}"> {{ $cat->title}}</option>
                    @endforeach
                   </select>
            </label>
        </div>
          <button type="submit" class="btn btn-primary">Update cat</button>
      </form>
  </div>
</div>
@endsection
