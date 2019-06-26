<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>@lang('msg.fiteon')</title>
<link rel="stylesheet" href="/css/styles.css" />
<link rel="stylesheet" href="/css/app.css" />
<script src="/js/app.js"></script>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" />
{{-- font awesome --}}
<script src="https://kit.fontawesome.com/238c528f06.js"></script>
<!-- Scripts -->
{{--
<script src="{{ asset('js/app.js') }}" defer></script>
--}}
<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com" />
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />

{{--
<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet" />
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
--}}

<!-- Core build with no theme, formatting, non-essential modules -->
<link href="//cdn.quilljs.com/1.3.6/quill.core.css" rel="stylesheet" />
<script src="//cdn.quilljs.com/1.3.6/quill.core.js"></script>
<!-- Main Quill library -->
<script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

<!-- Theme included stylesheets -->
<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet" />
<link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet" />

@if (app()->getLocale()== 'fa')
<style>
    body {
        font-family: IRANSans !important;
        font-weight: 200;
    }
</style>
@endif
