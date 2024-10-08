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
            <input type="text" id="title" name="title" @error('title') class="error-inputted" @enderror
                value="{!! old('title', $is_update_form ? $comic_to_update->title : '') !!}" minlength="3" maxlength="125" placeholder="Title..." required>
            @error('title')
                <small class="error-message">{{ $message }}</small>
            @enderror
        </div>

        <div class="input-group">
            <label for="series">
                SERIES
            </label>
            <input type="text" id="series" name="series" @error('series') class="error-inputted" @enderror
                value="{!! old('series', $is_update_form ? $comic_to_update->series : '') !!}" minlength="3" maxlength="125" placeholder="Series..." required>
            @error('series')
                <small class="error-message">{{ $message }}</small>
            @enderror
        </div>

        <div class="input-group">
            <label for="issue_number">
                ISSUE NUMBER
            </label>
            <input type="number" id="issue_number" name="issue_number"
                @error('issue_number') class="error-inputted" @enderror min="0" max="65535"
                value="{!! old('issue_number', $is_update_form ? $comic_to_update->issue_number : '') !!}" placeholder="Issue number..." required>
            @error('issue_number')
                <small class="error-message">{{ $message }}</small>
            @enderror
        </div>

        <div class="input-group">
            <label for="summary">
                SUMMARY
            </label>
            <textarea id="summary" name="summary" @error('summary') class="error-inputted" @enderror rows="6"
                placeholder="Summary...">{!! old('summary', $is_update_form ? $comic_to_update->summary : '') !!}</textarea>
            @error('summary')
                <small class="error-message">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="form-side">
        <div class="input-group">
            <label for="cover_image">
                COVER IMAGE
            </label>
            <input type="text" id="cover_image" name="cover_image"
                @error('cover_image') class="error-inputted" @enderror value="{!! old('cover_image', $is_update_form ? $comic_to_update->cover_image : '') !!}" maxlength="510"
                placeholder="Cover image URL...">
            @error('cover_image')
                <small class="error-message">{{ $message }}</small>
            @enderror
        </div>

        <div class="input-group">
            <label for="release_date">
                RELEASE DATE
            </label>
            <input type="date" id="release_date" name="release_date"
                @error('release_date') class="error-inputted" @enderror value="{!! old('release_date', $is_update_form ? $comic_to_update->release_date : '') !!}"
                placeholder="Release date...">
            @error('release_date')
                <small class="error-message">{{ $message }}</small>
            @enderror
        </div>

        <div class="input-group">
            <label for="page_count">
                NUMBER OF PAGES
            </label>
            <input type="number" id="page_count" name="page_count"
                @error('page_count') class="error-inputted" @enderror value="{!! old('page_count', $is_update_form ? $comic_to_update->page_count : '') !!}" min="0"
                max="65535" placeholder="Number of pages...">
            @error('page_count')
                <small class="error-message">{{ $message }}</small>
            @enderror
        </div>

        <div class="input-group">
            <label for="price">
                PRICE
            </label>
            <input type="number" id="price" name="price" @error('price') class="error-inputted" @enderror
                value="{!! old('price', $is_update_form ? $comic_to_update->price : '') !!}" step="0.01" min="0" max="999999.99" placeholder="Price..."
                required>
            @error('price')
                <small class="error-message">{{ $message }}</small>
            @enderror
        </div>

        <div class="option-group">
            <input type="reset" value="RESET">
            <input type="submit" value="SUBMIT">
        </div>
    </div>
</form>
