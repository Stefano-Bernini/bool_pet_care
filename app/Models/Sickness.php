<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// adding +++++
use App\Models\Animal;

class Sickness extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'diagnosis', 'treatment', 'notes', 'slug'];

    public function animals(){
        return $this->belongsToMany(Animal::class);
    }
}
