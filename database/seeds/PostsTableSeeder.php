<?php

use App\Contributor;
use App\Post;
use App\User;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Seed Posts Table
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        //Create Posts
        for ($i = 1; $i <= 10; $i++) {
            Post::create(['title' => $faker->sentence, 'body' => $faker->paragraph, 'user_id' => User::contributors()->first()->id]);
        }
    }
}