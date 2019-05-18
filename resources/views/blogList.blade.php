@extends('layouts.common')

@section('title', 'たにもと　まさし - ブログ')

@section('keywords', 'たにもと,まさし,blog,ブログ')
@section('description', 'たにもとまさしのポートフォリオです。')

@include('layouts.head')

@include('layouts.header')

@section('content')
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        @foreach ($articles as $article)
        <div class="media pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"><title>一般的なプレースホルダ画像</title><rect fill="#007bff" width="100%" height="100%" /><text fill="#007bff" dy=".3em" x="50%" y="50%">32x32</text></svg>
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <a href="{{ url('/articles/' . $article->blog_article_id) }}" class="h3" style="position:relative;">
                    {{ $article->title }}
                </a>
            </p>
            <div>
                <div>
                <span class="h6 text-muted">
                    {{ $article->created_at_jst }}
                </span>
                </div>
                @auth
                    <div>
                        <form action="{{ url('/articles/edit/' . $article->blog_article_id) }}" method="GET" style="display: inline;">
                            {{ csrf_field() }}
                            <button class="btn btn-link">編集</button>
                        </form>
                        <form action="{{ url('/articles/delete/') }}" method="POST" style="display: inline;">
                            {{ csrf_field() }}
                            <button class="btn btn-link">削除</button>
                            <input type="hidden" name="blog_article_id" value="{{ $article->blog_article_id }}"/>
                        </form>
                    </div>
                @endauth
            </div>
        </div>
        @endforeach
    </div>
@endsection

@include('layouts.footer')