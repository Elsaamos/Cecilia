<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
   
 
   
    public function run()
    {
        $this->call(contactoSeeder::class);
        $this->call(eventoSeeder::class);
        $this->call(notaSeeder::class);
        
    }
}
