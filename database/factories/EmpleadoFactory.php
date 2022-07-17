<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
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
            'telefono'  => $this->faker->randomElement([8,9]).$this->faker->unique()->numerify('#######'),
            'salario' => $this->faker->numerify('#####.##'),
        ];
    }
}
