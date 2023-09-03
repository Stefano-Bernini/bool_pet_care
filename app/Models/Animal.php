<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vaccine;
use App\Models\Owner;
use App\Models\Breed;



class Animal extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'slug', 'breed_id', 'specie', 'vacinazioni', 'malattie', 'owner_id'];
    public function vaccines(){
        return $this->belongsToMany(Vaccine::class)->withPivot('date', 'dosage', 'note');
    }

    public function owner(){
        return $this->belongsTo(Owner::class);
    }
    
    public function breed(){
        return $this->belongsTo(Breed::class);
    }

}
