<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;
use App\Events\UserLog;

class Delete extends Component
{
    public $postId;
    public $title, $content;


    public function getPostProperty(){
        return Post::find($this->postId);
    }

    public function deletePost(){
        $this->post->delete();
        $log_entry =  'The post "' . $this->post->title . '" was deleted';
        event(new UserLog($log_entry)); 

        return redirect('/posts/my-posts')->with('message', 'Post deleted successfully');
    }
    public function backToPosts(){
        return redirect('/posts/my-posts');
    }

    public function render()
    {
        return view('livewire.posts.delete');
    }
}
