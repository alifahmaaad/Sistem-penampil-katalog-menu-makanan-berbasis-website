@extends('templates.administrators.adminlte')
@section('title', 'Edit Article')
@section('breadcrumb', 'Articles')
@section('main')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>

<form action="{{ url('articles/'.$article->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <input class="form-control my-3 @error('title') is-invalid @enderror" type="text" id="title" name="title" placeholder="Article Title" aria-label="default input example" value="{{ $article->title }}">
    <div class="invalid-feedback">
        @error('title')
        {{ $message }}
        @enderror
    </div>

    <select class="form-select my-3 @error('author') is-invalid @enderror" aria-label="Default select example" id="author" name="author">
        <option value="{{ $article->author }}" selected>--- Select Author ---</option>
        <option value="Khoirul Roziq">Khoirul Roziq</option>
        <option value="Andika Pratama">Andika Pratama</option>
    </select>
    <div class="invalid-feedback">
        @error('author')
        {{ $message }}
        @enderror
    </div>

    <img src="{{ asset($article->thumbnail) }}" class="img-thumbnail" alt="thumbnail" width="400">
    

    <div class="mb-3">
        <input class="form-control @error('thumbnail') is-invalid @enderror" type="file" id="thumbnail" name="thumbnail">
    </div>
    <div class="invalid-feedback">
        @error('thumbnail')
        {{ $message }}
        @enderror
    </div>

    <textarea name="content" id="editor">
    {{ $article->content }}
    </textarea>

    <div class="form-group mt-3">
        <button class="btn btn-primary btn-block">Update</button>
    </div>

</form>

<!-- script -->

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection