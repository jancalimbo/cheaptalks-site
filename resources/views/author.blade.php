@extends('base')

@section('content')
<div class="container mt-4">
  <div class="">
    <h3>{{  $author->fname }} {{  $author->lname }} <span>@<span>{{ $author->username }}</span></span> </h3>

  </div>
  
  <div class="row">
    @foreach ($posts as $post)
    <div class="col-md-4 mt-1">
        <div class="card mb-3">
            <div class="card-header" style="height: 20vh;">
                <div class="">
                    <h4>{{$post->title}}</h4>
                    <h6><span>@</span>{{$post->user->username}}, {{$post->category->category}}</h6>
                    <h6>{{$post->content}}</h6>
                </div>
            </div>
            
            <div class="card-footer {{$post->user->gender === 'Female'? 'f1' : 'm1'}}">
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

    {{-- <div class="col offset-md-5">
        {{ $posts->links() }}
    </div> --}}
  </div>
</div>
<style>
  .f1{
      background-color: lightpink; 
  }
  .m1{
      background-color: lightblue;
  }

  i{
    color: black
  }
</style>
@endsection