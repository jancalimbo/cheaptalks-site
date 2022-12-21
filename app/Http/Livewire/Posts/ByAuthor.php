<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;

class ByAuthor extends Component
{
    public $authorId;

    public function loadUser(){
        $user = User::where('id', $this->authorId)->first();

        $posts = Post::where('user_id', $user->id)->orderBy('created_at', 'desc')->simplePaginate(9);


        return compact('posts', 'user');
    }

    public function disable(){
        $user = User::where('id', $this->authorId)->first();

        $user->update([
            'email_verified_at' => 'banned',
        ]);
    }

    public function render()
    {
        return view('livewire.posts.by-author', $this->loadUser());
    }
}
