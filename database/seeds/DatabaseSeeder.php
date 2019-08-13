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
         $this->call(CarModelsTableSeeder::class);

         factory(\App\Models\Role::class, 3)->create();
         factory(\App\Models\Car::class, 300)->create();
    }
}
