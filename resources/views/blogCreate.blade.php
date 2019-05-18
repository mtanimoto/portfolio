@extends('layouts.common')

@section('title', '記事 - 新規作成')

@section('keywords', 'たにもと,まさし,blog,ブログ')
@section('description', 'たにもとまさしのポートフォリオです。')

@include('layouts.head')

@include('layouts.header')

@section('content')
    <section class="blogEdit">
        <form action="{{ url('/articles/store') }}" method="POST">
            {{ csrf_field() }}
            <input type="text" class="form-control" name="title" placeholder="タイトル" required/>
            <input type="text" class="form-control" data-type="input" name="tags" placeholder="タグを半角スペース区切りで入力" />
            <textarea id="editor" rows="20" cols="100" class="form-control" name="content" placeholder="投稿する記事を書いてください"></textarea>
            <button class="submit nav-link fas fa-upload btn btn-primary float-right">&nbsp;保存する</button>
        </form>
    </section>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script>
        var simplemde = new SimpleMDE({
            element: document.getElementById("editor"),
            spellChecker: false,
        });
    </script>
@endsection

@include('layouts.footer')