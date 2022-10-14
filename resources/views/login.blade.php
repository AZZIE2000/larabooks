@extends('welcome')

@section('cards')
<div class="container border p-4 ">
<form method="POST" action="authenticate">

    @csrf
   
    <!-- Email input -->
    <div class="form-outline mb-4">
      <input name="email" type="email" id="form2Example1" class="form-control" value="{{old('email')}}" />
      <label class="form-label" for="form2Example1">Email address</label>
      @error('email')
        <small class="text-danger">{{$message}}</small>
    @enderror
    </div>
  
    <!-- Password input -->
    <div class="form-outline mb-4">
      <input name="password" type="password" id="form2Example2" class="form-control" value="{{old('password')}}" />
      <label class="form-label" for="form2Example2">Password</label>
      @error('password')
        <small class="text-danger">{{$message}}</small>
    @enderror
    </div>
  
  
    <!-- 2 column grid layout for inline styling -->
   
  
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
  
    <!-- Register buttons -->
    <div class="text-center">
      <p>You're not a member? <a href="/register">register</a></p>
      
    </div>
  </form>
</div>
@endsection