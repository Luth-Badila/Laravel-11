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
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development'
        ]);

        Category::create([
            'name' => 'AI',
            'slug' => 'ai'
        ]);

        Category::create([
            'name' => 'Handphone',
            'slug' => 'handphone'
        ]);

        Category::create([
            'name' => 'PC',
            'slug' => 'pc'
        ]);

        Category::create([
            'name' => 'TWS',
            'slug' => 'tws'
        ]);
        // Category::factory(5)->create();
    }
}
