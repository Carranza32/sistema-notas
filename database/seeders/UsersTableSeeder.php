<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
                'password' => bcrypt('secret123'),
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-26 04:19:55',
                'updated_at' => '2022-03-26 04:19:55',
            ),
        ));


    }
}
