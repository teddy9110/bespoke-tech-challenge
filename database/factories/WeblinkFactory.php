<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Weblink>
 */
class WeblinkFactory extends Factory
{
    public function definition(): array
    {
        return [
            'button_text' => $this->faker->word(),
            'url' => $this->faker->url(),
        ];
    }

}
