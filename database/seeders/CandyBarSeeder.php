<?php

namespace Database\Seeders;

use App\Models\CandyBar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CandyBarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CandyBar::factory(20)->create();
    }
}
