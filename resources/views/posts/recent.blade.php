@extends('base')
@section('content')
@livewireScripts


<div class="d-flex">
    <div>
        <h1 id="top">All posts</h1>
    </div>
  
</div>
<hr>
<div class="d-flex justify-content-center flex-wrap">
    
    @foreach ($recentPost as $post)
        <div id="post-box" class="card align-self-stretch m-1
            {{ ($post->category === 'Love')? 'border-danger': ''}}
            {{ ($post->category === 'Supernatural')? 'border-secondary': ''}}
            {{ ($post->category === 'Fiction')? 'border-warning': ''}}
            {{ ($post->category === 'Life')? 'border-success': ''}}
        " style="width: 50%">
            <div class="card-body">
                <div class="card-title">
                    <h4 id="post-title">{{ $post->title }} <span><h6><span>@</span>{{ $post->user->username }}</h6></span></h4>
                    <p class="timestamp"><br>
                   <b></b>{{ $post->created_at->format('F d, Y g:i A') }}</p> <br>
                    <p>{{ $post->content }}</p>
                </div>
            </div>
            <div class="card-footer d-flex
                {{ ($post->category === 'Love')? 'bg-danger': ''}}
                {{ ($post->category === 'Supernatural')? 'bg-secondary': ''}}
                {{ ($post->category === 'Fiction')? 'bg-warning': ''}}
                {{ ($post->category === 'Life')? 'bg-success': ''}}
                ">
                @if($post->isEditable())
                    {{-- ipauna --}}
                    <div class="">
                        <a class="buttons-for-user" href="" onclick="return false;"><i class="fa-regular fa-heart"></i></a>&nbsp;
                        <a class="buttons-for-user" href="" onclick="return false;"><i class="fa-regular fa-comment-dots"></i></i></a>&nbsp;
                        <a class="buttons-for-user" href="" onclick="return false;"><i class="fa-solid fa-share-nodes"></i></a>
                    </div>
                    {{-- ibiutang kilid --}}
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
       
    @endforeach

</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Lavishly+Yours&display=swap');
    
    #top{
        margin-top: 30px;
        /* margin-bottom: 30px; */
        /* font-family: 'Tangerine', cursive; */
        /* font-family: 'Lavishly Yours', cursive; */
        font-size: 50px;
    }


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

    .card-body{
        /* background-color: #F1FFE7; */
        /* color: #1A1B41; */
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
        /* color: white; */
            /* background-color: #202382; */
    }
    .card-body{
            /* color: white; */
            /* background-color: #202382; */
        }

        .card-footer{
            /* background-color: #1A1B41; */
            /* color: white; */
        }
        a{
            /* color: #BAFF29; */
            margin-right: 8px;
        }
    

        ::-webkit-scrollbar {
            display: none;
        }
</style>
@endsection
