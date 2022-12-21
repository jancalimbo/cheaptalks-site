<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::controller(AuthController::class)->group(function (){
    Route::get('/','loginForm')->name('login'); 
    Route::post('/','login'); 
    Route::get('/register','registerForm');
    Route::post('/register','register');
    Route::get('/verification/{user}/{token}', 'verification');
    Route::post('/login','login');
    Route::get('/logout','logout')->name('logout');
});

Route::group(['middleware'=> ['auth', 'verified']],function(){

    Route::group(['middleware'=> ['role:admin']],function(){
        Route::controller(AdminController::class)->group(function (){
            Route::prefix('/admin')->group(function(){
                Route::get('/', 'adminPage')->name('admin-landing');
                Route::get('/users', 'allUsers')->name('site-users');
                Route::get('/all-posts', 'allPosts')->name('site-posts');
                Route::get('/disable/{user}', 'disableUser')->name('disable-user');
                Route::get('/enable/{user}', 'enableUser')->name('enable-user');
                Route::get('/take-down/{post}', 'takedownPost');
                Route::get('/show-post/{post}', 'showPost');

            });
        });
    });

    Route::group(['middleware'=> ['role:user']],function(){
        Route::controller(UserController::class)->group(function (){
            Route::get('/dashboard', 'userPage');
            Route::get('/authors', 'index');
        });
    });

    Route::controller(PostController::class)->group(function (){
        Route::get('/posts/my-posts','index')->middleware('role:user');
        Route::get('/edit/{post}', 'edit')->middleware('role:user');
        Route::get('/delete/{post}', 'destroy')->middleware('role:user');
        // Route::get('/like/{post}', 'likePost')->middleware('role:user');
        Route::get('/posts/recent-posts','recentPosts');
        Route::get('/authors/{author}', 'byAuthor');
    });

    Route::controller(UserController::class)->group(function (){
        Route::get('/logs','logs');
    });
        
        


    

});









