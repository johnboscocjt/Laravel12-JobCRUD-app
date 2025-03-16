<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //http://picsum.photos/seed/{{ rand(0,100000) }}
            'name' => fake()->name,
            // 'logo' => fake()->imageUrl(),
           'logo' => 'https://picsum.photos/seed/' . rand(0, 100000) . '/200/200', // Generates a 200x200 image
            'user_id' => User::factory(),

        ];
    }
}
