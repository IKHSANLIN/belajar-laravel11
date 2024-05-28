<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }
    public static function find($slug)
    {

        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        } else {
            return $post;
        }
    }
}
