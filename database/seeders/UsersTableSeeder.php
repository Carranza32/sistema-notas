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
                'name' => 'mario',
                'email' => 'mario.carranza996@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$MQuTajTyM9RiIOpJ1VOp..LN4lQjetP4mgYuERvzPuDYpLQpBeC56',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-26 04:19:55',
                'updated_at' => '2022-03-26 04:19:55',
            ),
        ));
        
        
    }
}