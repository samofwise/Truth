<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableClearingSeeder extends Seeder
{
    /**
     * Clears Tables for Seeding
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('tags')->truncate();
        DB::table('posts')->truncate();
        DB::table('users')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}