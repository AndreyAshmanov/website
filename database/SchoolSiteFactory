<?php

namespace Database\Factories;

use App\Models\SchoolSite;
use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolSiteFactory extends Factory
{
    protected $model = SchoolSite::class;

    public function definition()
    {
        return [
            'id' => User::inRandomOrder()->first()->id,
            'name' => $this->faker->name,
            'Linking_school_ID_site' => function () {
                return \App\Models\LinkingTheSchoolToTheSite::factory()->create()->school_ID;
            },
            'Linking_school_site_ID_site' => function () {
                return \App\Models\LinkingTheSchoolToTheSite::factory()->create()->site_ID;
            },
        ];
    }
}
