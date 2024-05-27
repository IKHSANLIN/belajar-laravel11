<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});


Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'judul Artikel 1',
            'author' => 'ikhsan lintang',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis et eos hic
            dolore dignissimos vel autem
            atque esse omnis, molestias ratione voluptatum cumque laboriosam, soluta ab? Laudantium placeat rem aliquam.'

        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'judul Artikel 2',
            'author' => 'ikhsan lintang',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At cum hic dicta delectus
            voluptatum aliquam maiores reprehenderit laboriosam officia quam nihil id, consectetur recusandae distinctio
            assumenda illo modi iure autem?'

        ]
    ]]);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'judul Artikel 1',
            'author' => 'ikhsan lintang',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis et eos hic
            dolore dignissimos vel autem
            atque esse omnis, molestias ratione voluptatum cumque laboriosam, soluta ab? Laudantium placeat rem aliquam.'

        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'judul Artikel 2',
            'author' => 'ikhsan lintang',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At cum hic dicta delectus
            voluptatum aliquam maiores reprehenderit laboriosam officia quam nihil id, consectetur recusandae distinctio
            assumenda illo modi iure autem?'

        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});
