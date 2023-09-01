<?php

namespace App\Http\Controllers;

use App\Models\Sickness;
use App\Http\Requests\StoreSicknessRequest;
use App\Http\Requests\UpdateSicknessRequest;

class SicknessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSicknessRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSicknessRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sickness  $sickness
     * @return \Illuminate\Http\Response
     */
    public function show(Sickness $sickness)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sickness  $sickness
     * @return \Illuminate\Http\Response
     */
    public function edit(Sickness $sickness)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sickness  $sickness
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sickness $sickness)
    {
        //
    }
}
