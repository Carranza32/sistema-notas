<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('groups')->delete();
        
        \DB::table('groups')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '1 A',
                'teacher_id' => 10,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '1 B',
                'teacher_id' => 10,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '1 C',
                'teacher_id' => 7,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '2 A',
                'teacher_id' => 6,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => '2 B',
                'teacher_id' => 12,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => '2 C',
                'teacher_id' => 10,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => '3 A',
                'teacher_id' => 5,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => '3 B',
                'teacher_id' => 7,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => '3 C',
                'teacher_id' => 3,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => '4 A',
                'teacher_id' => 11,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => '4 B',
                'teacher_id' => 12,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => '4 C',
                'teacher_id' => 8,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => '5 A',
                'teacher_id' => 4,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => '5 B',
                'teacher_id' => 3,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => '5 C',
                'teacher_id' => 10,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => '6 A',
                'teacher_id' => 9,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => '6 B',
                'teacher_id' => 4,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => '6 C',
                'teacher_id' => 13,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => '7 A',
                'teacher_id' => 2,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => '7 B',
                'teacher_id' => 2,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => '7 C',
                'teacher_id' => 9,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => '8 A',
                'teacher_id' => 7,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => '8 B',
                'teacher_id' => 6,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => '8 C',
                'teacher_id' => 5,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => '9 A',
                'teacher_id' => 11,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => '9 B',
                'teacher_id' => 15,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => '9 C',
                'teacher_id' => 15,
                'created_at' => '2022-04-24 23:16:09',
                'updated_at' => '2022-04-24 23:16:09',
            ),
        ));
        
        
    }
}