<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'Kalmurat',
            'surname' => 'Seiitmurat',
            'gender' => 'male',
            'email' => fake()->email(),
            'birthday' => fake()->dateTimeBetween('2023-01-01', '2023-12-31')->format('Y-m-d'),
        ];
    }
}
