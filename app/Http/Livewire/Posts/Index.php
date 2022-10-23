<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;
use App\Models\Category;
// use App\Http\Livewire\Posts\WithPagination;
use Livewire\WithPagination;

class Index extends Component
{
    public $search, $category, $category_id = 'all';
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    //cher angel codes
    public function showPosts(){
        $query = Post::where('user_id', auth()->user()->id)
        ->orderBy('created_at','DESC')
        ->search($this->search);
        if($this->category_id != 'all'){
            $query->where('category_id', $this->category_id);
        }

        $posts = $query->paginate(6);
        return compact('posts');
    }

    
    // public function showAllPosts(){
    //     $query = Post::where('user_id', auth()->user()->id)
    //     ->orderBy('created_at','DESC')
    //     ->search($this->search);
    //     if($this->category != 'all'){
    //         $query->where('category',$this->category);
    //     }

    //     $posts = $query->paginate(6);
    //     return compact('posts');
    // }
    
    public function render()
    {
        return view('livewire.posts.index', $this->showPosts());
    }
}
