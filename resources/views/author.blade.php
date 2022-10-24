@extends('base')

@section('content')
<div class="container mt-4 ">
  <div class="mb-4">
    <h3>{{  $author->fname }} {{  $author->lname }} </span></span> </h3>
    <span class="username-title"><i><span>@<span>{{ $author->username }} </i></span>

  </div>
  
  <div class="row">
    @foreach ($posts as $post)
    <div class=" col-md-4 mt-1 mb-3" style="">
            <div class="card-body post-card-body {{$post->user->gender === 'Female'? 'female' : 'male'}}" style="height: 30vh;">
                <div class="">
                    <h4 class="font-weight-bold">{{$post->title}} <span class="username"><span>@</span>{{$post->user->username}}</span></h4>
                    <p class="font-weight-italic">{{$post->category->category}}</p> <br>
                    <p>{{$post->content}}</p>
                </div>
            </div>
            
            <div class="card-footer card-footer-user p-3 {{$post->user->gender === 'Female'? 'female2' : 'male2'}}">
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
    @endforeach

  </div>
</div>
<style>
  .female2{
      background-color: hotpink; 
  }
  .male2{
      background-color: dodgerblue;
  }
  .female{
      border: hotpink 2px solid; 
  }
  .male{
      border: dodgerblue 2px solid;
  }

  i{
    color: black
  }
  .post-card-body{
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }

  .card-footer-user{
    border-radius: 10px;
  }

  .username{
    font-size: 15px;
  }
  .username-title{
    font-size: 20px;
  }
</style>
@endsection