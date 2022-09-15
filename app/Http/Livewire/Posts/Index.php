<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;

class Index extends Component
{
    
    //cher angel codes
    public function showPosts(){
        $posts = Post::where('user_id',auth()->user()->id)
        ->orderBy('created_at','DESC')->get();
        
        return compact('posts');
    }
    public function render()
    {
        return view('livewire.posts.index', $this->showPosts());
    }
}
