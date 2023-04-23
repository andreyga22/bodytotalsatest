<?php

namespace App\Http\Controllers;

use App\Models\Active;
use App\Models\Detail;
use App\Http\Requests\StoreDetailRequest;
use App\Http\Requests\UpdateDetailRequest;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $details = Detail::get();
        $transactions = Transaction::get();
        $actives = Active::get();
        return view('details.index', ['details' => $details, 'transactions' => $transactions, 'actives' => $actives,]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $transactions = Transaction::get();
        $actives = Active::get();
        return view('details.create', ['detail' => new Detail(), 'transactions' => $transactions, 'actives' => $actives]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDetailRequest $request)
    {
        $fields = $request->validate([
            "idActive" => 'required|string',
            "idTransaction" => 'required|string',
            "quantity" => 'required|string',
        ]);




        Detail::create($fields);
        DB::statement("UPDATE actives SET quantity = (quantity - " . $fields['quantity'] .") where id = " . $fields['idActive'] . ";");
        return redirect()->route('details.create')->with('success', 'El detalle ' . $fields['idActive'] . '-' . $fields['idTransaction']  . ' ha sido agregado');

    }

    /**
     * Display the specified resource.
     */
    public function show(Detail $detail)
    {
        return view('details.show', ['detail' => $detail]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Detail $detail)
    {
        $actives = Active::get();
        $transactions = Transaction::get();
        return view('details.edit', ['detail' => $detail, 'actives' => $actives, 'transactions' => $transactions]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDetailRequest $request, Detail $detail)
    {
        $fields = $request->validate([
            "idActive" => 'required|string',
            "idTransaction" => 'required|string',
            "quantity" => 'required|string',
        ]);

        $detail->update($fields);
        DB::statement("UPDATE actives SET quantity = (quantity - " . $fields['quantity'] .") where id = " . $fields['idActive'] . ";");
        return redirect()->route('details.edit', $detail)->with('success', 'El detalle #' . $fields['idActive'] . '-' . $fields['idTransaction']  . ' ha sido actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detail $detail)
    {
        $detail->delete();
        return redirect()->route('details.index');
    }
}
