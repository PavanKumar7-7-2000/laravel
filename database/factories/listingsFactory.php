<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\listings>
 */
class listingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'tags' => 'Laravel, api, backend',
            'company' => $this->faker->company(),
            'location' => $this->faker->city(),
            'website' => $this->faker->url(),
            'email' => $this->faker->companyEmail(),
            'description' => $this->faker->paragraph(),
        ];
    }
}
