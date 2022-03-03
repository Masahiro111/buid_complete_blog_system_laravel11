<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'extension' => 'jpg',
            'path' => 'images/' . mt_rand(1, 6) . '.jpg',
            // 'imageable_id' => 1,
            // 'imageable_type' => 'App\Models\Post',
        ];
    }
}
