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
        ]);
        Category::create([
            'name' => 'Graphic Design',
            'slug' => 'graphic-design',
        ]);
        
        Category::create([
            'name' => 'Digital Marketing',
            'slug' => 'digital-marketing',
        ]);
        
        Category::create([
            'name' => 'SEO',
            'slug' => 'seo',
        ]);
        
        Category::create([
            'name' => 'Content Writing',
            'slug' => 'content-writing',
        ]);
        
    }
}
