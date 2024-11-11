<?php

namespace Database\Factories;
use App\Models\Prodotto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProdottoFactory>
 */
class ProdottoFactory extends Factory
{
    
    protected $model = Prodotto::class;

    public function definition()
    {
        return [
            'immagine' => $this->faker->imageUrl(),
            'nome' => $this->faker->name(),
            'prezzo' => $this->faker->numberBetween(10, 30),
            'stato' => $this->faker->randomelement(['Disponibile', 'Non Disponibile']),
        ];
    }
}
