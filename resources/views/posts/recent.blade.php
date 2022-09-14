@extends('base')
@section('content')



<h1 id="top" >Recent Posts</h1>
{{-- <hr> --}}
<div class="d-flex justify-content-between flex-wrap">

    @foreach ($recentPost as $post)
        <div class="card align-self-stretch m-1" style="width: 31%">
            <div class="card-body">
                <div class="card-title">
                    <h4 id="post-title">{{ $post->title }}</h4>
                    <p class="timestamp"><b>by: </b> {{ $post->user->lname }}, {{ $post->user->fname }} <br>
                   <b>created: </b>{{ $post->created_at->format('F d, Y g:i A') }}</p> <br>
                    <p>{{ $post->content }}</p>
                </div>
            </div>
            <div class="card-footer">
                @if($post->isEditable())
                    <a id="your-btn" href="{{ url('/posts/edit/' . $post->id) }}"><i id="pen" class="fa-regular fa-pen-to-square"></i>
                    </a>
                    @else 
                    <a class="buttons-for-non-user" href="" onclick="return false;"><i class="fa-regular fa-heart"></i></a>&nbsp;
                    <a class="buttons-for-non-user" href="" onclick="return false;"><i class="fa-regular fa-comment-dots"></i></i></a>&nbsp;
                    <a class="buttons-for-non-user" href="" onclick="return false;"><i class="fa-solid fa-share-nodes"></i></a>
                     
                     
                    
                @endif
            </div>
        </div>
    @endforeach

</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Lavishly+Yours&display=swap');
    /* @import url('https://fonts.googleapis.com/css2?family=Tangerine&display=swap'); */
     .btn {
        /* margin-left: 40%;
        margin-right: 40%; */
        /* background-color: rgb(236, 179, 236); */
    }

    #top{
        margin-top: 30px;
        margin-bottom: 30px;
        /* font-family: 'Tangerine', cursive; */
        font-family: 'Lavishly Yours', cursive;
        font-weight: bold;
        font-size: 50px;
    }

    #buttons-in-post{
        margin-right: 5px;
        /* color: #F1FFE7; */
    }
    /* #your-btn{
        background-color: rgb(140, 50, 140);
        color: white
    } */

    #post-title{
        font-family: 'Raleway', sans-serif;
        font-weight: bold;
    }
    
    p{
        font-family: 'Raleway', sans-serif;
        font-weight: bold;
    }
    .timestamp{
        font-size: 12px;
    }

    #pen {
        color: #6290C3s;
    }

    .card-body{
        background-color: #F1FFE7;
        color: #1A1B41;
    }
    
    .card-footer{
        background-color: #C2E7DA;
        height: 50px;
    }

    .buttons-for-non-user{
        color: #1A1B41;
    }

        ::-webkit-scrollbar {
            display: none;
        }
</style>
@endsection
