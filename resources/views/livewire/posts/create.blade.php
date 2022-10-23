<div>
    {{-- The whole world belongs to you. --}}
    <div id="create-post-box" class="card">
        <div class="card-header">
            <h3 class="text-center">What's on your mind?</h3>
        </div>
        <div class="card-body">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="title">
                <label for="title">Title</label>
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
              <select name="category_id" class="form-select" id="" wire:model.defer="category_id">
                <option value="" hidden="true">Select Category</option>
                <option value="" selected disabled>Select Category</option>
                    @foreach(App\Models\Category::get() as $category)
                        <option value="{{$category->id}}">{{$category->category}}</option>
                    @endforeach
              </select>
              <label for="category_id">Category</label>
              @error('category')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

            </div>
            <div class="form-floating mb-3">
                {{-- <input id="content-input" type="text" class="form-control" wire:model.defer="content"> --}}
                <textarea class="form-control" type="text" name="post" style="width:100%" id="exampleFormControlTextarea1" rows="3" wire:model.defer="content"></textarea>
                <label for="content">Content</label>
                @error('content')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn" type="submit" wire:click="createPost()">Post</button>
            </div>
        </div>
    </div>

    
    <style>
        #create-post-box{
            /* background-color: #202382;
            color: #1A1B41; */
        }

        .card-header{
            /* background-color: #1A1B41;
            color: #BAFF29; */
        }
        a{
            /* color: #BAFF29;
            margin-right: 8px; */
        }

        .btn{
            /* background-color: #1A1B41;
            color: #BAFF29; */
        }

        .card{
            width: 500px;
        }
    
    </style>
</div>
