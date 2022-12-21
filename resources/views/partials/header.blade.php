<div class="top-header">
    <ul class="container">
        <li>Dc Power℠ Visa®</li>
        <li>Additional Dc Sites</li>
    </ul>
</div>
<header>
    <div class="container header-container">
        <div class="logo">
            <a href="">
                <a href="{{route('home')}}">
                    <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC logo">
                </a>
            </a>
        </div>
       
        
        <ul>
            {{-- <li>
                <a href="#">characters</a>
            </li> --}}
            <li>
                <a class="{{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">home</a>
            </li>
            <li>
                <a class="{{Route::currentRouteName() == 'comics.index' ? 'active' : ''}}" href="{{route('comics.index')}}">comics</a>
            </li>
            <li>
                <a class="{{Route::currentRouteName() == 'comics.create' ? 'active' : ''}}" href="{{route('comics.create')}}">add comics</a>
            </li>
            {{-- <li>
                <a href="#">movies</a>
            </li>
            <li>
                <a href="#">tv</a>
            </li>
            <li>
                <a href="#">games</a>
            </li>
            <li>
                <a href="#">collectables</a>
            </li>
            <li>
                <a href="#">videos</a>
            </li>
            <li>
                <a href="#">fans</a>
            </li>
            <li>
                <a href="#">news</a>
            </li>
            <li>
                <a href="#">shop</a>
            </li> --}}
        </ul>
        <form class="relative">
            <input type="search" placeholder="Search" class="search-header">
            <i class="fa-solid fa-magnifying-glass"></i>
        </form>
    </div>
    
</header>