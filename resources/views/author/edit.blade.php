@extends('welcome')
@section('cards')
    <form action="/edit-book/{{ $book['id'] }}" class="container" method="POST" enctype="multipart/form-data">

        @csrf
        <!-- Email input -->
        <div class="form-outline mb-1">
            <input name="title" type="text" id="form1Example1" class="form-control" value="{{ $book['title'] }}" />
            <label class="form-label" for="form1Example1">Title</label>
        </div>
        @error('title')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <!-- Password input -->
        {{-- <div class="form-outline mb-1"> --}}
        <input hidden name="author_id" type="text" id="form1Example2" class="form-control"
            value="{{ $book['author']->id }}" />
        {{-- <label class="form-label" for="form1Example2">Author</label> --}}
        {{-- </div> --}}
        {{-- @error('author') --}}
        {{-- <small class="text-danger ">{{ $message }}</small> --}}
        {{-- @enderror --}}

        <div class="form-outline mb-1">
            <input name="country" type="text" id="form1Example2" class="form-control" value="{{ $book['country'] }}" />
            <label class="form-label" for="form1Example2">Country</label>
        </div>
        @error('country')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="form-outline mb-1">
            <input name="language" type="text" id="form1Example2" class="form-control" value="{{ $book['language'] }}" />
            <label class="form-label" for="form1Example2">Language</label>
        </div>
        @error('language')
            <small class="text-danger ">{{ $message }}</small>
        @enderror

        <div class="form-outline mb-1">
            <input name="pages" type="text" id="form1Example2" class="form-control" value="{{ $book['pages'] }}" />
            <label class="form-label" for="form1Example2">Pages</label>
        </div>
        @error('pages')
            <small class="text-danger ">{{ $message }}</small>
        @enderror

        <div class="form-outline mb-1 ">
            <input name="year" type="text" id="form1Example2" class="form-control" value="{{ $book['year'] }}" />
            <label class="form-label" for="form1Example2">Year</label>
        </div>
        @error('year')
            <small class="text-danger ">{{ $message }}</small>
        @enderror

        <div class="form-outline mb-1 ">
            <input name="imageLink" type="file" id="form1Example2" class="form-control"
                value="{{ $book['imageLink'] }}" />
            <label class="form-label" for="form1Example2"></label>
        </div>
        @error('imageLink')
            <small class="text-danger ">{{ $message }}</small>
        @enderror





        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block">ADD</button>
    </form>
@endsection
