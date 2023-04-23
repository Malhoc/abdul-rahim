<?php

namespace Database\Factories;

use App\Models\VideoCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->name(),
            'summary' => fake()->sentence(),
            'description' => fake()->sentence(),
            'author_name' => fake()->name(),
            'book' => fake()->name(),
            'narrated_by' => fake()->name(),
            'slug' => fake()->slug(),
            'video' => 'videos/default.m4v',
            'thumbnail' => 'videos/default.m4v',
            'meta_tag_title' => fake()->name(),
            'meta_tag_keywords' => fake()->name(),
            'meta_tag_description' => fake()->sentence(),
            'thumbnail_alt' => fake()->name(),
            'video_alt' => fake()->name(),
            'is_active' => fake()->boolean(),
            'video_category_id' => VideoCategory::all()->pluck('id')->random(),
        ];
    }
}
