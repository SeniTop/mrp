<?php

namespace Database\Seeders;

use App\Models\Persetujuan;
use Illuminate\Database\Seeder;

class PersetujuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Persetujuan::factory()
            ->count(5)
            ->create();
    }
}
