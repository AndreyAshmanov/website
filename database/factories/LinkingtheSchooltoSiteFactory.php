<?php

namespace Database\Factories;

use App\Models\SchoolSite;
use Illuminate\Database\Eloquent\Factories\Factory;
 
class LinkingtheSchooltoSiteFactory extends Factory
{
 /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
 protected $model = LinkingtheSchoolto::class;
 
 /**
    * Define the model's default state.
 *
    * @return array
    */
 public function definition()
 {
     return [
        'school_ID' => School::inRandomOrder()->first()->id,
        'site_ID' => School::inRandomOrder()->first()->id,
     ];
 }
