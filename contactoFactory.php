<?php

namespace Database\Factories;
use app\Models\contacto;
use Illuminate\Database\Eloquent\Factories\Factory;
class contactoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(){
    return [
            'nombre'=>$this->faker->name(),
            'apellido'=>$this->faker->lastname(),
            'correo'=>$this->faker->email(),
            'telefono'=>$this->faker->phonenumber(),
        ];

      }
};
