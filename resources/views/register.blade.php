@extends('welcome')

@section('cards')
<h1 class="text-center bold">Log IN</h1>
<div class="container border p-4 w-50 mb-5">
<form method="POST" action="/store">
    @csrf
    <!-- Name input -->
    <div class="form-outline mb-4">
      <input name="name" type="text" id="form2Example1" class="form-control" value="{{old('name')}}" />
      <label class="form-label" for="form2Example1">Name</label>
      @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
    </div>
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
    <!-- Password_confirmation input -->
    <div class="form-outline mb-4">
      <input name="password_confirmation" type="password" id="form2Example2" class="form-control" value="{{old('password')}}" />
      <label class="form-label" for="form2Example2">Confirm password</label>
      @error('password_confirmation')
        <small class="text-danger">{{$message}}</small>
    @enderror
    </div>
  
    <!-- 2 column grid layout for inline styling -->
   
  
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
  
    <!-- Register buttons -->
    <div class="text-center">
      <p>Already a member? <a href="/login">Login</a></p>
      
    </div>
  </form>
</div>
@endsection