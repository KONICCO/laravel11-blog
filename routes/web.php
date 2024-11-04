<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', action: function () {
    return view('about', ['title' => 'Blog Page', 'name' => 'joko']);
});
Route::get('/posts', action: function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
});
Route::get('/posts/{post:slug}',  function (Post $post) {

    // $item = Post::find($item);
    // dd(vars: $item);
    // dd($item);
    return view('post', ['title' => 'Single post', 'item' => $post]);
});
Route::get('/authors/{user:username}',  function (User $user) {

    // $item = Post::find($item);
    // dd(vars: $item);
    // dd($item);
    // dd($user);
    // $posts = $user->posts;
    // if ($posts->isEmpty()) {
    //     return view('posts', ['title' => 'Artikel by ' . $user->name, 'posts' => []]);
    // }
    // $posts = $user->posts;
    // dd($posts); 
    return view('posts', ['title' => 'Artikel by ' . $user->name, 'posts' => $user->posts]);
});
Route::get('/categories/{category:slug}',  function (Category $category) {
    return view('posts', ['title' => 'Artikel Category: ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', action: function () {
    return view('contact', ['title' => 'Contact Page']);
});
