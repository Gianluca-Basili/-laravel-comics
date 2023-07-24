<header>
    <div class="heder-top">

    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="{{url('/')}}">
                        <img src="{{Vite::asset('/resources/img/dc-logo.png')}}">
                    </a>
                </div>
                <nav>
                    <ul class="list-unstyled">
                        <li class="list-item"><a href="#">characters</a></li>
                        <li class="list-item"><a href="#" class="{{Route::currentRouteName() ==='homepage' ? 'active' : ''}}">comics</a></li>
                        <li class="list-item"><a href="#">movies</a></li>
                        <li class="list-item"><a href="#">tv</a></li>
                        <li class="list-item"><a href="#">games</a></li>
                        <li class="list-item"><a href="#">collectibles</a></li>
                        <li class="list-item"><a href="#">videos</a></li>
                        <li class="list-item"><a href="#">fans</a></li>
                        <li class="list-item"><a href="#">news</a></li>
                        <li class="list-item"><a href="#">shop</a></li>
                       
                    </ul>
                </nav>
                <input type="text" placeholder="Search">
            </div>
        </div>
    </div>
</header>