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
                                            <button>
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button>
                                                <i class="fa-solid fa-pen"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button>
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </li>
                                    </menu>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>

        @include('partials.comicsnav')
    </main>
@endsection
