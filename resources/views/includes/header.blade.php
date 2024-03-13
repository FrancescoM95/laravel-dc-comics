<header class="container">
    <figure>
        <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="Logo DC" id="logo">
    </figure>
    <nav>
        <ul class="m-0">
            <li>
                <a href="{{route('home')}}" class="{{Route::is('home') ? 'active' : ''}}">HOME</a>
            </li>
            <li>
                <a href="{{route('comics.index')}}" class="{{Route::is('comics.index') ? 'active' : ''}}">COMICS</a>
            </li>
            <li>
                <a href="">MOVIES</a>
            </li>
            <li>
                <a href="">TV</a>
            </li>
            <li>
                <a href="">GAMES</a>
            </li>
            <li>
                <a href="">COLLECTIBLES</a>
            </li>
            <li>
                <a href="">VIDEOS</a>
            </li>
            <li>
                <a href="">FANS</a>
            </li>
            <li>
                <a href="">NEWS</a>
            </li>
            <li>
                <a href="">SHOP</a>
            </li>
        </ul>
    </nav>
</header>
