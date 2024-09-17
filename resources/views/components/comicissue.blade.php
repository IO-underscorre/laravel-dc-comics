@props(['title', 'image'])

<article class="issue">
    <figure>
        <img src="{!! $image !!}" :alt="{!! $title !!}">
    </figure>

    <strong>
        {{ $title }}
    </strong>
</article>
