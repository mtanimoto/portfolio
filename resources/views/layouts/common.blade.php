<!DOCTYPE HTML>
<html lang="ja">
    <head>
        @yield('head')
    </head>
    <body>
        @yield('header')
        <main role="main" class="container">
            @yield('content')
        </main>
        @yield('footer')
    </body>
</html>