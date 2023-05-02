<?php

namespace Database\Seeders;
use App\Models\evento;
use Illuminate\Database\Seeder;




class eventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    evento::factory()->count(100)->create();
    }
}
