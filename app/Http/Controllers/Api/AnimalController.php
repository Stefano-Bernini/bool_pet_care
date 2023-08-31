<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::with('vaccines')->get();
        return response()->json([

            'success' => true,
            'results' => $animals

        ]);
    }
}
