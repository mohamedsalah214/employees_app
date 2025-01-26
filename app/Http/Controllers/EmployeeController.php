<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $employee = $request->validate([
            'first_name'    => 'required|string',
            'last_name'     => 'required|string',
            'phone'         => 'required|numeric',
            'address'       => 'required|string',
            'notes'         => '',
        ]);

        Employee::create($employee);

        return redirect()->route('employees./');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employee::findorFail($id);
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::findorFail($id);
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $employee = $request->validate([
            'first_name'    => 'required|string',
            'last_name'     => 'required|string',
            'phone'         => 'required|numeric',
            'address'       => 'required|string',
            'notes'         => '',
        ]);

        Employee::findorFail($id)->update($employee);

        return redirect()->route('employees.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check_employee = Employee::findorFail($id);
        $check_employee->delete();
        return redirect()->route('employees./');
    }
}
