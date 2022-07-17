<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName .' '.$this->faker->lastName ,
            'identidad' => $this->faker->numerify('####').'-'.$this->faker->numerify('####').'-'.$this->faker->numerify('#####'),
            'genero' =>$this->faker->randomElement($array = array ('F','M')),
            'ciudad' => $this->faker->city(),
            'colonia' => $this->faker->randomElement($array = array ('Nueva Esperanza','La Cofradía','Las Brisas','Vista Hermosa', 'Reforma','Vista La ceibita')),
            'telefono'  => $this->faker->randomElement([8,9]).$this->faker->unique()->numerify('#######'),

        ];
    }
}
