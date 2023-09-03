<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// adding ++++
use App\Models\Vaccine;
use App\Models\Owner;
use App\Models\Breed;

use App\Models\Sickness;


class Animal extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'slug', 'specie', 'vacinazioni', 'malattie', 'owner_id'];

    public function vaccines(){
        return $this->belongsToMany(Vaccine::class)->withPivot('date', 'dosage', 'note');
    }
    public function sicknesses(){
        return $this->belongsToMany(Sickness::class);
    }

    public function owner(){
        return $this->belongsTo(Owner::class);
    }
    
    public function breed(){
        return $this->belongsTo(Breed::class);
    }

}
