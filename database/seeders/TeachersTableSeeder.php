<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('teachers')->delete();
        
        \DB::table('teachers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Zechariah Douglas',
                'last_name' => 'Ledner',
                'email' => 'bkohler@example.org',
                'address' => '23814 Will Pine Suite 661
New Al, CO 12150',
                'phone' => '844.904.2918',
                'subject_id' => 1,
                'user_id' => 4,
                'created_at' => '2022-04-24 23:27:41',
                'updated_at' => '2022-04-24 23:27:41',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Mya Swift',
                'last_name' => 'Schaden',
                'email' => 'oauer@example.org',
                'address' => '39392 Hartmann Union Apt. 308
Hanemouth, AR 60049-9821',
            'phone' => '(866) 867-1347',
                'subject_id' => 1,
                'user_id' => 5,
                'created_at' => '2022-04-24 23:27:42',
                'updated_at' => '2022-04-24 23:27:42',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Bonita Cremin',
                'last_name' => 'Fritsch',
                'email' => 'wintheiser.madge@example.org',
                'address' => '25366 Gerlach Cove
New Boriston, OK 65690',
                'phone' => '1-866-405-1166',
                'subject_id' => 1,
                'user_id' => 6,
                'created_at' => '2022-04-24 23:27:42',
                'updated_at' => '2022-04-24 23:27:42',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Prof. Toby Klein',
                'last_name' => 'Becker',
                'email' => 'lelia41@example.org',
                'address' => '98917 Schuster Ville Suite 835
Rosalynport, NM 81856',
            'phone' => '(800) 665-4237',
                'subject_id' => 1,
                'user_id' => 7,
                'created_at' => '2022-04-24 23:27:42',
                'updated_at' => '2022-04-24 23:27:42',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Mr. Ayden Bailey',
                'last_name' => 'Aufderhar',
                'email' => 'clare56@example.com',
                'address' => '71345 Ryan Fields Apt. 291
Savannaburgh, KS 86677-9397',
                'phone' => '888-947-2902',
                'subject_id' => 1,
                'user_id' => 8,
                'created_at' => '2022-04-24 23:27:42',
                'updated_at' => '2022-04-24 23:27:42',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Mr. Peyton O\'Reilly',
                'last_name' => 'Doyle',
                'email' => 'destiny28@example.com',
                'address' => '810 Grady Forest Suite 498
Lake Chadchester, DE 52301-6579',
                'phone' => '866.590.9349',
                'subject_id' => 1,
                'user_id' => 9,
                'created_at' => '2022-04-24 23:27:42',
                'updated_at' => '2022-04-24 23:27:42',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Consuelo Dietrich DVM',
                'last_name' => 'Fahey',
                'email' => 'mclaughlin.judge@example.net',
                'address' => '63351 Will Ridge
Port Glendamouth, MI 93458',
                'phone' => '877-447-8090',
                'subject_id' => 1,
                'user_id' => 10,
                'created_at' => '2022-04-24 23:27:42',
                'updated_at' => '2022-04-24 23:27:42',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Melyssa Schmitt',
                'last_name' => 'Treutel',
                'email' => 'kjohnston@example.net',
                'address' => '930 Yoshiko Ways
Hermanmouth, TX 67824-5945',
                'phone' => '866.323.2294',
                'subject_id' => 1,
                'user_id' => 11,
                'created_at' => '2022-04-24 23:27:42',
                'updated_at' => '2022-04-24 23:27:42',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Micheal Hirthe',
                'last_name' => 'Wolf',
                'email' => 'kilback.shayne@example.net',
                'address' => '811 Koby Port Apt. 912
Marceloview, MS 70053',
            'phone' => '(844) 428-5529',
                'subject_id' => 1,
                'user_id' => 12,
                'created_at' => '2022-04-24 23:27:42',
                'updated_at' => '2022-04-24 23:27:42',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Brooks Mosciski DDS',
                'last_name' => 'Toy',
                'email' => 'eswift@example.com',
                'address' => '28448 Kaylin Fields Suite 635
Monahanburgh, TN 93695',
            'phone' => '(888) 704-9236',
                'subject_id' => 1,
                'user_id' => 13,
                'created_at' => '2022-04-24 23:27:42',
                'updated_at' => '2022-04-24 23:27:42',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Francisca O\'Keefe Jr.',
                'last_name' => 'Miller',
                'email' => 'spurdy@example.org',
                'address' => '84122 Kessler Summit Suite 397
North Candicebury, GA 09849-3309',
                'phone' => '877.994.7680',
                'subject_id' => 1,
                'user_id' => 14,
                'created_at' => '2022-04-24 23:27:42',
                'updated_at' => '2022-04-24 23:27:42',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Ronaldo Emmerich',
                'last_name' => 'Harber',
                'email' => 'carmela.buckridge@example.org',
                'address' => '3651 Aidan Rue
North Ravenland, MN 03058-6390',
                'phone' => '855.639.8057',
                'subject_id' => 1,
                'user_id' => 15,
                'created_at' => '2022-04-24 23:27:42',
                'updated_at' => '2022-04-24 23:27:42',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Albertha Mann',
                'last_name' => 'Leuschke',
                'email' => 'vaughn.jacobs@example.org',
                'address' => '3025 Lang Corners Apt. 739
New Nikitamouth, NM 94429',
                'phone' => '1-888-418-5876',
                'subject_id' => 1,
                'user_id' => 16,
                'created_at' => '2022-04-24 23:27:42',
                'updated_at' => '2022-04-24 23:27:42',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Esta Gerhold',
                'last_name' => 'Howell',
                'email' => 'carroll.ova@example.org',
                'address' => '86038 Block Meadows Suite 681
Gisselleview, ID 55663',
                'phone' => '877-327-8654',
                'subject_id' => 1,
                'user_id' => 17,
                'created_at' => '2022-04-24 23:27:42',
                'updated_at' => '2022-04-24 23:27:42',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Prof. Aaliyah Breitenberg IV',
                'last_name' => 'Gerlach',
                'email' => 'tristian.kunze@example.org',
                'address' => '16298 Noemy Highway Suite 748
Langview, MT 63402',
            'phone' => '(844) 738-8697',
                'subject_id' => 1,
                'user_id' => 18,
                'created_at' => '2022-04-24 23:27:42',
                'updated_at' => '2022-04-24 23:27:42',
            ),
        ));
        
        
    }
}