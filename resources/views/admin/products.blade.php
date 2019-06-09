@extends('layouts.app')

@section('content')
<div class="container">
        <a class="btn btn-primary" href="{{ url('admin/products/create') }}"> add product</a>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

        <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($products as $product)
                <tr>

                    <td>{{ $product->name }}</td>
                    <td>{{ $product->des }}</td>
                    <td>
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>


        {{-- @foreach ($products as $product) --}}
        {{-- <div class="row ">
           <td>title:</td> <tr>{{ $product->title }} </tr>
           <td>des :</td> <tr>{{ $product->des }}</tr>
          <td>cat : </td>  <tr>{{ $product->cat['title'] }}</tr>
          <td>img:</td>  <tr><img  width="40rem" height="40rem" src="{{ $product->media['image_src'] }}" alt="">  </tr>
          <td>
                <form id="delete_form" action="{{ route('product.delete', [$product->id]) }}" method="POST"> --}}
                        {{-- @method('DELETE')
                        @csrf --}}
                        {{-- <input type="hidden" name="_method" value="delete"> --}}
                        {{-- {{csrf_field()}} --}}
                        {{-- <button type="submit">Delete </button>
                    </form>

        </td>
        </div> --}}
        {{-- @endforeach --}}
{{-- </div> --}}
{!! $products->links() !!}

@endsection

