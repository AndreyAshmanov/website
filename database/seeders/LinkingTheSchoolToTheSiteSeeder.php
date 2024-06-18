<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LinkingTheSchoolToTheSite;

class LinkingTheSchoolToTheSiteSeeder extends Seeder
{
 /**
  * Run the database seeds.
  *
  * @return void
 */
    public function run()
    {
        SchoolSite::factory()
            ->count(10) // Количество записей, которые вы хотите создать
            ->create();
    }
}
