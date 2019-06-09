@extends('layouts.app')
@section('content')
<h2>Add a catgory</h2>
<form method="post" action="{{ route('cat.create') }}" enctype="multipart/form-data">
    @csrf

@if(count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    <div class="form-group row">
        <label for="titleid" class="col-sm-3 col-form-label">c Title</label>
        <div class="col-sm-9">
            <input required="required" name="title" type="text" class="form-control" id="title" placeholder="c Title" value={{old('title') }}>
        </div>
    </div>


    <div class="form-group row">
        <div class="offset-sm-3 col-sm-9">
            <button type="submit" class="btn btn-primary">Submit </button>
        </div>
    </div>
</form>
@endsection
