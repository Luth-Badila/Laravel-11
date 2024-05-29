<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Home Page"]);
});

Route::get('/about', function () {
    return view('about', ["name" => "Muhammad Lutfi Badila", "title" => "About Page"]);
});

Route::get('/posts', function () {
    return view('posts', ["title" => "Blog Page", "posts" => [
        [
            'id' => 1,
            'slug' => 'mu-juara-piala-fa',
            'title' => 'MU Juara Piala FA',
            'author' => 'Muhammad Lutfi Badila',
            'body' => 'MU berhasil mengalahkan tetangganya yaitu Manchester City dalam final piala FA yang diadakan pada Sabtu 25 Mei 2024'
        ],
        [
            'id' => 2,
            'slug' => 'arsenal-peringkat-2-liga-inggris-dan-chelsea-dapat-hikmahnya',
            'title' => 'Arsenal peringkat 2 liga inggris dan Chelsea dapat hikmahnya',
            'author' => 'Muhammad Lutfi Badila',
            'body' => 'Arsenal memang memberi perlawanan yangs sengit kepada Manchester City dalam perebutan juara liga inggris, namun mereka harus menelan pil pahit karena poin mereka tidak cukup untuk menyalip Manchester City yang tampil mengesankan sepanjang musim walaupun pada awal musim mereka mendapat trofi community shield, lebih buruk lagi musim yang dialami chelsea mereka peringkat ke 7 dan tidak dapat piala apapun namun sepertinya mereka bisa bermain di liga eropa atau liga konferensi eropa'
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'mu-juara-piala-fa',
            'title' => 'MU Juara Piala FA',
            'author' => 'Muhammad Lutfi Badila',
            'body' => 'MU berhasil mengalahkan tetangganya yaitu Manchester City dalam final piala FA yang diadakan pada Sabtu 25 Mei 2024'
        ],
        [
            'id' => 2,
            'slug' => 'arsenal-peringkat-2-liga-inggris-dan-chelsea-dapat-hikmahnya',
            'title' => ' Arsenal peringkat 2 liga inggris dan Chelsea dapat hikmahnya',
            'author' => 'Muhammad Lutfi Badila',
            'body' => 'Arsenal memang memberi perlawanan yangs sengit kepada Manchester City dalam perebutan juara liga inggris, namun mereka harus menelan pil pahit karena poin mereka tidak cukup untuk menyalip Manchester City yang tampil mengesankan sepanjang musim walaupun pada awal musim mereka mendapat trofi community shield, lebih buruk lagi musim yang dialami chelsea mereka peringkat ke 7 dan tidak dapat piala apapun namun sepertinya mereka bisa bermain di liga eropa atau liga konferensi eropa'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact Page"]);
});
