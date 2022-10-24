<div>


    <div class="container col-md-6 offset-md-3 delete-card">
        <div class="card card-delete">
            <div class="card-body card-body-delete">
                <h3 class="text-center">Are you sure you want to delete this post?</h3>
            </div>

           
            <div class="card-footer card-footer-delete">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-danger" wire:click="deletePost()">Delete</button>
                    <button class="btn btn-secondary mx-3" wire:click="backToPosts()">Back</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        .delete-card{
            margin-top: 10em;
           
        }

        .card-delete{
            border: #082032 2px solid;
            border-radius: 10px;
        }


        .card-footer-delete{
            background-color: #082032;
        }
        h3{
            /* color: #BAFF29; */
        }
    </style>
</div>
