<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->sentence(10, true),
            'excerpt' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
            'minutes_to_read' => $this->faker->numberBetween(1, 20),
            'image_path' => $this->faker->imageUrl(640, 480, null, true, null, false),
            'is_published' => $this->faker->numberBetween(0, 1),
        ];
    }
}
