@extends('base')

@section('content')
@livewireScripts

{{-- 
    <div id="top" class="float-end m-2">
        <a class="btn btn-primary" data-toggle="collapse" href="#createPost" role="button" aria-expanded="false" aria-controls="createPost">New Post</a>
        
    </div> --}}

    <h1 id="top-title">Welcome, user!</h1>

    <br>

    @if(session('message'))
        <div class="container col-md-6 offset-md-3 mt-5 alert alert-success text-center">{{ session('message') }}</div>
    @endif
    @if(session('error'))
        <div class="container col-md-6 offset-md-3 mt-5 alert alert-danger text-center">{{ session('error') }}</div>
    @endif

    <div class="container">
        <div class="row">
            <div id="" class=" col m-1">
                <livewire:posts.create/>
            </div>
            <div class="col m-1">
                <livewire:posts.index/>
            </div>
        </div>
    </div>
    
    <script>
        
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lavishly+Yours&display=swap');

        .btn {
        /* margin-left: 40%;
        margin-right: 40%; */
        /* background-color: rgb(236, 179, 236); */
    }

    #top{
        margin-top: 30px;
        /* font-family: 'Lavishly Yours', cursive;
        font-weight: bold;
        font-size: 50px; */
    }
    #top-title{
        margin-top: 30px;
        font-family: 'Lavishly Yours', cursive;
        font-weight: bold;
        font-size: 50px;
    }
    body{
        background-color: rgb(251, 234, 251);
    }

    h4, p{
        font-family: 'Raleway', sans-serif;
        font-weight: bold;
    }

    #timestamp{
        font-size: 10px;
        
    }

    #pen {
        color: rgb(140, 50, 140)
    }

    ::-webkit-scrollbar {
            display: none;
        }
    </style>
@endsection
