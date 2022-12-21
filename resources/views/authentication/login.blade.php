@extends('components.base')

@section('content')

  <div class="container">
    
    <div class="messages">
      @if(session('message'))
        <div class="container col-md-6 offset-md-3 mt-3 alert alert-success text-center">{{ session('message') }}</div>
      @endif
      @if(session('error'))
        <div class="container col-md-6 offset-md-3 mt-3 alert alert-danger text-center">{{ session('error') }}</div>
      @endif
    </div>
 
    <div id="login-box" class="container col-md-6 offset-md-3 card mt-5 p-5">
      <h1 id="login-header" class="text-center mt-2">Log In</h1>
    
      <form action="{{'/'}}" method="POST">
        {{csrf_field()}}
    
        <div class="form-group mt-3 mb-3">
          {{-- <label for="username">Username</label> --}}
          <input type="username" name="username" id="username" class="form-control" value="" placeholder="@username" >
          @error('username')
            <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>
        <div class="form-group">
          {{-- <label for="password">Password</label> --}}
          <input type="password" name="password" id="password" class="form-control" value="thisisapassword">
          @error('password')
            <p class="text-danger">{{ $message }}</p>
            
          @enderror
        </div>
        <div class="mb-3">
          <button class="btn signin-btn px-5 mt-4 form-control" type="submit" style="background-color: #ff9505;"><b> Sign In</b> </button>
          <hr>
          <div class="">
            <a id="register-link" class="btn register-btn form-control mb-3" style="background-color: #ff9505;" href="{{ '/register' }}" class="href">Don't have an account?</a>
          </div>
        </div>
      
      </form>
    </div>
    


    <style>

      #login-box{
          /* border: #FF4C29 2px solid; */
          border-radius: 10px;
          background-color: #000;
          margin-top: 7em;
          color: #ff9505;
      }
      #login-btn{
        background-color: #ff9505;
        /* color: #082032; */
        color: white;
      }
      #register-link{
        color: #000;
        /* text-decoration: none; */
        font-weight: bold;
      }

      .messages{
        margin-top: 100px;
      }
   
    </style>
  </div>

@endsection
