@php
    $social_links = config('navmenues.social_links');
@endphp

<footer>
    @include('partials.footernavsection')

    <section class="bottom-socials-bar">
        <a href="#" class="visual-btn">
            SIGN-UP NOW!
        </a>

        <div class="socials">
            <span>
                FOLLOW US
            </span>

            <ul>
                @foreach ($social_links as $link)
                    <li>
                        <a href="{!! $link['url'] !!}">
                            <img src="{!! Vite::asset('resources/images/social-icons/' . $link['menu_icon']) !!}" alt="{!! $link['menu_text'] !!}">
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
</footer>
