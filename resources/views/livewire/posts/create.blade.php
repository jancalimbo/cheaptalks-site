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
              <select name="category" class="form-select" id="" wire:model.defer="category">
                <option value="" hidden="true">Select Category</option>
                <option value="" selected disabled>Select Category</option>
                <option value="Adventure">Adventure</option>
                <option value="Supernatural">Supernatural</option>
                <option value="Entertainment">Entertainment</option>
                <option value="Slice Life">Slice of Life</option>
              </select>
              <label for="category">Category</label>
              @error('category')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

            </div>
            <div class="form-floating mb-3">
                <input id="content-input" type="text" class="form-control" wire:model.defer="content">
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
            background-color: #202382;
            color: #1A1B41;
        }

        .card-header{
            background-color: #1A1B41;
            color: #BAFF29;
        }
        a{
            color: #BAFF29;
            margin-right: 8px;
        }

        .btn{
            background-color: #1A1B41;
            color: #BAFF29;
        }

        .card{
            width: 500px;
        }
    
    </style>
</div>
