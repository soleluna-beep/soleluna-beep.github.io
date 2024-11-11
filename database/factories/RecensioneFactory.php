<?php

namespace Database\Factories;
use App\Models\Recensione;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RecensioneFactory>
 */
class RecensioneFactory extends Factory
{
    protected $model = Recensione::class;

    public function definition()
    {
        return [
            'autore' => $this->faker->name(),
            'stelle' => random_int(1,5),
            'testo' => $this->faker->paragraph(),
        ];
    }
}
