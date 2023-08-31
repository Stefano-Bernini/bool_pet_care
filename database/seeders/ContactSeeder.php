<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Contact;
use Faker\Provider\en_US\Person;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $contact = new Contact;
            
            $contact->name = $faker->firstName();
            $contact->last_name = $faker->lastName();
            $contact->email = $faker->safeEmail();
            $contact->message = $faker->sentences(3, true);

            $contact->save();
        };
    }
}
