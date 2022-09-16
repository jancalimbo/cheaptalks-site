@extends('base')
@section('content')

    <div class="row mt-3">
        <div class="col-md-6">
            {{-- <hr> --}}
            
            <div class="box-create-post">
                <h1 id="top">What's Up?</h1>
                {!! Form::open(['url'=>'/posts','method'=>'post']) !!}
                    <div class="mb-3">
                        {!! Form::label('title', "Subject") !!} <span class="space"></span>
                        {!! Form::text("title", null, ['class'=>'form-controll']) !!}
                    </div>
    
                    <div class="mb-3">
                        {!! Form::label('content', "Content") !!} <span class="space-2"></span>
                        {!! Form::textarea("content", null, ['class'=>'form-controll']) !!}
                    </div>
                    <div class="mb-3-btn">
                        <button class="btn btn-sm " type="submit">Send Post</button>
                    </div>
    
                {!! Form::close() !!}

            </div>

        </div>
    </div>


    <style>
    body{
        background-color: rgb(251, 234, 251);
    }

    #top{
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .btn {
        /* margin-left: 40%;
        margin-right: 40%; */
        background-color: rgb(236, 179, 236);
    }

    .space {
        margin-right: 20px;
    }
    .space-2 {
        margin-right: 16px;
    }

    .mb-3-btn{
        margin-top: 30px;
        margin-left: 25vw;
    }

    /* .box-create-post {
        border: 1px solid black;
        margin-left: 50vw;
        margin-right: 30vw;
    } */
    </style>
@endsection
