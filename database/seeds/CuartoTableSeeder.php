<?php

use Illuminate\Database\Seeder;
use App\Models\Cuarto;

class CuartoTableSeeder extends Seeder
{
    
    public function run()
    {
        Cuarto::create(['cuarto' => 'cuidados intencivos']);
        Cuarto::create(['cuarto' => 'pedriatria']);
        Cuarto::create(['cuarto' => 'sala de espera']);
        Cuarto::create(['cuarto' => 'cirugia']);
    }
}
