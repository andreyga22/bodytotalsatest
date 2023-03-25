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
        return view('actives.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActiveRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Active $active)
    {
        return view("actives.show", ['actives' => $active]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Active $active)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActiveRequest $request, Active $active)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Active $active)
    {
        //
    }
}
