<?php

namespace Database\Seeders;
use App\Models\contacto;
use Illuminate\Database\Seeder;




class contactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
    contacto::factory()->count(100)->create();
    }
}
