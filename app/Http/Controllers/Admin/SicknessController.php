<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sickness;
use App\Http\Requests\StoreSicknessRequest;
use App\Http\Requests\UpdateSicknessRequest;
// inserted
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;



class SicknessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sicknesses = Sickness::all();

        return view('admin.sickness.index', compact('sicknesses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sickness.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSicknessRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSicknessRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['name'], '-');

        $sickness = new Sickness();


        $sickness->fill($data);

        $sickness->save();

        return redirect()->route('admin.sickness.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sickness  $sickness
     * @return \Illuminate\Http\Response
     */
    public function show(Sickness $sickness)
    {
        return view('admin.sickness.show', compact('sickness'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sickness  $sickness
     * @return \Illuminate\Http\Response
     */
    public function edit(Sickness $sickness)
    {
        return view('admin.sickness.edit', compact('sickness'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSicknessRequest  $request
     * @param  \App\Models\Sickness  $sickness
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSicknessRequest $request, Sickness $sickness)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['name'], '-');

        $sickness->update($data);

        return redirect()->route('admin.sickness.show', $sickness->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sickness  $sickness
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sickness $sickness)
    {
        $sickness->delete();
        return redirect()->route('admin.sickness.index');
    }
}
