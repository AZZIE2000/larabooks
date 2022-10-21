@extends('welcome')
@section('cards')
    <form action="/edit-auth-form" class="container" method="POST" enctype="multipart/form-data">

        @csrf
        <!-- Email input -->
        <div class="form-outline mb-1">
            <input name="name" type="text" id="form1Example1" class="form-control" value="{{ $author->user['name'] }}" />
            <label class="form-label" for="form1Example1">Name</label>
        </div>
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <!-- Password input -->
        <div class="form-outline mb-1">
            <input name="bio" type="text" id="form1Example2" class="form-control" value="{{ $author['bio'] }}" />
            <label class="form-label" for="form1Example2">About</label>
        </div>
        @error('bio')
            <small class="text-danger ">{{ $message }}</small>
        @enderror

        <div class="form-outline mb-1">
            <input name="country" type="text" id="form1Example2" class="form-control" value="{{ $author['country'] }}" />
            <label class="form-label" for="form1Example2">Country</label>
        </div>
        @error('country')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="form-outline mb-1">
            <input name="age" type="text" id="form1Example2" class="form-control" value="{{ $author['age'] }}" />
            <label class="form-label" for="form1Example2">Age</label>
        </div>
        @error('age')
            <small class="text-danger ">{{ $message }}</small>
        @enderror

        <div class="form-outline mb-1">
            <input name="phone" type="text" id="form1Example2" class="form-control" value="{{ $author['phone'] }}" />
            <label class="form-label" for="form1Example2">Phone</label>
        </div>
        @error('phone')
            <small class="text-danger ">{{ $message }}</small>
        @enderror



        <div class="form-outline mb-1 ">
            <input name="image" type="file" id="imgin" class="form-control" value="{{ $author['image'] }}" />
            <label class="form-label" for="imgin"></label>
        </div>
        @error('image')
            <small class="text-danger ">{{ $message }}</small>
        @enderror

        <div class="form-outline mb-1">
            <div class="form-outline mb-1 border border-2">
                <select name="gender" class="select form-control select-initialized">


                    <option selected disabled value="">Select Gender</option>
                    @if ($author['gender'] == 'male')
                        <option selected value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="Other">Rather not say</option>
                    @endif
                    @if ($author['gender'] == 'female')
                        <option value="male">Male</option>
                        <option selected value="female">Female</option>
                        <option value="Other">Rather not say</option>
                    @endif
                    @if ($author['gender'] == 'Other')
                        <option selected value="male">Male</option>
                        <option value="female">Female</option>
                        <option selected value="Other">Rather not say</option>
                    @endif

                </select>
            </div>
        </div>
        @error('gender')
            <small class="text-danger ">{{ $message }}</small>
        @enderror

        <input hidden name="user_id" value="{{ $author->user['id'] }}" type="text">
        <input hidden name="image" value="{{ $author['imagea'] }}" type="text">
        <input hidden name="author_id" value="{{ $author->id }}" type="text">

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block">Edit Info</button>
    </form>
@endsection
