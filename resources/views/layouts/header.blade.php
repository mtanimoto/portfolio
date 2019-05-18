@section('header')
<header>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url('/') }}">Portfolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="ナビゲーションの切替">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                @if ( request()->is('profile') )
                        <a class="nav-link fas fa-user active" href="{{ url('/profile') }}">&nbsp;Profile</a>
                    @else
                        <a class="nav-link fas fa-user" href="{{ url('/profile') }}">&nbsp;Profile</a>
                    @endif
                </li>
                <li class="nav-item">
                    @if ( request()->is('skill*') )
                        <a class="nav-link fas fa-lightbulb active" href="{{ url('/skill') }}">&nbsp;Skill</a>
                    @else
                        <a class="nav-link fas fa-lightbulb" href="{{ url('/skill') }}">&nbsp;Skill</a>
                    @endif
                </li>
                <li class="nav-item">
                    @if ( request()->is('articles*') )
                        <a class="nav-link fas fa-blog active" href="{{ url('/articles') }}">&nbsp;Blog</a>
                    @else
                        <a class="nav-link fas fa-blog" href="{{ url('/articles') }}">&nbsp;Blog</a>
                    @endif
                </li>
            </ul>
        </div>
        @auth
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link fas fa-edit btn btn-success text-light" href="{{ url('/articles/create') }}">&nbsp;投稿する</a>
                    </li>
                </ul>
            </div>
        @endauth
    </nav>
</header>
@endsection