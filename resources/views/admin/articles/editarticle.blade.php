@extends('layouts.app') @section('content')
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
        </div>
        <br />
        @endif
        <form id="form" method="post" action="{{ route('articles.update', $article->id) }}" enctype="multipart/form-data">
            <div class="form-group">
                @csrf @method('PATCH')
                <label for="name">article title:</label>
                <input type="text" required class="form-control" name="title" value="{{$article->title}}" />
            </div>
            <div class="form-group">
                <label for="name">article title fa:</label>
                <input
                    type="text"
                    required
                    class="form-control"
                    name="title_fa"
                    value="{{$article->title_fa}}"
                />
            </div>
            <div class="form-group">
                <label for="price">des :</label>
                {{--
                <input type="text" required class="form-control" name="article_des" value="{{$article->des}}" /> --}}
                <input name="des" type="hidden" />
                <div id="summernote"></div>
            </div>
            <div class="form-group">
                <label for="price">des fa:</label>
                {{--
                <input type="text" required class="form-control" name="article_des_fa" value="{{$article->des_fa}}" />
                --}}
                <input name="des_fa" type="hidden" />
                <div id="summernote_fa"></div>
            </div>
            <div class="form-group">
                <label for="name">image:</label>
                <input type="file" name="image" />
                <img src="{{ URL::to('/') }}/images/{{ $article->image }}" class="img-thumbnail" width="100" />
                <input type="hidden" name="hidden_image" value="{{$article->image}}" />
            </div>
            <button type="submit" class="btn btn-primary">Update article</button>
        </form>
    </div>
</div>
<script>
    var toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'], // toggled buttons
        ['blockquote', 'code-block', 'image', 'link'],
        [{ header: 1 }, { header: 2 }], // custom button values
        [{ list: 'ordered' }, { list: 'bullet' }],
        [{ script: 'sub' }, { script: 'super' }], // superscript/subscript
        [{ indent: '-1' }, { indent: '+1' }], // outdent/indent
        [{ direction: 'rtl' }], // text direction
        [{ size: ['small', false, 'large', 'huge'] }], // custom dropdown
        [{ header: [1, 2, 3, 4, 5, 6, false] }],
        [{ color: [] }, { background: [] }], // dropdown with defaults from theme
        [{ font: [] }],
        [{ align: [] }],
        ['clean'] // remove formatting button
    ];
    var options = {
        modules: { toolbar: toolbarOptions },
        placeholder: 'Waiting for your precious content',
        theme: 'snow'
    };
    var editor = new Quill('#summernote', options);
    editor.root.innerHTML = '{!!html_entity_decode($article->des)!!} ';
    var editor_fa = new Quill('#summernote_fa', options);
    editor_fa.root.innerHTML = '{!!html_entity_decode($article->des_fa)!!} ';
    var form = document.getElementById('form'); // get form by ID
    form.onsubmit = function() {
        // onsubmit do this first
        var des = document.querySelector('input[name=des]'); // set name input var
        var des_fa = document.querySelector('input[name=des_fa]'); // set name input var
        des.value = editor.root.innerHTML;
        des_fa.value = editor_fa.root.innerHTML;
        return true; // submit form
    };
</script>
@endsection
