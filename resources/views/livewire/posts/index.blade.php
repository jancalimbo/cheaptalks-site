<div>
    <div class="col d-flex justify-content-center">
        <div class="w-25 container">
            <div class="row">
                <select name="" id="filter" class="form-select" wire:model.lazy="category">
                    <option value="all">All Categories</option>
                    <option value="Fiction">Fiction</option>
                    <option value="Supernatural">Supernatural</option>
                    <option value="Love">Love</option>
                    <option value="Life">Slice of Life</option>
                </select>
            </div>
        </div> 
        <div class="w-75">
            <input id="search" type="text" class="form-control" placeholder="Search..." wire:model="search">  
        </div>
    </div>
    <hr>

    <div class="d-flex justify-content-between flex-wrap">
        
        @foreach ($posts as $post)
        <div class="card align-self-stretch m-1 post-box-main" style="">
            <div class="card-body" id="post-box">
                <div class="card-title">
                    <h4>{{ $post->title }}, <span id="category-span">{{ $post->category }}</span></h4>
                    <p id="timestamp"> {{ $post->created_at->format('F d, Y g:i A') }}</p> <br>
                    <p>{{ $post->content }}</p>
                </div>
            </div>
            <div id="post-box-footer" class="card-footer">
             
                <a href="{{ url('edit', ['post' => $post->id]) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                <a href="{{ url('delete', ['post' => $post->id]) }}" ><i class="fa-solid fa-trash"></i></a>
                <a href="{{ url('show', ['post' => $post->id]) }}" >show</a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-end mt-3">
        {{ $posts->links() }}
    </div>

    <style>
        #post-box{
            /* background-color: #202382;
            color: white; */
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        #post-box-footer{
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }


        
        .card-footer{
            /* background-color: #1A1B41;
            color: white; */
        }
        a{
            /* color: #BAFF29; */
            margin-right: 8px;
        }
        
        #category-span{
            font-size: 18px;
            font-weight: bold;
        }
        
        .post-box-main{
            border-radius: 10px; 
            /* background-color: rgba(255, 255, 255, 0); */
        }

        #search{
            border-radius: 30px;
        }
        
        #filter{
            border-radius: 5px;

        }
    
    </style>
</div>


