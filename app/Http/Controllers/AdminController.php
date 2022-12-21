<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminPage(){
        return view('admin.admin-dashboard');
    }
    public function allUsers(){
        return view('admin.users');
    }

    public function allPosts(){
        $recentPost = Post::orderBy('created_at','DESC')->get();

        return view('admin.all-posts',['recentPost' => $recentPost]);
    }

    public function disableUser($id){
        $user = User::where('id', $id)->first();

        $user->update([
            'status' => 'banned'
        ]);
        
        return redirect(route('site-users'));
    }

    public function takedownPost($id){
        $post = Post::where('id', $id)->first();

        $post->update([
            'status' => 'taken down'
        ]);
        
        return redirect('/posts/recent-posts');
    }
    public function showPost($id){
        $post = Post::where('id', $id)->first();

        $post->update([
            'status' => 'show'
        ]);
        
        return redirect('/posts/recent-posts');
    }

    public function enableUser($id){
        $user = User::where('id', $id)->first();

        $user->update([
            'status' => 'authorized'
        ]);

        return redirect(route('site-users'));
    }
}
