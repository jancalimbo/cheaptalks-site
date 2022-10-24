@extends('base')
@section('content')
@livewireScripts


<div class="d-flex align-items-center">
    <div>
        <h1 class="mt-2">All posts</h1>
        
    </div>
</div>
<hr>
<div class="d-flex justify-content-center flex-wrap">
    
    @foreach ($recentPost as $post)
        <div id="post-box" class="card align-self-stretch m-1 mb-3
            {{ ($post->user->gender === 'Female')? 'female': 'male'}}
        " style="width: 50%">
            <div class="card-body body-card">
                <div class="card-title">
                    <h4 id="post-title">{{ $post->title }} <a href="{{url('authors', ['id'=>$post->user->id])}}"><span><h6 id="username"><span>@</span>{{ $post->user->username }}</h6></span></a></h4>
                    <p class="timestamp">
                   {{ $post->created_at->format('F d, Y g:i A') }}</p> <br>
                    <p>{{ $post->content }}</p>
                </div>
            </div>
            <div class="card-footer-recent">
                <div class="card-footer d-flex 
                {{ ($post->user->gender === 'Female')? 'female2': 'male2'}}
                ">
                @if($post->isEditable())
                    <div class="">
                        <a class="buttons-for-user" href="{{ url('edit', ['post' => $post->id]) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a class="buttons-for-user" href="{{ url('delete', ['post' => $post->id]) }}" ><i class="fa-solid fa-trash"></i></a>
                    </div>
                @else 
                    <a class="buttons-for-non-user" href="" onclick="return false;"><i class="fa-regular fa-heart"></i></a>&nbsp;
                    <a class="buttons-for-non-user" href="" onclick="return false;"><i class="fa-regular fa-comment-dots"></i></i></a>&nbsp;
                    <a class="buttons-for-non-user" href="" onclick="return false;"><i class="fa-solid fa-share-nodes"></i></a>                    
                @endif
                </div>
            </div>
            
        </div>
       
    @endforeach

</div>

<style>
    
    #top{
       
        font-size: 50px;
    }


    #post-title{
        /* font-family: 'Raleway', sans-serif; */
        font-weight: bold;
    }
    
    p{
        /* font-family: 'Raleway', sans-serif; */
        font-weight: bold;
    }
    .timestamp{
        font-size: 12px;
    }

    .card-body{
        /* background-color: #33475687; */
        /* color: #1A1B41; */
    }
    
    #username{
        text-decoration: none;
        color: #FF4C29;
    }
    .card-footer{
        /* background-color: #C2E7DA; */
        height: 50px;
    }

    .buttons-for-non-user{
        color: white;
    }
    .buttons-for-user{
        color: black;
    }
    #post-box{
        border-radius: 10px;
        
    }

    .card-footer-recent{
        border-bottom-left-radius: 10px; 
        border-bottom-right-radius: 10px; 
    }

    
    a{
        /* color: #BAFF29; */
        margin-right: 8px;
    }
    
    .female{
        border: 2px solid hotpink;
    }
    .male{
        border: 2px solid dodgerblue;
    }
    .female2{
        background-color: hotpink;
    }
    .male2{
        background-color: dodgerblue;
    }

    ::-webkit-scrollbar {
        display: none;
    }
</style>
@endsection
