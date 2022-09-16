<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;


class Edit extends Component
{
    public $postId;
    public $title, $content;

    
    public function mount(){
        $this->title = $this->post->title;
        $this->content = $this->post->content;
    }

    public function editPost(){
        $this->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:255']
        ]);

        $this->post->update([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        return redirect('/posts/my-posts')->with('message', 'success');
    }


    public function getPostProperty(){
        return Post::find($this->postId);
    }

    public function render()
    {
        return view('livewire.posts.edit');
    }
}
