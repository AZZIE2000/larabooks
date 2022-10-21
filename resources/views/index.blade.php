@extends('welcome')

@section('cards')
    <div class="container">
        <div class="mb-5 text-center position-relative">
            <h1 class="position-absolute top-50 start-50 translate-middle text-white">Welcome to the books heaven
            </h1>
            <img class="w-100 mx-auto" src="/Books-Banner.jpg" alt="">

        </div>
        <div class="dropdown mb-4">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown"
                aria-expanded="false">
                Filter
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="/">ascending</a></li>
                <li><a class="dropdown-item" href="/sort/des">descending</a></li>
            </ul>
        </div>
        <div class="row">

            @foreach ($books as $book)
                <div class="card mb-3 col-lg-4 col-md-6 col-sm-12" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <a href="/show/{{ $book['id'] }}">
                                <img src="{{ asset('storage/' . $book['imageLink']) }}" alt="image"
                                    class="img-fluid rounded-start  my-1 " />
                            </a>
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
                                        {{ Str::of($book->author->user['name'])->upper() }}
                                    </li>

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
