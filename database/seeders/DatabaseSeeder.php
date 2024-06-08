<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        // Post::create([
        //     'title' => 'Mbappe ke Real Madrid, Barcelona patut waspada',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'Mbappe_ke_real_madrid_barcelona_patut_waspada',
        //     'body' => 'Mbappe ke Real Madrid, Barcelona patut waspada karena lini depan rival mereka sengat menakutkan ditambah lagi mereka punya kecepatan.'
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class]); // Paggil seeder dahulu
        Post::factory(100)->recycle([
            Category::all(), // lalu panggil modelnya
            User::all()
        ])->create();
    }
}
