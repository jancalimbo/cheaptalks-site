

@extends('base')
@section('content')

    <div id="top" class="float-end m-2">
        <a href="{{ url('/post/create') }}" class="btn">New Post</a>
    </div>

    <h1 id="top-title">Welcome, user!</h1>
    
    <br>
    <div class="d-flex justify-content-between flex-wrap">
        
        @foreach ($myPosts as $post)
            <div class="card align-self-stretch m-1" style="width: 31%">
                <div class="card-body">
                    <div class="card-title">
                        <h4>{{ $post->title }}</h4>
                        <p id="timestamp">{{ $post->created_at->format('F d, Y g:i A') }}</p> <br>
                        <p>{{ $post->content }}</p>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ url('/posts/edit/' . $post->id) }}" ><i id="pen" class="fa-solid fa-user-pen"></i></a>
                </div>
            </div>
        @endforeach

    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lavishly+Yours&display=swap');

        .btn {
        /* margin-left: 40%;
        margin-right: 40%; */
        background-color: rgb(236, 179, 236);
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
