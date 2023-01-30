<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HolidayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'Ид аль-Фитр (Рамадан-байрам)',
            'date' => fake()->dateTimeBetween('2023-01-01', '2023-12-31')->format('Y-m-d'),
        ];
    }
}
