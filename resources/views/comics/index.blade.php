@extends('layouts.main')

@section('page_title')
    Comics
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

                <table class="comics-table">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Series</th>
                            <th scope="col">Issue Number</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                            <tr>
                                <td>{{ $comic->title }}</td>
                                <td>{{ $comic->series }}</td>
                                <td>{{ $comic->issue_number }}</td>
                                <td>
                                    <menu class="table-options">
                                        <li>
                                            <a href="{{ route('comics.show', $comic) }}">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </li>
                                    </menu>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td class="table-options">
                                <a href="{{ route('comics.create') }}">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        @include('partials.comics.main_nav')
    </main>
@endsection
