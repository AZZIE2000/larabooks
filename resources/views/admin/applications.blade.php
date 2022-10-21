{{-- @extends('welcome')

@section('cards')
    <form action="/store-author" class="container" method="POST" enctype="multipart/form-data">

        @csrf
        <!-- Email input -->
        <div class="form-outline mb-1">
            <input name="bio" type="text" id="form1Example1" class="form-control" value="{{ old('bio') }}" />
            <label class="form-label" for="form1Example1">Bio</label>
        </div>
        @error('bio')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="form-outline mb-1">
            <input name="country" type="text" id="form1Example2" class="form-control" value="{{ old('country') }}" />
            <label class="form-label" for="form1Example2">Country</label>
        </div>
        @error('country')
            <small class="text-danger">{{ $message }}</small>
        @enderror


        <div class="form-outline mb-1">
            <input name="age" type="text" id="form1Example2" class="form-control" value="{{ old('age') }}" />
            <label class="form-label" for="form1Example2">Age</label>
        </div>
        @error('age')
            <small class="text-danger ">{{ $message }}</small>
        @enderror





        <div class="form-outline mb-1">
            <input name="phone" type="text" id="form1Example2" class="form-control" value="{{ old('phone') }}" />
            <label class="form-label" for="form1Example2">Phone</label>
        </div>
        @error('phone')
            <small class="text-danger ">{{ $message }}</small>
        @enderror


        <div class="form-outline mb-1 ">
            <input name="image" type="file" id="form1Example2" class="form-control" value="{{ old('year') }}" />

        </div>
        @error('image')
            <small class="text-danger ">{{ $message }}</small>
        @enderror


        <div class="form-outline mb-1">
            <div class="form-outline mb-1 border border-2">
                <select name="gender" class="select form-control select-initialized">


                    <option selected disabled value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="Other">Rather not say</option>

                </select>
            </div>
        </div>
        @error('gender')
            <small class="text-danger ">{{ $message }}</small>
        @enderror

        <div class="form-outline mb-1 border border-2">
            <select aria-placeholder="Select User" name="user_id" class="select form-control select-initialized">
                <option selected disabled value="">Select User</option>
                @foreach ($users as $user)
                    @if ($user->role == 'user')
                        <option value="{{ $user->id }}">{{ $user->email }}</option>
                    @endif
                @endforeach

            </select>
        </div>
        @error('user_id')
            <small class="text-danger ">{{ $message }}</small>
        @enderror


        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block">ADD</button>
    </form>
@endsection --}}
@extends('welcome')

@section('cards')
    @if ($requests->count() == 0)
        <h1 class="text-center my-5">THERE ARE NO NEW REQUESTS !</h1>
    @else
        <div class="container">

            {{-- ------------------------ --}}
            <table class="table align-middle mb-5 bg-white">
                <thead class="bg-light">
                    <tr>
                        <th>Name</th>
                        <th>About</th>
                        <th>Age</th>
                        <th>Phone</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($requests as $request)
                        {{-- {{ dd($requests) }} --}}
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('storage/' . $request['image']) }}" alt=""
                                        style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">{{ $request->user['name'] }}</p>
                                        <p class="text-muted mb-0">{{ $request->user['email'] }}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">{{ Str::of($request->bio)->upper() }}</p>

                            </td>
                            <td>{{ $request->age }}</td>
                            <td>{{ $request->phone }}</td>
                            {{-- <td>
                            <span class="badge badge-success rounded-pill d-inline">{{ $request }}</span>
                        </td>  --}}
                            <td>
                                <a href="/assign-new-author/{{ $request['id'] }}" type="button"
                                    class="btn btn-link btn-sm btn-rounded">
                                    accept
                                </a>
                                <a type="button" class="btn btn-link btn-sm btn-rounded">
                                    Deny
                                </a>
                            </td>
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
    @endif
@endsection
