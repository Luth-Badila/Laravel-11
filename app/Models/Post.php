<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all()
    {
        return [
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
        ];
    }

    public static function find($slug): array {
        // return  Arr::first(static::all(), function($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (! $post) {
            abort(404);
        }

        return $post;
    }
}
