<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Animal;
use Faker\Provider\en_US\Person;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $animal = new Animal();
            $animal->nome = $faker->word(1);
            $animal->specie = $faker->randomElement(['Canina', 'Felino', 'Rettile', 'Uccello', 'Roditore']);
            $animal->malattie = $faker->words(4, true);
            $animal->propietario = $faker->name();
            
            $animal->save();
        }
    }
}
