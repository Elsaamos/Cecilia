<?php

namespace Database\Factories;
use app\Models\evento;
use Illuminate\Database\Eloquent\Factories\Factory;
class eventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'titulo'=>$this->faker->title(),
            'descrpcion'=>$this->faker->text(),
            'fecha_inicio'=>$this->faker->date(),
            'fecha_final'=>$this->faker->dateTime(),
            'contacto_id'=>$this->faker->numberBetween(0,100)
        ];
    }
};
