<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Download>
 */
class DownloadFactory extends Factory
{
    public function definition(): array
    {
        return [
            'button_text' => $this->faker->word(),
            'url' => $this->faker->url(),
        ];
    }

}
