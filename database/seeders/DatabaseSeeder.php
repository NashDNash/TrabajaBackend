<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TrabajamonSeeder;
use Database\Seeders\CombinationSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CombinationSeeder::class);
        $this->call(TrabajamonSeeder::class);
    }
}
