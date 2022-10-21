@extends('welcome')

@section('cards')
    <div class="container">
        {{-- <div class="dropdown mb-4">
            <a class="btn btn-primary " type="button" href="/add">
                ADD New Book
            </a>

        </div> --}}

        <div class="row">
            @if ($books->count() == 0)
                <h1 class="text-center my-5">THE BIN IS EMPTY!</h1>
            @endif
            @foreach ($books as $book)
                <div class="card mb-3 col-lg-4 col-md-6 col-sm-12" style="max-width: 540px;">
                    <div class="position-relative position-relative-example">
                        <div class="position-absolute top-0 end-0">

                            {{-- <h1 data-mdb-toggle="dropdown" aria-expanded="false">...</h1> --}}
                            <i data-mdb-toggle="dropdown" aria-expanded="false"
                                class="fa-solid fa-ellipsis fa-2x float-end "></i>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item fs-5" href="/restoreitem/{{ $book['id'] }}">restore</a>
                                </li>

                                <li>
                                    <form method="POST" action="/deleteForEver/{{ $book['id'] }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick=" return  confirm('Are you sure you want to delete for ever?') "
                                            class="dropdown-item bg-danger text-dark fs-5">Delete</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-4">

                            <img src="{{ asset('storage/' . $book['imageLink']) }}" alt="image"
                                class="img-fluid rounded-start  my-1 " />

                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <h5 class="card-title">{{ $book['title'] }}</h5>
                                <style>
                                    .list-group-item {
                                        padding: 1px !important;
                                    }
                                </style>
                                <ul class="list-group list-group-light list-group-small ">
                                    <li class="list-group-item px-4">Author:
                                        {{ Str::of($book->author->user['name'])->upper() }}</li>

                                    <li class="list-group-item px-4">Language: {{ $book['language'] }}</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
