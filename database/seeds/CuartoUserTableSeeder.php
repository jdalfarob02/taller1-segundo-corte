<?php

use Illuminate\Database\Seeder;
use App\User;

class CuartoUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //LA FUNCION ATTACH FUNCIONA CUANDO UNO VA A GUARDAR O AÑADIR UN NUEVO DATO.
        $user = User::find(2);
        //$user ->cuartos()->attach([1]);
        //$user2 = User::find(4);
        //$user2 ->cuartos()->attach([2]);
       //$user3 = User::find(3);
        //$user3 ->cuartos()->attach([3]);

        

        //SYNC SE USA MAS QUE TODO CUANDO SE VA A ACTUALIZAR LOS CAMPOS DE LA TABLA Y FUNCIONA COMO ELIMINAR CAMPOS QUE NO
        //SE UTILICE LO ELIMINE Y SE DEJARA EL QUE LA PERSONA LE ASIGNARA.
        $user->cuartos()->sync([1]);
    }
}
