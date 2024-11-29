<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TrabajamonSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Combination::factory(100)->create();
        $this->call(TrabajamonSeeder::class);
    }
}
