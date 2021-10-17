<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();

        return view('home', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employeeData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'age' => 'required',
            'salary' => 'required'
        ]);

        Employee::create($employeeData);
        return redirect('employees')->with('success', 'Karyawan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);

        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employeeData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'age' => 'required',
            'salary' => 'required'
        ]);

        $employee = Employee::findOrFail($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->age = $request->age;
        $employee->salary = $request->salary;
        $employee->save();

        return redirect('employees')->with("success", "Data karyawan berhasil diubah.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect('employees')->with("success", "Data karyawan telah dihapus.");
    }
}
