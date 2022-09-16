<div>
    {{-- Stop trying to control. --}}

    <div class="container col-md-6 offset-md-3 mt-3">
        <div class="card">
            <div class="card-header">
                <h3 class="text-danger">Are you sure you want to delete this post?</h3>
            </div>

            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>
                            Title
                        </th>
                        <td>
                            {{ $this->post->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Content
                        </th>
                        <td>
                            {{ $this->post->content }}
                        </td>
                    </tr>
                </table>
            </div>

            <div class="card-footer">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-danger" wire:click="deletePost()">Delete</button>
                    <button class="btn btn-secondary mx-3" wire:click="backToPosts()">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
