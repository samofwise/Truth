<?php

use App\User;
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
        User::createContributor(['name' => 'contrib', 'displayName' => $faker->firstNameMale, 'email' => 'contrib@truth.com', 'password' => bcrypt('password')]);
        for ($i = 1; $i <= 5; $i++) {
            User::createContributor(['name' => $faker->name, 'displayName' => $faker->firstNameMale, 'email' => $faker->email, 'password' => bcrypt('password')]);
        }


        //Create Admins
        User::createContributor(['name' => 'admin', 'displayName' => $faker->firstNameMale, 'email' => 'admin@truth.com', 'password' => bcrypt('password'), 'admin' => true]);

        for ($i = 1; $i <= 5; $i++) {
            User::createContributor(['name' => $faker->name, 'displayName' => $faker->firstNameMale, 'email' => $faker->email, 'password' => bcrypt('password'), 'admin' => true]);
        }


        //Create Viewers
        User::createViewer(['displayName' => $faker->firstNameMale, 'email' => 'viewer@truth.com']);
        for ($i = 1; $i <= 5; $i++) {
            User::createViewer(['displayName' => $faker->firstNameMale, 'email' => $faker->email]);
        }
    }
}