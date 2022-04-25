<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);

        Teacher::factory(15)->create();
        $this->call(GroupsTableSeeder::class);

        Student::factory(300)->create();
        $this->call(StudentsTableSeeder::class);
        $this->call(TeachersTableSeeder::class);
    }
}
