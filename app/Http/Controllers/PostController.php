<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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
            'content' => 'string|required'
        ]);
        $post = Post::create([
            'user_id' => auth()->user()->id,
            'title'=> $request->title,
            'content'=> $request->content,
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




    //end of crud video

    public function show(Post $post)
    {
        return view('posts.view',['post'=>$post]);
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
        $recentPost = Post::orderBy('created_at','DESC')->get();

        return view('posts.recent',['recentPost' => $recentPost]);
    }
}
