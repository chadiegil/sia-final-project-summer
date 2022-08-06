<?php

namespace Database\Seeders;

use App\Models\Stall;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stall::factory()->count(5)->create();
    }
}
