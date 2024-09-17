@php
    $detailed_nav_categories = config('navmenues.detailed_nav_categories');
@endphp

<section class="footer-navigation-section">
    <div>
        <nav>
            @foreach ($detailed_nav_categories as $category)
                <div class="nav-category">
                    <strong>
                        {{ $category['title'] }}
                    </strong>

                    <menu>
                        @foreach ($category['links'] as $link)
                            <li>
                                <a href="#">
                                    {{ $link['menu_text'] }}
                                </a>
                            </li>
                        @endforeach
                    </menu>
                </div>
            @endforeach
        </nav>

        <div class="background-logo">
            <img src="{!! Vite::asset('resources/images/dc-logo-bg.png') !!}" alt="DC Comics">
        </div>
    </div>
</section>
