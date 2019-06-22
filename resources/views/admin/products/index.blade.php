@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="ml-5">
    <a class="btn btn-primary" href="{{ url('admin/products/create') }}">create product</a>
</div>
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
          <td>product title</td>
          <td>product des</td>
          <td>product cat</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
        <td><img src="{{URL::to('/') }}/images/{{ $product->image }}" class="img-thumbnail lists_images" ></td>

            <td>{{$product->title}} <br> {{$product->title_fa}}  </td>
            <td  > <pre class="dots with_p_prod" >  {!!$product->des!!} </pre>  <br> <pre class="dots with_p_prod" >  {!!html_entity_decode($product->des_fa)!!}</pre>   </td>
            <td>{{$product->cat->title}}</td>

            <td><a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('products.destroy', $product->id)}}" method="post">
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
