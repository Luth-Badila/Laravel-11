<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'color' => "green"
        ]);

        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
            'color' => "blue"
        ]);

        Category::create([
            'name' => 'AI',
            'slug' => 'ai',
            'color' => "lime"
        ]);

        Category::create([
            'name' => 'Handphone',
            'slug' => 'handphone',
            'color' => "red"
        ]);

        Category::create([
            'name' => 'PC',
            'slug' => 'pc',
            'color' => "yellow"
        ]);

        Category::create([
            'name' => 'TWS',
            'slug' => 'tws',
            'color' => "gray"
        ]);
        // Category::factory(5)->create();
    }
}
