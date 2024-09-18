@extends('layouts.main')

@section('page_title')
    Comics - {{ $comic->title }}
@endsection

@section('jumbo')
    @include('partials.comics.jumbotron')
@endsection

@section('content')
    <main>
        <section class="current-series">
            <div class="section-content">
                <h2 class="section-title">
                    {{ $comic->title }}
                </h2>

                <article class="comic-container">
                    <figure>
                        <img src="{{ isset($comic->cover_image) && exif_imagetype($comic->cover_image) ? $comic->cover_image : Vite::asset('resources/images/default-cover.jpg') }}"
                            alt="{{ $comic->title }}">
                    </figure>

                    <div class="comic-infos">
                        <div class="info-group">
                            <span class="info-label">
                                TITLE:
                            </span>
                            <strong class="info-text">
                                {{ $comic->title }}
                            </strong>
                        </div>

                        <div class="info-group">
                            <span class="info-label">
                                ISSUE NUMBER:
                            </span>
                            <strong class="info-text">
                                {{ $comic->issue_number }}
                            </strong>
                        </div>

                        <div class="info-group">
                            <span class="info-label">
                                SERIES:
                            </span>
                            <strong class="info-text">
                                {{ $comic->series }}
                            </strong>
                        </div>

                        <div class="info-group">
                            <span class="info-label">
                                PAGE COUNT:
                            </span>
                            <strong class="info-text">
                                {{ $comic->page_count }} pages
                            </strong>
                        </div>

                        <div class="info-group">
                            <span class="info-label">
                                SUMMARY:
                            </span>
                            <strong class="info-text">
                                {{ $comic->summary }}
                            </strong>
                        </div>

                        <div class="info-group">
                            <span class="info-label">
                                PRICE:
                            </span>
                            <strong class="info-text">
                                $ {{ $comic->price }}
                            </strong>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        @include('partials.comicsnav')
    </main>
@endsection
