<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::get();
        return view('clients.index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create', ['client' => new Client()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {
        $fields = $request->validate([
            'firstName'=>'required|string',
            'secondName'=>'required|string',
            'firstLastName'=>'required|string',
            'secondLastName'=>'required|string',
            'age'=>'required|numeric',
            'nationalId'=>'required|numeric',
            'weight'=> 'numeric',
            'height'=>'numeric',
            'status'=>'required|string'
        ]);
//        return $fields;
        Client::create($fields);
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
        return redirect()->route('actives.edit', $active)->with('success', "El activo: " . $fields['name'] . ", ha sido actualizado.");
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
