<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Administrador',
                'guard_name' => 'web',
                'created_at' => '2022-04-18 13:00:46',
                'updated_at' => '2022-04-18 13:00:46',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Profesor',
                'guard_name' => 'web',
                'created_at' => '2022-04-18 13:01:28',
                'updated_at' => '2022-04-18 13:01:28',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Estudiante',
                'guard_name' => 'web',
                'created_at' => '2022-04-18 13:01:35',
                'updated_at' => '2022-04-18 13:01:35',
            ),
        ));
        
        
    }
}