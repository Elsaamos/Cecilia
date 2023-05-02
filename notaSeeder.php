<?php

namespace Database\Seeders;

use App\Models\nota;
use Illuminate\Database\Seeder;



class notaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        nota::factory()->count(100)->create();
    }
}
