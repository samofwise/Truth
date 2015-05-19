<?php

use App\Contributor;
use App\Viewer;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed Users Table
     */
    public function run()
    {
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