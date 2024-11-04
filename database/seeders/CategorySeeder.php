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
            'color' => 'red',
        ]);
        Category::create([
            'name' => 'Graphic Design',
            'slug' => 'graphic-design',
            'color' => 'green',

        ]);

        Category::create([
            'name' => 'Digital Marketing',
            'slug' => 'digital-marketing',
            'color' => 'yellow',

        ]);

        Category::create([
            'name' => 'SEO',
            'slug' => 'seo',
            'color' => 'blue',

        ]);

        Category::create([
            'name' => 'Content Writing',
            'slug' => 'content-writing',
            'color' => 'purple',

        ]);
    }
}
