<nav id="navbar-box" class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <h1><a id="navbar-link-title" style="font-size: 20px;" class="navbar-brand" href="{{url('/dashboard')}}">CheapTalks</a></h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              
                @role('user')
                <li class="nav-item">
                    <a id="navbar-links" class="nav-link {{ Request::is('dashboard/*') || Request::is('dashboard') ? 'active':'' }}" href="{{url('/dashboard')}}"><i class="fa-solid fa-house"></i>
                        <span>
                            
                        </span>
                        </a>
                </li>
                <li class="nav-item">
                    <a id="navbar-links" class="nav-link {{ Request::is('posts/recent-posts/*') || Request::is('posts/recent-posts') ? 'active':'' }}" href="{{url('/posts/recent-posts')}}">
                        <span><i class="fa-solid fa-globe"></i></span>
                        </a>
                </li>
                <li class="nav-item">
                    <a id="navbar-links" class="nav-link  {{ Request::is('authors/*') || Request::is('authors') ? 'active':'' }}" href="{{url('/authors')}}">
                        <span>
                            <i class="fa-solid fa-users"></i>
                        </span>
                        </a>
                </li>
                <li class="nav-item">
                   <a id="navbar-links" class="nav-link {{ Request::is('posts/my-posts/*') || Request::is('posts/my-posts') ? 'active':'' }}" href="{{url('/posts/my-posts')}}">
                    <span>
                        <i class="fa-solid fa-user"></i>
                    </span>
                    {{Auth::user()->fname}}</a>
                   
                </li>
                <li class="nav-item">
                    <a id="navbar-links" class="nav-link  {{ Request::is('logs*') || Request::is('logs') ? 'active':'' }}" href="{{url('/logs')}}">
                        <span>
                            <i class="fa-solid fa-files"></i>
                        </span>
                        Activity</a>
                </li>
                
                @endrole

                @hasanyrole('admin|user')

                    <li class="nav-item">
                        <a id="navbar-links" class="nav-link" href="{{url('/logout')}}">Logout &nbsp; <i class="fa-solid fa-right-to-bracket"></i></a>
                    </li>
                @endrole
            </ul>
        </div>
    </div>
</nav>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap');

    #navbar-box{
        height: 50px;
        padding-left: 20px; 
        padding-right: 20px; 
        background-color: #000;
        position: fixed;
        width: 100%;
    }
    .navbar-brand{
        font-size: 30px;
    }

    a.nav-link:link{
        
        font-weight: bold;
        color: #ff9505;
    }
    #navbar-link-title{
        color: #ec4e20;
        
        font-weight: bold;
    }
    .nav-link{

        color: #ff9505;
    }
    a.nav-link:hover{
        color: #ec4e20;
        
        font-weight: bold;
    }

    .nav-link{
        margin-left: 25px;
    }

    .nav-item .active{
        color: white;
    }
</style>