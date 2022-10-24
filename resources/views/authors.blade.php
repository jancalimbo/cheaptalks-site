@extends('base')

@section('content')
<div class="container">
  <div class="row" >
    @foreach($users as $user)
    <div id="" class="col-md-4 mt-5">

      <a href="{{url('authors', ['id'=>$user->id])}}">
        <div class="card users">
            <div class="card-header">
              <h4>{{$user->fname}} {{$user->lname}}</h4>
              <p><span>@</span>{{ $user->username }}</p>
            </div>            
            
            <div class="card-footer users-bot {{$user->gender === 'Female'? 'f1' : 'm1' }}">
                <p>{{$user->posts()->count()}} tweets</p>
            </div>
        </div>
      </a>
      
    </div>
    @endforeach
    {{-- <div class="offset-md-5 mt-3">
        {{ $users->links() }}
    </div> --}}
</div>
</div>


<style>
  #pf1{
    height: 150px;
    width: 310px;
  }
  .users{
    border-radius: 10px;
  }
  .users-bot{
    border-radius: 10px;
  }
  .f1{
      background-color: hotpink; 
  }
  .m1{
      background-color: dodgerblue; 
  }
 
  a{
    text-decoration: none;
    color: black
  }
  
</style>
    
@endsection