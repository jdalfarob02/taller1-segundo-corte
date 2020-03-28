<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('users')->truncate();//vaciar la tabla
        DB::table('carnets')->truncate();
        DB::table('localidads')->truncate();
        DB::table('medicos')->truncate();
        DB::table('cuartos')->truncate();
        ;
        


        //DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        $this->call(UsersTableSeeder::class);
        $this->call(EstadoTableSeeder::class);
        $this->call(MedicosTableSeeder::class);
        $this->call(CuartoTableSeeder::class);
        $this->call(CuartoUserTableSeeder::class);

    }
}
