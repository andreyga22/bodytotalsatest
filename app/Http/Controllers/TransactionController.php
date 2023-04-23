<?php

namespace App\Http\Controllers;

use App\Models\Active;
use App\Models\Detail;
use App\Models\Employee;
use App\Models\Client;
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
        $employees = Employee::get();
        $clients = Client::get();
        return view('transactions.create', ['transaction' => new Transaction(), 'employees' => $employees, 'clients' => $clients]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransactionRequest $request)
    {
        $fields = $request->validate([
            'type' => 'required|string',
            'price' => 'required|numeric',
            'date' => 'required|date',
            "idClient" => 'required|string',
            "idEmployee" => 'required|string',
        ]);
        //Venta ->> enviar al crear de detalles
        if ($fields['type'] === "venta") {
            //echo $fields->id;
            $newID = Transaction::create($fields)->id;
            return redirect()->route('details.create')->with('newId', $newID);
//            return redirect()->route('details.create', ['transaction', $fields]);
            //return view('details.create', ['details' => new Transaction(), 'transaction' => $fields]);
            //return $fields;
        } else {
            Transaction::create($fields);
//            return redirect()->route('transactions.create')->with('success', "La transaccion: " . $fields['date'] . ", ha sido completado correctamente.");
            return redirect()->route('transactions.create')->with('success', "La transaccion: " . $fields['date'] . ", ha sido completado correctamente.");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        $employees = Employee::get();
        $clients = Client::get();
        $details = Detail::get();
        $actives = Active::get();
        return view("transactions.show", ['transaction' => $transaction, 'employees' => $employees, 'clients' => $clients, 'details' => $details, 'actives' => $actives]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        $clients = Client::get();
        $employees = Employee::get();
        return view('transactions.edit', ['transaction' => $transaction, 'employees' => $employees, 'clients' => $clients]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        $fields = $request->validate([
            'type' => 'required|string',
            'price' => 'required|numeric',
            'date' => 'required|date',
            'idClient' => 'required|string',
            'idEmployee' => 'required|string',
        ]);

        $transaction->update($fields);
        return redirect()->route('transactions.edit', $transaction)->with('success', 'La transaccion: ' . $fields['date'] . ', ha sido actualizada.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
//        $transaction->delete();
//        return redirect()->route('transactions.index');
    }
}
