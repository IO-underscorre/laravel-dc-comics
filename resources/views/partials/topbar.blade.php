@php
    $main_nav_links = config('navmenues.main_nav_links');
@endphp

<nav class="topbar">
    <div class="content-box">
        <a href="{!! route('home') !!}" class="logo">
            <img src="{!! Vite::asset('resources/images/dc-logo.png') !!}" alt="DC Comics">
        </a>

        <menu>
            @foreach ($main_nav_links as $link)
                <li class="{!! Route::currentRouteName() === $link['route_name'] ? 'active' : null !!}">
                    <a href="{!! route($link['route_name']) !!}">
                        {{ $link['menu_text'] }}
                    </a>
                </li>
            @endforeach
        </menu>
    </div>
</nav>
