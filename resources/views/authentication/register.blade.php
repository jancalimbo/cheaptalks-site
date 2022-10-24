@extends('base')

@section('content')

<div id="register-box" class="container col-md-6 offset-md-3 card mt-5">

  <h1 class="text-center">Register </h1>

  <form action="{{ '/register' }}" method="POST">
  {{ csrf_field() }}

  <div class="form-group">
    <label for="fname">First Name</label>
    <input type="fname" name="fname" id="fname" class="form-control">
    @error('fname')
      <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>
  <div class="form-group">
    <label for="lname">Last Name</label>
    <input type="lname" name="lname" id="lname" class="form-control">
    @error('lname')
      <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="username" name="username" id="username" class="form-control">
    @error('username')
    <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>
  
  {{-- <label for="gender">Gender</label> --}}
  <div class="form-floating mb-3">
    <select name="gender" class="form-select" id="" wire:model.defer="gender">
      <option value="" hidden="true">Choose</option>
      <option value="" selected disabled>Choose</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
    <label for="gender">Gender</label>
    @error('gender')
      <p class="text-danger">{{ $message }}</p>
    @enderror

  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" class="form-control">
    @error('email')
      <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="form-control">
    @error('password')
      <p class="text-danger">{{ $message }}</p>
      
    @enderror
  </div>
  <div class="form-group">
    <label for="password_confirmation">Confirm Password</label>
    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" >
    @error('password_confirmation')
      <p class="text-danger">{{ $message }}</p>
      
    @enderror
  </div>
  <div class="d-flex">
    <div class="flex-grow-1">
      <a id="sign-in-link" href="{{ '/' }}" class="href">Already have an account?</a>
    </div>
    <button class="btn btn-primary px-5" type="submit">Sign up</button>
  </div>
  </form>
</div>
  
 
</div>


<style>

  .d-flex{
      margin: 20px;
  }

  .container{
    margin-bottom: 30px;
  }

  #register-box{
    /* background-color: #1A1B41;
    color: white; */
  }

  #sign-in-link{
  /* color: #BAFF29; */
}

.btn{
  /* background-color: #353894; */
}

</style>

@endsection
