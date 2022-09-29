<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;
use App\Events\UserLog;
use App\Listeners\LogListener;
// use App\Models\User;

class Create extends Component
{
    public $user, $title, $content, $log;

    //return the view file
    public function render()
    {
        return view('livewire.posts.create');
    }

    //cher angel codes
    public function createPost(){
        $this->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:255']
        ]);

        $post = Post::create([
            'user_id' => auth()->user()->id,
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $log_entry =  'Added a new post titled "' . $post->title . '"';
        event(new UserLog($log_entry)); 

        return redirect('/posts/my-posts')->with('message', 'Post added');
    }


    //wala pa ni oy need nig mga gmail chuchu for validation kanang 
    //ivalidate real-time

    /*
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            
        ]);
    }
    */
}
