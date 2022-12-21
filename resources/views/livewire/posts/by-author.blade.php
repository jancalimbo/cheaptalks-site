<div>
    <div class="container mt-4 p-5">
        <div class="d-flex justify-content-between align-items-center">
          <div class="mb-4">
            <h3>{{  $user->fname }} {{  $user->lname }} </span></span> </h3>
            <span class="username-title"><i><span>@<span>{{ $user->username }} </i></span>
        
          </div>

          @role('admin')
            <div>
              <a class="btn btn-secondary" href="{{ route('site-users') }}">
                Back To View All Users
              </a>
            </div>
          @endrole
        </div>
        
        <div class="row">
          @foreach ($posts as $post)
          <div class=" col-md-4 mt-1 mb-3" style="">
                  <div class="card-body post-card-body {{$post->user->gender === 'Female'? 'female' : 'male'}}" style="height: 30vh;">
                      <div class="">
                          <h4 class="font-weight-bold">{{$post->title}} <span class="username"><span>@</span>{{$post->user->username}}</span></h4>
                          <p class="font-weight-italic">{{$post->category->category}}</p>
                          @if ($post->status == 'taken down')
                          <p class="text-danger" style="font-size: 10px">
                            &lt;This post was taken down. Only you can view this&gt;
                          </p>
                          @endif
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
                    <div class="d-flex justify-content-between">
                      <div class="d-flex justify-content-start align-items-center">
                        <a class="buttons-for-non-user" href="" onclick="return false;"><i class="fa-regular fa-heart"></i></a>&nbsp;
      
                        @role('user')
                          <a class="buttons-for-non-user" href="" onclick="return false;"><i class="fa-regular fa-comment-dots"></i></i></a>&nbsp;
                          <a class="buttons-for-non-user" href="" onclick="return false;"><i class="fa-solid fa-share-nodes"></i></a>           
                        @endrole         
                      </div>
                      @endif
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
      
        </div>
      </div>
      <style>
        .female2{
            background-color: pink; 
        }
        .male2{
            background-color: lightskyblue;
        }
        .female{
            border: pink 2px solid; 
        }
        .male{
            border: lightskyblue 2px solid;
        }
      
        .buttons-for-nonuser i{
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
</div>
