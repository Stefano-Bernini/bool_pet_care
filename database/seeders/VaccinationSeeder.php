<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Vaccination;

class VaccinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<10;$i++){
            $vaccination = new Vaccination();
            $vaccination->vaccine_id = random_int(1, 10);
            $vaccination->animal_id = random_int(1,10);
            $vaccination->date = $faker->date();
            $vaccination->dosage = $faker->randomDigitNotNull().'0';
            $vaccination->note = $faker->text();
            $vaccination->save();
        }
    }
}
