@extends('welcome')
@section('cards')
    <div class="container gap-4">
        <div class="d-flex gap-4">
            <div class="dropdown mb-4">
                <a class="btn btn-primary " type="button" href="/add">
                    ADD New Book
                </a>

            </div>

        </div>
        <div class="row">


            <div class="card mb-3 col-12">
                <div class="row ">
                    <div class="col-3">

                        <img src="{{ asset('storage/' . $author['image']) }}" alt="Author pic"
                            class="img-fluid w-100  border border-5  border-info rounded-circle" />

                    </div>
                    <div class="col-md-9">
                        <div class="float-end ">

                            <a href="/edit-auth-info" class="btn btn-primary btn-sm mt-2 ms-2 ">Edit <i
                                    class="fas fa-edit  fa-1x ms-1  " style="color: #7999cd"></i></a>
                        </div>

                        <div class="card-body  fa-1x">
                            <h3 class="card-title ps-3 mb-4">{{ Str::of($author->user['name'])->upper() }}</h3>
                            <ul class="list-group list-group-light list-group-small">
                                <li class="list-group-item px-4">About: {{ $author->bio }}</li>
                                <li class="list-group-item px-4">Country: {{ $author->country }}</li>
                                <li class="list-group-item px-4">Age: {{ $author->age }}</li>
                                <li class="list-group-item px-4">Books: {{ $author->books->count() }}</li>
                                <li class="list-group-item px-4">Phone: {{ $author->phone }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row ">

            @foreach ($author->books as $book)
                <div class="card mb-3 col-lg-4 col-md-6 col-sm-12" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <a href="/show/{{ $book['id'] }}">
                                <img src="{{ asset('storage/' . $book['imageLink']) }}" alt="image"
                                    class="img-fluid rounded-start  my-1 " />
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="">
                                <div>

                                    {{-- <h1 data-mdb-toggle="dropdown" aria-expanded="false">...</h1> --}}
                                    <i data-mdb-toggle="dropdown" aria-expanded="false"
                                        class="fa-solid fa-ellipsis fa-2x float-end"></i>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item fs-5" href="/edit/{{ $book['id'] }}">edit</a></li>

                                        <li>
                                            <form method="POST" action="/del/{{ $book['id'] }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    onclick=" return  confirm('Are you sure you want to delete?') "
                                                    class="dropdown-item bg-danger text-dark fs-5">Delete</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title">{{ $book['title'] }}</h5>
                                <style>
                                    .list-group-item {
                                        padding: 1px !important;
                                    }
                                </style>
                                <ul class="list-group list-group-light list-group-small ">
                                    <li class="list-group-item px-4">Author: {{ $book->author->user['name'] }}</li>
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
    @endsection
