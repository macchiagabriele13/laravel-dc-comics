<header id="site_header">
    <div class="my_container">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>
        <nav class="navbar">

            <div class="nav navbar-nav">
                <a class="nav-item nav-link  {{ Route::currentRouteName()=== 'home' ? 'active' : ''}}" href="{{route('home')}}" aria-current="page">Home Page</span></a>
                <a class="nav-item nav-link  {{ Route::currentRouteName()=== 'comics.index' ? 'active' : ''}}" href="{{route('comics.index')}}" aria-current="page">admin Comics</span></a>

            </div>

        </nav>
        <!-- /.navbar -->
    </div>
</header>