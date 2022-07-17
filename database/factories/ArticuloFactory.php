<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'articuloB' => $this->faker->randomElement($array = array ('USB', 'Maus324','CargadorPTC', 'CargadorPTUSB')),
            'precio' => $this->faker->numerify('#####.##'),
            'articuloC' => $this->faker->randomElement($array = array ('PCcoreli3', 'PCcoreli5','PCcoreli7','PCcorelInside')),
            'precio2' => $this->faker->numerify('#####.##'),
        ];
    }
}
