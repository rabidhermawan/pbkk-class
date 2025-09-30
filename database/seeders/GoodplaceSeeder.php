<?php

namespace Database\Seeders;

use App\Models\Goodplace;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoodplaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Goodplace::factory()->count(50)->create();
    }
}
