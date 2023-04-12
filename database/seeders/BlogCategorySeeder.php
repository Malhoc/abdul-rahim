<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name'=>'cat1', 'slug'=>'cat1'],
            ['name'=>'cat2', 'slug'=>'cat2'],
            ['name'=>'cat3', 'slug'=>'cat3'],
            ['name'=>'cat4', 'slug'=>'cat4'],
            ['name'=>'cat5', 'slug'=>'cat5'],
        ];

        foreach ($categories as $category) {
            BlogCategory::create(
                // ['name' => $category['name'],  'slug' => $category['slug']],
                $category
            );
        }
    }
}
