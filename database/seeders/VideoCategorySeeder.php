<?php


namespace Database\Seeders;

use App\Models\VideoCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videoCategory = [
            ['name'=>'videoCat1', 'slug'=>'videoCat1'],
            ['name'=>'videoCat2', 'slug'=>'videoCat2'],
            ['name'=>'videoCat3', 'slug'=>'videoCat3'],
            ['name'=>'videoCat4', 'slug'=>'videoCat4'],
            ['name'=>'videoCat5', 'slug'=>'videoCat5'],
        ];

        foreach ($videoCategory as $category) {
            VideoCategory::create(
                $category
            );

            }
        }

}
