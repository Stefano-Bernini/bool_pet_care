<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vaccine;


class Animal extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'specie', 'vacinazioni', 'malattie', 'propietario'];

    public function vaccines(){
        return $this->belongsToMany(Vaccine::class);
    }

}
