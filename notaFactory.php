<?php

namespace Database\Factories;
use app\Models\nota;
use Illuminate\Database\Eloquent\Factories\Factory;
class notaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {     return [
            'texto_nota'=>$this->faker->text(),
            'fecha_y_hora'=>$this->faker->date(),
            'contacto_id'=>$this->faker->numberBetween(0,100),
        ];
    }
};
