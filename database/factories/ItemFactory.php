<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(rand(3, 6), true),
            'image_url' => 'https://random.imagecdn.app/250/400',
            'description' => $this->faker->optional()->paragraph(),
        ];
    }
}
