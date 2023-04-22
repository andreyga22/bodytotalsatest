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
        return redirect()->route('client.create')->with('success', "El client: " . $fields['name'] . ", ha sido agregado correctamente.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view("clients.show", ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('clients.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
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
        $client->update($fields);
        return redirect()->route('clients.edit', $client)->with('success', "El client: " . $fields['name'] . ", ha sido actualizado.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }
}
