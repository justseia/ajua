<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Zikr>
 */
class ZikrFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'Саджа',
            'designation' => 'Субхана зиль-мульки валь-малакут. Субхана зиль-иззати валь-азамати в',
            'body' => 'ذَٰلِكَ ٱلۡكِتَٰبُ لَا رَيۡبَۛ فِيهِۛ هُدٗى لِّلۡمُتَّقِينَ',
            'transcription' => 'Зааликаль Китаабу ла райба фих. Худал-лил-Муттакин',
            'audio' => 'https://clck.ru/33GttN',
        ];
    }
}
