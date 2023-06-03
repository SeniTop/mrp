<?php

namespace Database\Seeders;

use App\Models\MrpPost;
use Illuminate\Database\Seeder;

class MrpPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MrpPost::factory()
            ->count(5)
            ->create();
    }
}
