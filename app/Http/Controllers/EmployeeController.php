<?php

namespace App\Http\Controllers;

use App\Models\Active;
use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::get();
        return view('employees.index', ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create', ['employee' => new Active()]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        $fields = $request->validate([
            'firstName'=>'required|string',
            'secondName'=>'required|string',
            'firstLastName'=>'required|string',
            'secondLastName'=>'required|string',
            'age'=>'required|numeric',
            'nationalId'=>'required|numeric',
            'status'=>'required|string'
        ]);

        Employee::create($fields);
        return redirect()->route('employees.create')->with('success', "El empleado: " . $fields['firstName'] . ", ha sido agregado correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view("employees.show", ['employee' =>$employee]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', ['employee' => $employee]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $fields = $request->validate([
            'firstName'=>'required|string',
            'secondName'=>'required|string',
            'firstLastName'=>'required|string',
            'secondLastName'=>'required|string',
            'age'=>'required|numeric',
            'nationalId'=>'required|numeric',
            'status'=>'required|string'
        ]);

        $employee->update($fields);
        return redirect()->route('employees.edit', $employee)->with('success', "El empleado: " . $fields['firstName'] . ", ha sido modificado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index');
    }
}
