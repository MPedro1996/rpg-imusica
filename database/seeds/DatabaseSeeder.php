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
//         $this->call(UsersTableSeeder::class);
         $this->call(DadoSeeder::class);
         $this->call(ArmaSeeder::class);
         $this->call(RacaSeeder::class);
    }
}
