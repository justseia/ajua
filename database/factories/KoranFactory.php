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
            'name' => 'Аль-Фатиха',
            'designation' => '(Открывающая Коран)',
            'body' => 'ذَٰلِكَ ٱلۡكِتَٰبُ لَا رَيۡبَۛ فِيهِۛ هُدٗى لِّلۡمُتَّقِينَ',
            'translation' => 'Во имя Аллаха, Милостивого, Милосердного!',
            'translit' => 'Bismi Al-Lahi Ar-Raĥmāni Ar-Raĥīmi',
            'audio' => 'https://clck.ru/33GttN',
            'interpretation' => 'Аль-Фатиха',
        ];
    }
}
