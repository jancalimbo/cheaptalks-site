<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;
use App\Events\UserLog;


class Edit extends Component
{
    public $postId;
    public $title, $content, $category_id;

    
    public function mount(){
        $this->title = $this->post->title;
        $this->content = $this->post->content;
        $this->category_id = $this->post->category_id;
    }

    public function editPost(){
        $this->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'string', 'max:255']
        ]);

        $this->post->update([
            'title' => $this->title,
            'content' => $this->content,
            'category_id' => $this->category_id,
        ]);

        $log_entry =  'Changes made to the post "' . $this->post->title . '"';
        event(new UserLog($log_entry)); 

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
