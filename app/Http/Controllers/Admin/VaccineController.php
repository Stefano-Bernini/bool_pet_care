<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vaccine;
use App\Http\Requests\StoreVaccineRequest;
use App\Http\Requests\UpdateVaccineRequest;
use Illuminate\Support\Str;

class VaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vaccines = Vaccine::all();

        return view('admin.vaccines.index', compact('vaccines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vaccines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVaccineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVaccineRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['name'], '-');

        $vaccine = new Vaccine();


        $vaccine->fill($data);

        $vaccine->save();

        return redirect()->route('admin.vaccines.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaccine  $vaccine
     * @return \Illuminate\Http\Response
     */
    public function show(Vaccine $vaccine)
    {
        return view('admin.vaccines.show', compact('vaccine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaccine  $vaccine
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaccine $vaccine)
    {
        return view('admin.vaccines.edit', compact('vaccine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVaccineRequest  $request
     * @param  \App\Models\Vaccine  $vaccine
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVaccineRequest $request, Vaccine $vaccine)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['name'], '-');

        $vaccine->update($data);

        return redirect()->route('admin.vaccines.show', $vaccine);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaccine  $vaccine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaccine $vaccine)
    {
        $vaccine->delete();
        return redirect()->route('admin.vaccines.index');
    }
}
