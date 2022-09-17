@extends('base')

@section('content')


    {{-- not working yet --}}
    @if(session('message'))
      <div class="container col-md-6 offset-md-3 mt-5 alert alert-success text-center">{{ session('message') }}</div>
    @endif
    @if(session('error'))
      <div class="container col-md-6 offset-md-3 mt-5 alert alert-danger text-center">{{ session('error') }}</div>
    @endif
    {{-- not working snippet ends here --}}
 
<div id="login-box" class="container col-md-6 offset-md-3 card mt-5">

    
    <h1 id="login-header" class="text-center">Log In</h1>
  
    <form action="{{'/'}}" method="POST">
    {{csrf_field()}}
  
    <div class="form-group">
      <label for="username">Username</label>
      <input type="username" name="username" id="username" class="form-control" >
      @error('username')
        <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" class="form-control" >
      @error('password')
        <p class="text-danger">{{ $message }}</p>
        
      @enderror
    </div>
    <div class="d-flex">
      <div class="flex-grow-1">
        <a id="register-link" href="{{ '/register' }}" class="href">Don't have an account?</a>
      </div>
      <button class="btn btn-primary px-5" type="submit">Log In <i class="fa-solid fa-right-to-bracket"></i></button>
    </div>
    </form>
  </div>
  


<style>

    #login-box{
        background-color: #1A1B41;
        color: white;
        /* margin-top: 80px; */
    }

.d-flex{
    margin: 20px;
}

#login-header{
    margin-top: 7px;
}

.btn{
    background-color: #353894;
    
}

.container{
  margin-top: 100px;
}

#register-link{
  color: #BAFF29;
}
input{

}
</style>

@endsection
