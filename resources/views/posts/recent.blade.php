@extends('components.base')
@section('content')
@livewireScripts

<div class="container p-3">
   @role('admin')
        <div class="d-flex justify-content-between align-items-center" >
            <div>
                <h1 class="mt-2">All posts</h1>
                
            </div>
            <div>
                <a class="btn btn-secondary" href="{{ route('admin-landing') }}">
                    Return
                </a>
            </div>
        </div>
        <hr class="">
   @endrole
    <div class="d-flex justify-content-center flex-wrap mt-3">

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
                <div class="card-footer-recent ">
                    <div class="card-footer d-flex justify-content-between
                    {{ ($post->user->gender === 'Female')? 'female2': 'male2'}}
                    ">
                        <div>
                            @if($post->isEditable())
                                <div class="">
                                    <a class="buttons-for-user" href="{{ url('edit', ['post' => $post->id]) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a class="buttons-for-user" href="{{ url('delete', ['post' => $post->id]) }}" ><i class="fa-solid fa-trash"></i></a>
                                </div>
                            @else 
                                <a class="buttons-for-non-user"  href="{{ url('like', ['post' => $post->id]) }}"><i class="fa-regular fa-heart"></i></a>&nbsp;
                                <a class="buttons-for-non-user" href="" onclick="return false;"><i class="fa-regular fa-comment-dots"></i></i></a>&nbsp;
                                <a class="buttons-for-non-user" href="" onclick="return false;"><i class="fa-solid fa-share-nodes"></i></a>                    
                            @endif
                        </div>
                        

                    @role('admin')
                        @if($post->status == 'show')
                            <div class="d-flex justify-content-end">
                                <a href="{{ url('admin/take-down', ['post' => $post->id]) }}" class="btn btn-dark text-danger">Take Down</a>
                            </div>

                            @elseif($post->status == 'taken down')
                                <div class="d-flex justify-content-end">
                                    <a href="{{ url('admin/show-post', ['post' => $post->id]) }}" class="btn btn-dark text-primary">Show</a>
                                </div>
                        @endif
                        
                    @endrole
                    </div>
                </div>
                
            </div>
        @endforeach

        @role('admin')
            @php
                $takenDown = App\Models\Post::where('status','taken down')->get();
            @endphp

            @foreach ($takenDown as $post)
                <div id="post-box" class="card align-self-stretch m-1 mb-3
                    {{ ($post->user->gender === 'Female')? 'female': 'male'}}
                " style="width: 50%">
                    <div class="card-body body-card">
                        <div class="card-title">
                            <h4 id="post-title">{{ $post->title }} 
                                <a href="{{url('authors', ['id'=>$post->user->id])}}">
                                    <span>
                                        <h6 id="username">
                                            <span>@</span>
                                            {{ $post->user->username }}
                                        </h6>
                                    </span>
                                </a>
                            </h4>
                            <p class="timestamp">
                                {{ $post->created_at->format('F d, Y g:i A') }}
                            </p> 
                            <br>
                            <p>
                                {{ $post->content }}
                            </p>
                        </div>
                    </div>
                    <div class="card-footer-recent ">
                        <div class="card-footer d-flex justify-content-between
                        {{ ($post->user->gender === 'Female')? 'female2': 'male2'}}
                        ">
                            <div>
                                @if($post->isEditable())
                                    <div class="">
                                        <a class="buttons-for-user" href="{{ url('edit', ['post' => $post->id]) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <a class="buttons-for-user" href="{{ url('delete', ['post' => $post->id]) }}" ><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                @else 
                                    <a class="buttons-for-non-user" href="" onclick="" href="{{ url('like', ['post' => $post->id]) }}"><i class="fa-regular fa-heart"></i></a>&nbsp;
                                    <a class="buttons-for-non-user" href="" onclick="return false;"><i class="fa-regular fa-comment-dots"></i></i></a>&nbsp;
                                    <a class="buttons-for-non-user" href="" onclick="return false;"><i class="fa-solid fa-share-nodes"></i></a>                    
                                @endif
                            </div>
                            

                        @role('admin')
                            @if($post->status == 'show')
                                <div class="d-flex justify-content-end">
                                    <a href="{{ url('admin/take-down', ['post' => $post->id]) }}" class="btn btn-dark text-danger">Disable</a>
                                </div>

                                @elseif($post->status == 'taken down')
                                    <div class="d-flex justify-content-end">
                                        <a href="{{ url('admin/show-post', ['post' => $post->id]) }}" class="btn btn-dark text-primary">Enable</a>
                                    </div>
                            @endif
                            
                        @endrole
                        </div>
                    </div>  
                </div>
            @endforeach
        @endrole


     
    
    </div>
    
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
        color: #ff9505;
    }
    .card-footer{
        /* background-color: #C2E7DA; */
        height: 50px;
    }

    .buttons-for-non-user{
        color: purple;
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
        border: 2px solid pink;
    }
    .male{
        border: 2px solid lightskyblue;
    }
    .female2{
        background-color: pink;
    }
    .male2{
        background-color: lightskyblue;
    }

    ::-webkit-scrollbar {
        display: none;
    }

    #post-title a{
        text-decoration: none;
    }
</style>
@endsection
