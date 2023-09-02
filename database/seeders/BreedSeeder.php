<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Breed;
use Illuminate\Support\Str;

class BreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $breeds = ['Cane', 'Gatto', 'Cavallo', 'Rettile', 'Uccello', 'Roditore'];

        foreach($breeds as $breed){
            $newBreed = new Breed();
            $newBreed->name = $breed;
            $newBreed->slug = Str::slug($breed, '-');
            $newBreed->save();
        };
    }
}
