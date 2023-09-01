<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Adding
use Illuminate\Support\Str;
use App\Models\Sickness;
use Faker\Generator as Faker;

class SicknessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $sickness = new Sickness;

            $sickness->name = $faker->word();
            $sickness->diagnosis = $faker->sentence(3);
            $sickness->treatment = $faker->sentence(3);
            $sickness->notes = $faker->sentence(10);
            $sickness->slug = $sickness->slug = Str::slug($sickness->name);

            $sickness->save();
        };
    }
}
