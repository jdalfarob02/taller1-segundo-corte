<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Carnet;
use App\Models\Localidad;

class UsersTableSeeder extends Seeder
{
    
    public function run()
    {
        $user = new User;
        $user ->name = 'Jesus david alfaro benitez';
        $user->email = 'jdalfarob02@gmail.com';
        $user->telefono = '3006208753';
        $user->save(); 
        $carnet = new Carnet;
        $carnet ->carnet = 'Mutualser';
        $user->carnet()->save($carnet);


        $user2 = new User;
        $user2 ->name = 'maria jose perez';
        $user2->email = 'mariap@gmail.com';
        $user2->telefono = '3004567000';
        $user2->save();

        $carnet2 = new Carnet;
        $carnet2 ->carnet = 'Salud Social';
        $user2->carnet()->save($carnet2);
         


        

        $localidad = new Localidad;
        $localidad->name = "Estados Unidos";
        $carnet->localidad()->save($localidad);

        $localidad2 = new Localidad;
        $localidad2->name = "Colombia";

                
        $carnet2->localidad()->save($localidad2);



    }
}
