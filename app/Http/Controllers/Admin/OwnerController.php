<?php

namespace App\Http\Controllers\Admin;

use App\Models\Owner;
use App\Http\Requests\StoreOwnerRequest;
use App\Http\Requests\UpdateOwnerRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners = Owner::all();
        return view('admin.owners.index', compact('owners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.owners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOwnerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOwnerRequest $request)
    {
        $data = $request->all();
        $nameSurname= $data['name'].' '.$data['surname'];
        $data['slug'] = Str::slug($nameSurname, '-');

        $owner = new Owner();

        $owner->fill($data);

        $owner->save();

        return redirect()->route('admin.owners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner)
    {
        return view('admin.owners.show', compact('owner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function edit(Owner $owner)
    {
        return view('admin.owners.edit', compact('owner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOwnerRequest  $request
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOwnerRequest $request, Owner $owner)
    {
        $data = $request->all();
        $nameSurname = $data['name'].' '.$data['surname'];
        $data['slug'] = Str::slug($nameSurname, '-');

        $owner->update($data);

        return redirect()->route('admin.owners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
        $owner->delete();
        
        return redirect()->route('admin.owners.index');
    }
}
