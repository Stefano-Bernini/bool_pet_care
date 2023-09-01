<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Models\Owner;
use Faker\Provider\en_US\Person;
use Faker\Provider\en_US\Address;
use Faker\Provider\en_US\PhoneNumber;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){

            $owner = new Owner();
            $owner->name = $faker->firstName();
            $owner->surname = $faker->lastName();
            $owner->slug = Str::slug($owner->name);
            $owner->address = $faker->address();
            $owner->telephone = $faker->phoneNumber();
            $owner->email = $faker->email();

            $owner->save();
        }
    }
}
