<header id="site_header">
    <div class="my_container">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>
        <nav class="navbar">

            <div class="nav navbar-nav">
                <a class="nav-item nav-link active {{ Route::currentRouteName()=== 'home' ? 'active' : ''}}" href="{{route('home')}}" aria-current="page">Home Page</span></a>
                <a class="nav-item nav-link {{ Route::currentRouteName()=== 'description' ? 'active' : ''}}" href="{{route('description')}}">Description</a>
            </div>

            <!--  @foreach(Config::get('comics.menu') as $menu)
            @if($menu['text'] === "comics")
            <a href="{{route('home')}}" class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}">
                {{$menu['text']}}
            </a>
            @else
            <a href="#">
                {{$menu['text']}}
            </a>
            @endif

            @endforeach -->
        </nav>
        <!-- /.navbar -->
    </div>
</header>