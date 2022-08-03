<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    if(auth()->guest()) {
        return redirect('/login');
    }

    return view('pages.home');
});

Route::get('/login',[AuthController::class, 'loginForm'])->name('login');
Route::post('/login',[AuthController::class,'login']);


Route::get('/dashboard',[AuthController::class,'dashboard']);

Route::group(['middleware'=>'auth'],function(){
    Route::get('/post/create',[PostController::class,'create']);
    Route::post('/posts',[PostController::class,'store']);
    Route::get('/posts/my-posts',[PostController::class,'myPosts']);
    Route::get('/posts/recent-posts',[PostController::class,'recentPosts']);

    Route::get('/posts/{post}',[PostController::class,'show']);

    Route::get('/logout',[AuthController::class,'logout']);

    Route::get('/posts/edit/{post}',[PostController::class,'edit'])->middleware('can-edit');
    Route::put('/posts/{post}',[PostController::class,'update'])->middleware('can-edit');


});
