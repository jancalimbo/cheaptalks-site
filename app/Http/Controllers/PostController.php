<?php

namespace App\Http\Controllers;

use alert;
use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Request;

class PostController extends Controller
{

    //cher angel


    public function myPosts()
    {
        $myPost = Post::where('user_id',auth()->user()->id)
        ->orderBy('created_at','DESC')
        ->get();
        return view('posts.my-posts',['myPosts'=>$myPost]);
    }


    public function create()
    {
        return view('posts.create');

    }
   
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'string|required',
            'content' => 'string|required',
            'category_id' => 'string|required'
        ]);
        $post = Post::create([
            'user_id' => auth()->user()->id,
            'title'=> $request->title,
            'content'=> $request->content,
            'category_id'=> $request->category_id,
            'status'=> "show",
        ]);

        return redirect('/posts/' . $post->id)->with('Info','New post created');
    }


    //crud video
    
    public function index(){
        return view('posts.my-posts');
    }
    
    public function edit($id)
    {
        // return view('posts.edit',['post'=>$post]);
        return view('posts.edit',compact('id'));
    }
    
    public function destroy($id){
        return view('posts.delete',compact('id'));
    }
    


  

    public function update(Post $post,Request $request)
    {
        $request->validate([
            'title'=>'string|required',
            'content' => 'string|required'
        ]);

        $post->update($request->all());

        return redirect('/posts/' . $post->id);

    }
    public function recentPosts()
    {
        $recentPost = Post::where('status', 'show')->orderBy('created_at','DESC')->get();

        return view('posts.recent',['recentPost' => $recentPost]);
    }

    public function byAuthor($id)
    {
        return view('posts.author', compact('id'));
    }

    public function likePost($id)
    {
        $post = Post::find($id);

        Like::create([
            'user_id' => auth()->user()->id,
            'post_id' => $post->id,
        ]);

        dd(auth()->user()->id);
        // return redirect('posts/recent-posts');
    }
}
