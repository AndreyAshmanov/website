<?php

namespace Database\Seeders;

use App\Models\SchoolSite;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    public function run()
    {
        SchoolSite::factory()
            ->count(10) // Количество записей, которые вы хотите создать
            ->create();
    }
}
