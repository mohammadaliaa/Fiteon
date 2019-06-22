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
      <form id="form" method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
        <div class="form-group">
            <label>Category :
                <select name="cat_id" id="cat_id" class="form-control ">
                    @foreach($cats as $cat)
                    <option value="{{ $cat->id}}"> {{ $cat->title}}</option>
                    @endforeach
                   </select>
            </label>
        </div>
          <div class="form-group">
              @csrf
              <label for="title">product title:</label>
              <input type="text" required required class="form-control" name="title"/>
          </div>
          <div class="form-group">
            <label for="title">product title fa :</label>
            <input type="text" required class="form-control" name="title_fa"/>
        </div>

          <div class="form-group">
            <label for="title"> des :</label>
            {{-- <input type="text" required class="form-control" name="des"/> --}}
            {{-- <textarea id="summernote" name="des"  form="form" ></textarea> --}}
            <input name="des"  type="hidden">
            <div id="summernote"> </div>

        </div>
        <div class="form-group">
            <label for="title"> des fa :</label>
            {{-- <input type="text" required class="form-control" name="des_fa"/> --}}
            {{-- <textarea id="summernote_fa" name="des_fa"  form="form" ></textarea> --}}
            <input name="des_fa"  type="hidden">
            <div id="summernote_fa"> </div>
        </div>
        <div class="form-group">
                <label for="title"> image :</label>
                <input type="file" required id="image" name="image"/>
            </div>

          <button type="submit" class="btn btn-primary">Create product</button>
      </form>
  </div>
</div>
<script>
var toolbarOptions = [
  ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
  ['blockquote', 'code-block'],
  [{ 'header': 1 }, { 'header': 2 }],               // custom button values
  [{ 'list': 'ordered'}, { 'list': 'bullet' }],
  [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
  [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
  [{ 'direction': 'rtl' }],                         // text direction
  [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
  [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

  [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
  [{ 'font': [] }],
  [{ 'align': [] }],
  ['clean']                                         // remove formatting button
];
var options = {
    modules: { toolbar: toolbarOptions },
  placeholder: 'Waiting for your precious content',
  theme: 'snow'
};
var editor = new Quill('#summernote', options);
var editor_fa = new Quill('#summernote_fa', options);
var form = document.getElementById("form"); // get form by ID
form.onsubmit = function() { // onsubmit do this first
    var des = document.querySelector('input[name=des]'); // set name input var
    var des_fa = document.querySelector('input[name=des_fa]'); // set name input var
    des.value =  editor.root.innerHTML;
    des_fa.value =  editor_fa.root.innerHTML;
    return true; // submit form
}
</script>
@endsection

