<div>
    {{-- In work, do what you enjoy. --}}
    <div class="container col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header">
                <h3>Edit Post</h3>
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
                    <button class="btn btn-primary" type="submit" wire:click="editPost()">Save changes</button>
                </div>
            </div>
        </div>
    </div>
   

</div>
