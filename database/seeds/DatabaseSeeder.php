<?php

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
        $this->call(DistrictsTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        //$this->call(PostSeeder::class);
    }
}
