<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
    $employees = Employee::all();

    return view('employees.index', compact('employees'));
    }
    public function create()
{
    return view('employees.create');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:employees,email',
        'phone' => 'nullable',
        'position' => 'required',
        'department' => 'required',
        'status' => 'required|in:active,inactive',
        'joined_at' => 'required|date',
    ]);

    Employee::create($validated);

    return redirect('/employees')
        ->with('success', 'Karyawan berhasil ditambahkan');
}

public function edit($id)
{
    $employee = Employee::findOrFail($id);

    return view('employees.edit', compact('employee'));
}

public function update(Request $request, $id)
{
    $employee = Employee::findOrFail($id);

    $validated = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:employees,email,' . $employee->id,
        'phone' => 'nullable',
        'position' => 'required',
        'department' => 'required',
        'status' => 'required|in:active,inactive',
        'joined_at' => 'required|date',
    ]);

    $employee->update($validated);

    return redirect('/employees')
        ->with('success', 'Data karyawan berhasil diupdate');
}

public function destroy($id)
{
    $employee = Employee::findOrFail($id);
    $employee->delete();

    return redirect('/employees')
        ->with('success', 'Data karyawan berhasil dihapus');
}


}
