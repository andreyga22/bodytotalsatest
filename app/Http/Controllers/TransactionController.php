<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::get();
        return view('transactions.index', ['transactions' => $transactions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transactions.create', ['transaction' => new Transaction()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransactionRequest $request)
    {
        $fields = $request->validate([
            'type' => 'required|string',
            'price' => 'required|numeric',
            'date' => 'required|date'
        ]);
//        return $fields;
        Transaction::create($fields);
        return redirect()->route('transactions.create')->with('success', "La transaccion: " . $fields['date'] . ", ha sido completado correctamente.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        return view("transactions.show", ['transaction' => $transaction]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        return view('transactions.edit', ['transaction' => $transaction]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        $fields = $request->validate([
            'type' => 'required|string',
            'price' => 'required|numeric',
            'date' => 'required|date'
        ]);

        $transaction->update($fields);
        return redirect()->route('transactions.edit', $transaction)->with('success', 'La transaccion: ' . $fields['date'] . ', ha sido actualizada.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('transactions.index');
    }
}
