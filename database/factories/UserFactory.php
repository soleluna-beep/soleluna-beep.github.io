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
     * @return array
     */
    public function definition()
    {
        return [
            'nome'=> $this->faker->firstname(),
            'cognome'=> $this->faker->lastname(),
            'email'=> $this->faker->unique()->safeEmail(),
            'cellulare'=> $this->faker->phoneNumber(),
            'indirizzo'=> $this->faker->address(),
            'citta'=> $this->faker->city(),
            'cap'=> $this->faker->postcode(),
            'provincia'=>$this->faker->city(),
            'password'=> '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role' => 'cliente',
        ];
    }

}