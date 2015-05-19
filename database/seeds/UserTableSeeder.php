<?php

use App\Contributor;
use App\Viewer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Seed Users Table
     */
    public function run()
    {

        DB::table('users')->delete();

        $faker = Faker\Factory::create();

        //Create Contributors
        for ($i = 1; $i <= 5; $i++) {
            Contributor::create(['name' => $faker->name, 'displayName' => $faker->firstNameMale, 'email' => $faker->email, 'password' => bcrypt('password')]);
        }


        //Create Admins
        for ($i = 1; $i <= 5; $i++) {
            Contributor::create(['name' => $faker->name, 'displayName' => $faker->firstNameMale, 'email' => $faker->email, 'password' => bcrypt('password'), 'admin' => true]);
        }

        //Create Viewers
        for ($i = 1; $i <= 5; $i++) {
            Viewer::create(['displayName' => $faker->firstNameMale, 'email' => $faker->email]);
        }
    }
}