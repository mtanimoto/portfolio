@extends('layouts.common')

@section('title', $article->title)

@section('keywords', 'たにもと,まさし,blog,ブログ')
@section('description', 'たにもとまさしのポートフォリオです。')

@include('layouts.head')

@include('layouts.header')

@section('content')
<div style="max-width: 800px; margin: auto;">
    <section class="jumbotron bgOrange">
        <h1 class="articleTitle display-3">{{ $article->title }}</h1>
        <h6 class="createdAt">&nbsp;{{ $article->created_at_jst }}</h6>
    </section>
    <div class="md2html-container">
        <article class="blogContent card card-body border border-0" style="margin-bottom: 10px;">
            {!! $article->content !!}
        </article>
    </div>
    <section class="card card-body border border-0">
        <div class="tag">
            @foreach ($article->tags as $tag)
                <a class="tagItem fas fa-tag badge badge-primary text-light" href="#">&nbsp;{{ $tag->tag }}</a>
            @endforeach
        </div>
    </section>
</div>
@endsection

@include('layouts.footer')