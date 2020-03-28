<?php

use Illuminate\Database\Seeder;
use App\Models\Estado;
use App\User;

class EstadoTableSeeder extends Seeder
{
    
    public function run()
    {
        $estado = new Estado;
        $estado->estado = 'critico';
        $estado->save();

        $user = new User;
        $user ->name = 'oscar vetancour';
        $user->email = 'oscarveta02@gmail.com';
        $user->telefono = '3024406790';

        $user2 = new User;
        $user2 ->name = 'sofis rodriguez';
        $user2->email = 'sofisrodri@gmail.com';
        $user2->telefono = '31877685900';

        $estado->users()->saveMany([$user, $user2]);
    }
}
