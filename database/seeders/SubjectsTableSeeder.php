<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subjects')->delete();
        
        \DB::table('subjects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Estudios Sociales y Civica',
                'description' => 'Descripcion de la materia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Ciencia, Salud y Medio Ambiente',
                'description' => 'Descripcion de la materia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Lenguaje y Literatura',
                'description' => 'Descripcion de la materia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Matemática',
                'description' => 'Descripcion de la materia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Educación Física',
                'description' => 'Descripcion de la materia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}