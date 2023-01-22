<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Koran>
 */
class KoranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'body' => fake()->text(),
            'translation' => fake()->text(),
            'translit' => fake()->text(),
            'audio' => 'https://clck.ru/33GttN',
            'description' => fake()->text(),
        ];
    }
}
