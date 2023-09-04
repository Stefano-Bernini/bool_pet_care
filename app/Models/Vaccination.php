<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;
use App\Models\Vaccine;

class Vaccination extends Model
{
    use HasFactory;

    protected $table = 'animal_vaccine';
    protected $fillable = ['animal_id', 'vaccine_id', 'date', 'dosage', 'note'];
    
    public function animal(){
        return $this->belongsTo(Animal::class);
    }

    public function vaccine(){
        return $this->belongsTo(Vaccine::class);
    }

}
