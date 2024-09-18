@extends('layouts.main')

@section('page_title')
    Comics - Modify a comic issue
@endsection

@section('jumbo')
    @include('partials.comics.jumbotron')
@endsection

@section('content')
    <main>
        <section class="current-series">
            <div class="section-content">
                <h2 class="section-title">
                    MODIFY THIS COMIC ISSUE
                </h2>

                @include('partials.comics.input_form', [
                    'action' => route('comics.update', $comic->id),
                    'comic_to_update' => $comic,
                ])
            </div>
        </section>

        @include('partials.comics.main_nav')
    </main>
@endsection
