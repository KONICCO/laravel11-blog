<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',

                'author' => 'Sandhika Galih',

                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est

odit laudantium earum cumque

pariatur facilis vitae

nulla esse quasi accusantium! Est iste facilis magnam dolor soluta, maxime

quo architecto earum!'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',

                'title' => 'Judul Artikel 2',

                'author' => 'koooooooooooooooo',

                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est

odit laudantium earum cumque

pariatur facilis vitae

nulla esse quasi accusantium! Est iste facilis magnam dolor soluta, maxime

quo architecto earum!'
            ]
        ];
    }
}
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

    $item = Arr::first(Post::all(), function ($value) use ($slug) {
        return $value['slug'] == $slug;
    });
    // dd(vars: $item);
    return view('post', ['title' => 'Single post', 'item' => $item]);
});
Route::get('/contact', action: function () {
    return view('contact', ['title' => 'Contact Page']);
});
