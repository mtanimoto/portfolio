@extends('layouts.common')

@section('title', 'Portfolio')

@section('keywords', 'A,B,C')
@section('description', 'たにもとまさしのポートフォリオです')

@include('layouts.head')

@include('layouts.header')

@section('content')
    <section class="jumbotron">
        <h1>ポートフォリオはじめました</h1>
    </section>
@endsection

@include('layouts.footer')