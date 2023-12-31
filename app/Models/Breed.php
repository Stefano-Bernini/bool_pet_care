<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;

class Breed extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function animals(){
        return $this->hasMany(Animal::class);
    }
}
