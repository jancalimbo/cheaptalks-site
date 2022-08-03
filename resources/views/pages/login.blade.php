@extends('base')

@section('content')

<div class="row">
    <div class="col-md-4 offset-md-4">
        {{-- <h1 class="mt-5 text-center">Log In</h1> --}}

        <div id="card-box" class="card mt-5">
            <div class="card-body">
                {!! Form::open(['url'=>'/login','method'=>'post']) !!}

                <div class="mb-3"> 
                    {!! Form::label("username", "User Name") !!}
                    {!! Form::text("username", null, ['class'=>'form-control']) !!}
                </div>
                <div class="mb-3">
                    {!! Form::label("password", "Password") !!} 
                    {!! Form::password("password", ['class'=>'form-control']) !!}
                </div>
                <div class="mb-3">
                    <button class="btn" type="submit">
                        Log In &nbsp; <i class="fa-solid fa-right-to-bracket"></i>
                    </button>
                    <br>
                    <a href=""> Forgot password?</a>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

<style>
    body{
        background-color: rgb(251, 234, 251);
    }
    .btn {
        margin-left: 35%;
        margin-right: 35%;
        background-color: rgb(236, 179, 236);
    }

</style>

@endsection
