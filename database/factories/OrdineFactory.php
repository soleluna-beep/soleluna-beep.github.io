<?php

namespace Database\Factories;
use App\Models\Ordine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrdineFactory>
 */
class OrdineFactory extends Factory
{
    
    protected $model = Ordine::class;
    
    public function definition()
    {
        return [
            'prodotto_uno' => $this->faker->randomelement(['Salame Bergamasco', 'Cacciatore', 'Coppa', 'Pancetta', 'Salamelle', 'Cotechini']),
            'quantita_uno' => $this->faker->numberBetween(1, 20),
            'prodotto_due'=> $this->faker->randomelement(['Salame Bergamasco', 'Cacciatore', 'Coppa', 'Pancetta', 'Salamelle', 'Cotechini']), 
            'quantita_due' => $this->faker->numberBetween(1, 20),
            'prodotto_tre'=> $this->faker->randomelement(['Salame Bergamasco', 'Cacciatore', 'Coppa', 'Pancetta', 'Salamelle', 'Cotechini']), 
            'quantita_tre'=> $this->faker->numberBetween(1, 20),
            'prodotto_quattro'=> $this->faker->randomelement(['Salame Bergamasco', 'Cacciatore', 'Coppa', 'Pancetta', 'Salamelle', 'Cotechini']), 
            'quantita_quattro' => $this->faker->numberBetween(1, 20),
            'prodotto_cinque'=> $this->faker->randomelement(['Salame Bergamasco', 'Cacciatore', 'Coppa', 'Pancetta', 'Salamelle', 'Cotechini']), 
            'quantita_cinque' => $this->faker->numberBetween(1, 20),
            'prodotto_sei'=> $this->faker->randomelement(['Salame Bergamasco', 'Cacciatore', 'Coppa', 'Pancetta', 'Salamelle', 'Cotechini']), 
            'quantita_sei' => $this->faker->numberBetween(1, 20),
            'descrizione' => $this->faker->paragraph(),
        ];
    }
}
