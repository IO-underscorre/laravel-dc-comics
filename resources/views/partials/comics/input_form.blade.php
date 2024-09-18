@php
    $is_update_form = isset($comic_to_update) ? true : false;
@endphp


<form action="{{ $action }}" method="POST" class="comics-form">
    @csrf

    @if ($is_update_form)
        @method('PUT')
    @endif

    <div class="form-side">
        <div class="input-group">
            <label for="title">
                TITLE
            </label>
            <input type="text" id="title" name="title" maxlength="125" {!! $is_update_form ? 'value = "' . $comic_to_update->title . '"' : '' !!} required>
        </div>

        <div class="input-group">
            <label for="series">
                SERIES
            </label>
            <input type="text" id="series" name="series" maxlength="125" {!! $is_update_form ? 'value = "' . $comic_to_update->series . '"' : '' !!} required>
        </div>

        <div class="input-group">
            <label for="issue_number">
                ISSUE NUMBER
            </label>
            <input type="number" id="issue_number" name="issue_number" min="0" max="65535"
                {!! $is_update_form ? 'value = "' . $comic_to_update->issue_number . '"' : '' !!} required>
        </div>

        <div class="input-group">
            <label for="summary">
                SUMMARY
            </label>
            <textarea id="summary" name="summary" rows="6">{{ $is_update_form ? $comic_to_update->summary : '' }}</textarea>
        </div>
    </div>

    <div class="form-side">
        <div class="input-group">
            <label for="cover_image">
                COVER IMAGE
            </label>
            <input type="text" id="cover_image" name="cover_image" maxlength="510" {!! $is_update_form ? 'value = "' . $comic_to_update->cover_image . '"' : '' !!}>
        </div>

        <div class="input-group">
            <label for="release_date">
                RELEASE DATE
            </label>
            <input type="date" id="release_date" name="release_date" {!! $is_update_form ? 'value = "' . $comic_to_update->release_date . '"' : '' !!}>
        </div>

        <div class="input-group">
            <label for="page_count">
                NUMBER OF PAGES
            </label>
            <input type="number" id="page_count" name="page_count" min="0" max="65535"
                {!! $is_update_form ? 'value = "' . $comic_to_update->page_count . '"' : '' !!}>
        </div>

        <div class="input-group">
            <label for="price">
                PRICE
            </label>
            <input type="number" id="price" name="price" step="0.01" min="0" max="99999999.99"
                {!! $is_update_form ? 'value = "' . $comic_to_update->price . '"' : '' !!} required>
        </div>

        <div class="option-group">
            <input type="reset" value="RESET">
            <input type="submit" value="SUBMIT">
        </div>
    </div>
</form>
