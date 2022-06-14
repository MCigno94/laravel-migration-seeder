<?php

use Illuminate\Database\Seeder;
use HousesSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HousesSeeder::class);
    }
}