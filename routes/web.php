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

    // cara filter 1
    //query builder
    // $posts = Post::latest();
    // // Terapkan filter pencarian jika ada
    // if (request('search')) {
    //     $posts->where('title', 'like', '%' . request('search') . '%');
    // }
    // eager loading author




    return view('posts', ['title' => 'Blog Page', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(2)->withQueryString()]);
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
    //buat lazy eagerloading
    // $item = $user->posts->load( 'category' , 'author' );
    // dd($item);
    return view('posts', ['title' => 'Artikel by ' . $user->name, 'posts' => $user->posts]);
});
Route::get('/categories/{category:slug}',  function (Category $category) {
    // $item = $category->posts->load( 'category' , 'author' );

    return view('posts', ['title' => 'Artikel Category: ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', action: function () {
    return view('contact', ['title' => 'Contact Page']);
});
