<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vaccination;
use App\Models\Animal;
use App\Models\Vaccine;
use App\Http\Requests\StoreVaccinationRequest;
use App\Http\Requests\UpdateVaccinationRequest;

class VaccinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Int $id)
    {
        $vaccinations = Vaccination::where('animal_id', '=', $id)->get();
        return view('admin.vaccinations.index', compact('vaccinations', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Int $id)
    {
        $vaccines = Vaccine::all();
        $animal = Animal::find($id);
        $animals = Animal::all();
        return view('admin.vaccinations.create', compact('vaccines','animal', 'animals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVaccinationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVaccinationRequest $request)
    {
        $data = $request->all();
        $vaccination = new Vaccination();
        $vaccination->fill($data);
        $vaccination->save();

        return redirect()->route('admin.animals.show', $data['animal_id']);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaccination  $vaccination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaccination $vaccination)
    {
        //
    }
}
