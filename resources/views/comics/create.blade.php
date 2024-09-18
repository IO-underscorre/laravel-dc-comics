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

                <form action="{{ route('comics.store') }}" method="POST" class="create-form">
                    @csrf

                    <div class="form-side">
                        <div class="input-group">
                            <label for="title">
                                TITLE
                            </label>
                            <input type="text" id="title" name="title" maxlength="125" required>
                        </div>

                        <div class="input-group">
                            <label for="series">
                                SERIES
                            </label>
                            <input type="text" id="series" name="series" maxlength="125" required>
                        </div>

                        <div class="input-group">
                            <label for="issue_number">
                                ISSUE NUMBER
                            </label>
                            <input type="number" id="issue_number" name="issue_number" min="0" max="65535"
                                required>
                        </div>

                        <div class="input-group">
                            <label for="summary">
                                SUMMARY
                            </label>
                            <textarea id="summary" name="summary" rows="6"></textarea>
                        </div>
                    </div>

                    <div class="form-side">
                        <div class="input-group">
                            <label for="cover_image">
                                COVER IMAGE
                            </label>
                            <input type="text" id="cover_image" name="cover_image" maxlength="510">
                        </div>

                        <div class="input-group">
                            <label for="release_date">
                                RELEASE DATE
                            </label>
                            <input type="date" id="release_date" name="release_date">
                        </div>

                        <div class="input-group">
                            <label for="page_count">
                                NUMBER OF PAGES
                            </label>
                            <input type="number" id="page_count" name="page_count" min="0" max="65535">
                        </div>

                        <div class="input-group">
                            <label for="price">
                                PRICE
                            </label>
                            <input type="number" id="price" name="price" step="0.01" min="0"
                                max="99999999.99" required>
                        </div>

                        <div class="option-group">
                            <input type="reset" value="RESET">
                            <input type="submit" value="SUBMIT">
                        </div>
                    </div>
                </form>
            </div>
        </section>

        @include('partials.comicsnav')
    </main>
@endsection
