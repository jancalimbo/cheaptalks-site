<div>
    <div class="col">
        <div>
            <input type="text" class="form-control" placeholder="Search" wire:model="search">  
        </div>
        <div class="container">
            <div class="row">
                <select name="" id="" class="form-select" wire:model.lazy="category">
                    <option value="all" hidden="true">All Categories</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Supernatural">Supernatural</option>
                    <option value="Entertainment">Entertainment</option>
                    <option value="Slice Life">Slice of Life</option>
                </select>
            </div>
        </div> 
    </div>
    <hr>
    <div class="d-flex justify-content-between flex-wrap">
        
        @foreach ($posts as $post)
        <div class="card align-self-stretch m-1" style="width: 49%">
            <div class="card-body" id="post-box">
                <div class="card-title">
                    <h4>{{ $post->title }}, <span id="category-span">{{ $post->category }}</span></h4>
                    <p id="timestamp"> {{ $post->created_at->format('F d, Y g:i A') }}</p> <br>
                    <p>{{ $post->content }}</p>
                </div>
            </div>
            <div class="card-footer">
             
                <a href="{{ url('edit', ['post' => $post->id]) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                <a href="{{ url('delete', ['post' => $post->id]) }}" ><i class="fa-solid fa-trash"></i></a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-end mt-3">
        {{ $posts->links() }}
    </div>

    <style>
        #post-box{
            background-color: #202382;
            color: white;
        }

        .card-footer{
            background-color: #1A1B41;
            color: white;
        }
        a{
            color: #BAFF29;
            margin-right: 8px;
        }

        #category-span{
            font-size: 18px;
            font-weight: bold;
        }
    
    
    </style>
</div>


