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
Route::get('/posts/{slug}', action: function ($slug) {

    $item = Post::find($slug);
    // dd(vars: $item);
    return view('post', ['title' => 'Single post', 'item' => $item]);
});
Route::get('/contact', action: function () {
    return view('contact', ['title' => 'Contact Page']);
});
