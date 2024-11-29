<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Combination;


class CombinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Combination::factory(100)->create();
    }
}