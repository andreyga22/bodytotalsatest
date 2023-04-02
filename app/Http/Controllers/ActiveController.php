<?php

namespace App\Http\Controllers;

use App\Models\Active;
use App\Http\Requests\StoreActiveRequest;
use App\Http\Requests\UpdateActiveRequest;

class ActiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actives = Active::get();
        return view('actives.index', ['actives' => $actives]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('actives.create', ['active' => new Active()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActiveRequest $request)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'brand' => 'required|string',
            'price' => 'required|numeric',
            'weight' => 'required|numeric',
            'quantity' => 'required|numeric',
            'status' => 'required|string'
        ]);
//        return $fields;
        Active::create($fields);
        return redirect()->route('actives.create')->with('success', "El activo: " . $fields['name'] . ", ha sido agregado correctamente.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Active $active)
    {
        return view("actives.show", ['active' => $active]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Active $active)
    {
        return view('actives.edit', ['active' => $active]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActiveRequest $request, Active $active)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'brand' => 'required|string',
            'price' => 'required|numeric',
            'weight' => 'required|numeric',
            'quantity' => 'required|numeric',
            'status' => 'required|string'
        ]);

        $active->update($fields);
        return redirect()->route('actives.edit', $active)->with('success', 'El activo: ' . $fields['name'] . ', ha sido actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Active $active)
    {
        $active->delete();
        return redirect()->route('actives.index');
    }
}
