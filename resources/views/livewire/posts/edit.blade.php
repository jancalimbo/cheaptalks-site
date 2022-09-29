<div>
    {{-- In work, do what you enjoy. --}}
    <div class="container col-md-6 offset-md-3">
        <div id="edit-card" class="card">
            <div id="card-header" class="card-header">
                <h3 class="text-center">Edit Post</h3>
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
                    <input type="text" class="form-control" wire:model.defer="content">
                    <label for="content">Content</label>
                    @error('content')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
                    <button id="save-btn" class="btn" type="submit" wire:click="editPost()">Save changes</button>
                </div>
            </div>
        </div>
    </div>
   
    <style>
        #edit-card{
            margin-top: 50px;
            background-color: #202382;
        }

        #card-header{
            background-color: #1A1B41;
            color: #BAFF29;
        }

        #save-btn{
            margin-top: 10px;
            background-color: #1A1B41;
            color: white
        }
    </style>

</div>
