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
     
        $this->call(DataFotoSeeder::class);
        $this->call(dataCetakSeeder::class);

        // $this->call(UserSeeder::class);
    }
}
