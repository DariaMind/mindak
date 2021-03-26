<?php

namespace Database\Seeders;

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
         \App\Models\User::factory(10)->create();
         \App\Models\Holl::factory(3)->create();
         \App\Models\Trainer::factory(6)->create();
         \App\Models\Gallery::factory(20)->create();
    }
}
