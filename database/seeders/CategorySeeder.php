<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {

        Category::create([
            'name' => 'No Category',
        ]);

        Category::create([
            'name' => 'Mystery',
        ]);

        Category::create([
            'name' => 'Fiction',
        ]);

        Category::create([
            'name' => 'Self-Help',
        ]);

        Category::create([
            'name' => 'Science Fiction',
        ]);

        Category::create([
            'name' => 'Drama',
        ]);

        Category::create([
            'name' => 'Fantasy',
        ]);

        Category::create([
            'name' => 'Business',
        ]);
    }
}

