<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Info>
 */
class InfoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'header' => $this->faker->words(rand(3, 6), true),
            'content' => $this->faker->paragraphs(asText: true),
        ];
    }

}
