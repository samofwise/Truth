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
        DB::table('posts')->delete();
        DB::table('users')->delete();

    }
}