<?php

use App\Models\Post;
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
Route::get('/posts/{post:slug}',  function ( Post $post) {

    // $item = Post::find($item);
    // dd(vars: $item);
    // dd($item);
    return view('post', ['title' => 'Single post', 'item' => $post]);
});

Route::get('/contact', action: function () {
    return view('contact', ['title' => 'Contact Page']);
});
