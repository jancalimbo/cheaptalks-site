<div class="">
    <div class="col d-flex justify-content-center align-items-center">
        <div class="w-25 container">
            <div class="row">
                <select name="" id="filter" class="form-select" wire:model.lazy="category_id">
                    <option value="all">All Categories</option>
                    @foreach(App\Models\Category::get() as $category)
                        <option value="{{$category->id}}">{{$category->category}}</option>
                    @endforeach
                    
                </select>
            </div>
        </div> 
        <div class="w-75 anti-hero">
            <input id="search" type="text" class="form-control" placeholder="Search..." wire:model="search">  
        </div>
        <div class="mt-3">
            {{ $posts->links() }}
        </div>
    </div>
    <hr>

    <div class="">
        
        @foreach ($posts as $post)
        <div class="card mb-3 card-whole" style="">
            <div class="card-body card-title-mypost"  id="post-box">
                <div class="card-title ">
                    <h4>{{ $post->title }}</h4><span>{{ $post->category->category }}</span>
                    <p id="timestamp"> {{ $post->created_at->format('F d, Y g:i A') }}</p> <br>
                    <p>{{ $post->content }}</p>
                </div>
            </div>
            <div id="post-box-footer" class="card-footer card-footer-mypost">
             
                <a href="{{ url('edit', ['post' => $post->id]) }}"><i class="icon fa-regular fa-pen-to-square"></i></a>
                <a href="{{ url('delete', ['post' => $post->id]) }}" ><i class="icon fa-solid fa-trash"></i></a>
            </div>
        </div>
        @endforeach
    </div>
   

    <style>
        #post-box{
            
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        #post-box-footer{
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        .card-whole{
            margin: auto;
            border: #08203200 2px solid;
        }

        .anti-hero{
            margin-right: 10px;
        }
        .card-footer-mypost{
           background-color: #082032;
        }
        .card-title-mypost{
           border: #082032 2px solid;
        }
        .icon{
            color: #FF4C29;
            margin: 7px;
        }
        
        #category-span{
            
        }
        
        .post-box-main{
            border-radius: 10px; 
          
        }

        #search{
            border-radius: 30px;
        }
        
        #filter{
            border-radius: 5px;

        }
    
    </style>
</div>


