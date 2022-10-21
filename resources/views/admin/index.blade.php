@extends('welcome')

@section('cards')
    <div class="container">
        <div class="d-flex gap-4">
            {{-- <div class="dropdown mb-4">
                <a class="btn btn-primary " type="button" href="/add">
                    ADD New Book
                </a>

            </div> --}}
            <div class="dropdown mb-4">
                <a class="btn btn-primary " type="button" href="/applications">
                    ADD New Author
                </a>

            </div>
            <div class="dropdown mb-4">
                <a class="btn btn-primary " type="button" href="/manage-deleted">
                    Deleted Books
                </a>

            </div>
        </div>
        {{-- ------------------------ --}}
        <h3 class="mt-3">Authors Table</h3>
        <table class="table align-middle mb-5 bg-white">
            <thead class="bg-light">
                <tr>
                    <th>Name</th>
                    <th>Country</th>
                    <th>Age</th>
                    <th>Phone</th>
                    <th>Books</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($authors as $author)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('storage/' . $author['image']) }}" alt=""
                                    style="width: 45px; height: 45px" class="rounded-circle" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">{{ $author->user['name'] }}</p>
                                    <p class="text-muted mb-0">{{ $author->user['email'] }}</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">{{ Str::of($author->country)->upper() }}</p>

                        </td>
                        <td>{{ $author->age }}</td>
                        <td>{{ $author->phone }}</td>
                        <td>
                            <span class="badge badge-success rounded-pill d-inline">{{ $author->books->count() }}</span>
                        </td>
                        {{-- <td>
                            <button type="button" class="btn btn-link btn-sm btn-rounded">
                                Edit
                            </button>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- <div class="container">


        <div class="row">

            @foreach ($books as $book)
                <div class="card mb-3 col-lg-4 col-md-6 col-sm-12" style="max-width: 540px;">
                    <div class="position-relative position-relative-example">
                        <div class="position-absolute top-0 end-0">


                            <i data-mdb-toggle="dropdown" aria-expanded="false"
                                class="fa-solid fa-ellipsis fa-2x float-end "></i>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item fs-5" href="/restoreitem/{{ $book['id'] }}">restore</a></li>

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
                                        {{ Str::of($book->author->user['name'])->upper()->upper() }}
                                    </li>
                                    <li class="list-group-item px-4">Country: {{ $book['country'] }}</li>
                                    <li class="list-group-item px-4">Language: {{ $book['language'] }}</li>
                                    <li class="list-group-item px-4">pages: {{ $book['pages'] }}</li>
                                    <li class="list-group-item px-4">Year: {{ $book['year'] }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div> --}}
@endsection
