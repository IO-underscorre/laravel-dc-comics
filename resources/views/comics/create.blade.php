@extends('layouts.main')

@section('page_title')
    Comics - Add a new comic
@endsection

@section('jumbo')
    @include('partials.comics.jumbotron')
@endsection

@section('content')
    <main>
        <section class="current-series">
            <div class="section-content">
                <h2 class="section-title">
                    COMICS
                </h2>

                @include('partials.comics.input_form', [
                    'action' => route('comics.store'),
                    'comic_to_update' => null,
                ])
            </div>
        </section>

        @include('partials.comics.main_nav')
    </main>
@endsection
