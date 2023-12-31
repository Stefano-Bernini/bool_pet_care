<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;

class Vaccine extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function animals(){
        return $this->belongsToMany(Animal::class)->withPivot('date', 'dosage', 'note');
    }
}
