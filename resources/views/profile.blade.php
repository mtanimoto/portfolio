@extends('layouts.common')

@section('title', 'プロフィール')

@section('keywords', 'たにもと,まさし')
@section('description', 'たにもとまさしのポートフォリオです。')

@include('layouts.head')

@include('layouts.header')

@section('content')
<div class="card-deck mb-2">
    <div class="card">
        <div class="card-header">
            名前
        </div>
        <div class="card-body">
            <h5 class="card-title">谷本 昌史</h5>
            <p class="card-text">「たにもと まさし」です。</p>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            生年月日
        </div>
        <div class="card-body">
            <h5 class="card-title">1987/6/9</h5>
            <p class="card-text">昭和62年生まれです。</p>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            出身地
        </div>
        <div class="card-body">
            <h5 class="card-title">茨城県</h5>
            <p class="card-text">小中高は茨城で過ごし、大学入学を機に東京へ上京しました。</p>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            職種
        </div>
        <div class="card-body">
            <h5 class="card-title">システムエンジニア</h5>
            <p class="card-text">
                よくいる文系SEです。でもプログラミングが好き。
                <br/>
                2018年4月に転職。現在は<a href="https://www.rococo.co.jp" target="_blank">株式会社ロココ</a>で働いています。
            </p>
        </div>
    </div>
</div>
<div class="card-deck mb-2">
    <div class="card">
        <div class="card-header">
            性格
        </div>
        <div class="card-body">
            <h5 class="card-title">人見知り。面倒くさがり。</h5>
            <p class="card-text">
                目立ったり主張したりすることが苦手。裏方で目立たずに作業するのが好きです。口癖「面倒くさい」。
            </p>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            好きなこと①
        </div>
        <div class="card-body">
            <h5 class="card-title">散歩</h5>
            <p class="card-text">
                歩いていて季節感を感じると気分が高まります。
            </p>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            好きなこと②
        </div>
        <div class="card-body">
            <h5 class="card-title">キーボード</h5>
            <p class="card-text">
                タイピング音を聞きながら寝ていた時期があります。 タイピングも好きです。<a href="https://www.e-typing.ne.jp" target="_blank">e-typing</a>や<a href="https://10fastfingers.com" target="_blank">10fastfingers</a>で練習することが多いです。
            </p>
        </div>
    </div>
</div>
@endsection

@include('layouts.footer')