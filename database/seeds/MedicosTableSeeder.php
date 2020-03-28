<?php

use Illuminate\Database\Seeder;
use App\User;

class MedicosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(1);

        $user->medicos()->createMany(
            [
                ['nombre' => 'Orlondo davila'],
                ['nombre' => 'alvis hernandez'],
            
            ]
        );

        //DIRECENCIA QUE EXISTE SON EN LOS PARAMETROS QUE RECIBEN  CADA UNO, CREATEMANY RECIVE VECTOR Y SAVEMANY RECIBE MODELOS 

        $user2 = User::find(2);

        $user2->medicos()->createMany(
            [
                ['nombre' => 'luis eduardo'],
                ['nombre' => 'luisa fernanda'],
            
            ]
        );

    }
}
