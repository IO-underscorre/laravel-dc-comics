@php
    $comics_nav_links = config('navmenues.comics_nav_links');
@endphp

<section class="comics-utilities-section">
    <menu>
        @foreach ($comics_nav_links as $link)
            <li>
                <a href="#">
                    <div class="link-icon">
                        <img src="{!! Vite::asset('resources/images/buy-icons/' . $link['menu_icon']) !!}" alt="{!! $link['menu_text'] !!}">
                    </div>

                    <span>
                        {{ $link['menu_text'] }}
                    </span>
                </a>
            </li>
        @endforeach
    </menu>
</section>
