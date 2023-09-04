<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Owner;
use App\Models\Breed;
use App\Models\Vaccination;
use App\Http\Requests\StoreAnimalRequest;
use App\Http\Requests\UpdateAnimalRequest;
use Illuminate\Support\Str;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::all();
        $owners = Owner::all();

        return view('admin.animals.index', compact('animals', 'owners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owners = Owner::all();
        $breeds = Breed::all();
        return view('admin.animals.create', compact('breeds', 'owners'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnimalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnimalRequest $request)
    {
        $form_data = $request->all();
        $form_data['slug'] = Str::slug($form_data['nome'], '-');

        $animal = new Animal();


        $animal->fill($form_data);

        $animal->save();

        return redirect()->route('admin.animals.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        $vaccinations = Vaccination::where('animal_id', '=', $animal->id)->orderBy('date', 'desc')->get();
        return view('admin.animals.show', compact('animal', 'vaccinations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        $owners = Owner::all();
        $breeds = Breed::all();
        return view('admin.animals.edit', compact('animal', 'breeds', 'owners'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnimalRequest  $request
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnimalRequest $request, Animal $animal)
    {
        $form_data = $request->all();
        $form_data['slug'] = Str::slug($form_data['nome'], '-');

        $animal->update($form_data);

        return redirect()->route('admin.animals.show', $animal->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        $animal->vaccines()->detach();
        $animal->delete();
        return redirect()->route('admin.animals.index');
    }
}
