@extends('welcome')

@section('cards')
    @if ($apps->count() == 1)
        <h1 class="text-center my-5">Your application is in review &#128512;</h1>
    @else
        <form action="/joinus" class="container" method="POST" enctype="multipart/form-data">
            <h3 class="">join our family</h3>
            <p class="teer">please fill your info:</p>

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

            {{-- <div class="form-outline mb-1 border border-2"> --}}
            <input name="user_id" hidden value="{{ auth()->user()->id }}" type="text">
            {{-- </div> --}}
            {{-- @error('user_id') --}}
            {{-- <small class="text-danger ">{{ $message }}</small> --}}
            {{-- @enderror --}}


            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block">ADD</button>
        </form>
    @endif
@endsection
