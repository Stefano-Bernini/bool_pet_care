<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Breed;
use App\Http\Requests\StoreBreedRequest;
use App\Http\Requests\UpdateBreedRequest;
use Illuminate\Support\Str;

class BreedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breeds = Breed::all();
        return view('admin.breeds.index', compact('breeds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.breeds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBreedRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBreedRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['name'], '-');

        $breed = new Breed();


        $breed->fill($data);

        $breed->save();

        return redirect()->route('admin.breeds.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Breed  $breed
     * @return \Illuminate\Http\Response
     */
    public function show(Breed $breed)
    {
        return view('admin.breeds.show', compact('breed'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Breed  $breed
     * @return \Illuminate\Http\Response
     */
    public function edit(Breed $breed)
    {
        return view('admin.breeds.edit', compact('breed'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBreedRequest  $request
     * @param  \App\Models\Breed  $breed
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBreedRequest $request, Breed $breed)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['name'], '-');

        $breed->update($data);

        return redirect()->route('admin.breeds.show', $breed);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Breed  $breed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Breed $breed)
    {
        $breed->delete();
        return redirect()->route('admin.breeds.index');
    }
}
