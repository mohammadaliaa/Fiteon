@extends('layouts.app')

@section('content')
<div class="container">
        <a class="btn btn-primary" href="{{ url('admin/cats/create') }}"> add category</a>
        @foreach ($cats as $cat)
        <div class="row ">
           <td>title:</td> <tr>{{ $cat->title }} </tr>
        </div>
        @endforeach
</div>
@endsection

