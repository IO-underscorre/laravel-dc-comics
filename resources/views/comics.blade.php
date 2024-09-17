@extends('layouts.main')

@section('page_title')
    Comics
@endsection

@section('jumbo')
    <section class="jumbotron">
        <img src="{!! Vite::asset('resources/images/jumbotron.jpg') !!}" alt="DC Comics">
    </section>
@endsection


@section('content')
    <main>
        <section class="current-series">
            <div>
                <h2>
                    CURRENT SERIES
                </h2>

                <ul>
                    @foreach ($comics_issues as $issue)
                        <li>
                            <x-comicissue :title="$issue['title']" :image="$issue['thumb']" />
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        @include('partials.comicsnav')
    </main>
@endsection
