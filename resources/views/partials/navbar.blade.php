<div class="container">
    <div class="navbar">
        <div class="logo">
            <img width="80" src="{{asset('img/dc-logo.png')}}" alt="">
        </div>
        <!-- /.logo -->
        <div class="header_menu">
            <ul>
                <li>
                    <a href="{{route('characters')}}" class="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}">Characters</a>
                </li>
                <li>
                    <a href="{{route('comics.index')}}" class="{{ Route::currentRouteName() === 'comics.index' || Route::currentRouteName() === 'comics.show' ? 'active' : '' }}">Comics</a>
                </li>
                <li>
                    <a href="{{route('movies')}}" class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}">Movies</a>
                </li>
                <li>
                    <a href="{{route('TV')}}">TV</a>
                </li>
                <li>
                    <a href="{{route('games')}}">Games</a>
                </li>
                <li>
                    <a href="{{route('collectibles')}}">Collectibles</a>
                </li>
                <li>
                    <a href="{{route('videos')}}">Videos</a>
                </li>
                <li>
                    <a href="{{route('fans')}}">Fans</a>
                </li>
                <li>
                    <a href="{{route('news')}}">News</a>
                </li>
                <li>
                    <a href="{{route('shop')}}">Shop</a>
                </li>
            </ul>
        </div>
        <!-- /.header_menu -->
    </div>
    <!-- /.navbar -->
</div>
<!-- /.container -->