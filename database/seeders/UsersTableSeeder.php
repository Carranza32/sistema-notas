<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Super admin',
                'email' => 'super@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1RRIKAt9LXKwwQw4MIbgiePusxcwUyivzbfcgQj/w2s5Dpxd5.EhK',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-26 04:19:55',
                'updated_at' => '2022-03-26 04:19:55',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Profe',
                'email' => 'profe@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1RRIKAt9LXKwwQw4MIbgiePusxcwUyivzbfcgQj/w2s5Dpxd5.EhK',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Estudiante',
                'email' => 'estudiante@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1RRIKAt9LXKwwQw4MIbgiePusxcwUyivzbfcgQj/w2s5Dpxd5.EhK',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}