<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement(['$50,000 USD','$60,000 USD','$75,000 USD','$97,000 USD','$112,000 USD']),
            'location' => 'Remote',
            'schedule' => fake()->randomElement(['Full Time','Part Time','Flexible']),
            'url' => fake()->url,
            'featured' => fake()->randomElement([true,false]),
        ];
    }
}