<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Seed Tags Table
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        //Create Tags
        for ($i = 1; $i <= 10; $i++) {
            Tag::create(['name' => $faker->streetSuffix]);
        }
    }
}