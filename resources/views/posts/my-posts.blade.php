@extends('base')

@section('content')
@livewireScripts

   

    <div class="container d-flex">
        <div class="row d-flex flex-row-reverse">
            
            <button id="create-post-collapsible" type="button" class="mt-4 text-center collapsible">Create Post </button>
            <div id="livewire-create-1" class="content">
                <div id="livewire-create" class="d-flex justify-content-center">
                    <livewire:posts.create/>
                </div>
            </div>
            
            <div id="right-side" class="col sm-1 mb-4">
                @if(session('message'))
                    <div class="container col-md-6 offset-md-3 mt-5 alert alert-success text-center">{{ session('message') }}</div>
                @endif
                @if(session('error'))
                    <div class="container col-md-6 offset-md-3 mt-5 alert alert-danger text-center">{{ session('error') }}</div>
                @endif
            </div>
            <h2 class="text-center">Your Posts</h2>
            <div class="">
                <livewire:posts.index/>
            </div>
            
        </div>
    </div>
    
    <script>
        
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lavishly+Yours&display=swap');

        .btn {
       
    }

    #top{
        margin-top: 30px;
    }
    #top-title{
        margin-top: 30px;
    }
    body{
        background-color: rgb(251, 234, 251);
    }

    h4, p{
        font-family: 'Raleway', sans-serif;
        font-weight: bold;
    }

    #timestamp{
        font-size: 10px;
        
    }

    .left-please-uwu{
        margin-left: 60px;
    }

    #create-post-collapsible{
        background-color: #1A1B41;
        color: white;
        border-radius: 10px;
        max-width: 8vw;
    }

    #livewire-create{
        background-color: rgba(141, 10, 10, 0);
    }
    #livewire-create-1{
        background-color: rgba(67, 11, 11, 0);
    }

    /* #right-side{
        margin-top: 50px;
    } */

    /* css sa collapse*/
    /* Style the button that is used to open and close the collapsible content */
    .collapsible {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    }

    /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
    .active, .collapsible:hover {
    background-color: #ccc;
    }

    /* Style the collapsible content. Note: hidden by default */
    .content {
    padding: 0 18px;
    display: none;
    overflow: hidden;
    background-color: #f1f1f1;
    }
    /* Step 3) Add JavaScript:
    Example */
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
        content.style.display = "none";
        } else {
        content.style.display = "block";
        }
    });
    }

    ::-webkit-scrollbar {
            display: none;
        }
    </style>

    <script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
        content.style.display = "none";
        } else {
        content.style.display = "block";
        }
    });
    }
    </script>
@endsection
