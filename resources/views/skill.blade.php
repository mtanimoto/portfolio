@extends('layouts.common')

@section('title', 'スキル')

@section('keywords', 'A,B,C')
@section('description', 'たにもとまさしのポートフォリオです')

@include('layouts.head')

@include('layouts.header')

@section('content')
    <div class="card-columns">
        <div class="card col-auto" style="width: 18rem;">
            <div class="card-body">
                <h1 class="card-title fab fa-java">&nbsp;Java</h1>
                <span class="badge badge-pill badge-secondary float-right">使用歴：5年</span>
                <p>スキル；★★★★★</p>
                <p class="card-text">1番馴染みのある言語です。数年前にJavaSE8 Gold取りました。</p>
            </div>
        </div>
        <div class="card col-auto" style="width: 18rem;">
            <div class="card-body">
                <h1 class="card-title fab fa-php">&nbsp;PHP</h1>
                <span class="badge badge-pill badge-secondary float-right">使用歴：2年</span>
                <p>スキル；★★★★☆</p>
                <p class="card-text">現在メインで使っています。このサイトもPHP+Laravelで作成しました。</p>
            </div>
        </div>
        <div class="card col-auto" style="width: 18rem;">
            <div class="card-body">
                <h1 class="card-title fab fa-html5">&nbsp;HTML</h1>
                <span class="badge badge-pill badge-secondary float-right">使用歴：5年</span>
                <p>スキル；★★☆☆☆</p>
                <p class="card-text">本格的に書いたことはありません。ググりながらなんとかやってます。</p>
            </div>
        </div>
        <div class="card col-auto" style="width: 18rem;">
            <div class="card-body">
                <h1 class="card-title fab fa-css3">&nbsp;CSS</h1>
                <span class="badge badge-pill badge-secondary float-right">使用歴：5年</span>
                <p>スキル；★★☆☆☆</p>
                <p class="card-text">HTMLと同様です。少し触ってもすぐ忘れてしまいます。</p>
            </div>
        </div>
        <div class="card col-auto" style="width: 18rem;">
            <div class="card-body">
                <h1 class="card-title fab fa-js">&nbsp;JavaScript</h1>
                <span class="badge badge-pill badge-secondary float-right">使用歴：5年</span>
                <p>スキル；★★★☆☆</p>
                <p class="card-text">素のJavaScriptはあまり使っていません。主にJQueryを使ってきました。</p>
            </div>
        </div>
    </div>
@endsection

@include('layouts.footer')