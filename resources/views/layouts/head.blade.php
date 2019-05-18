@section('head')
<meta charset="UTF-8">
<title>@yield('title')</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" itemprop="description" content="@yield('description')">
<meta name="keywords" itemprop="keywords" content="@yield('keywords')">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@yield('pageCss')
@yield('pageJs')
@endsection