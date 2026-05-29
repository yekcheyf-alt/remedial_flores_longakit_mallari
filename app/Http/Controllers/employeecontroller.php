<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\employee;

class employeecontroller extends Controller
{
    public function index()
    {   
        return view ('employee.index');
    }


    public function create()
    {
        return view ('employee.create');
    }


    public function store(Request $request)
    {
        $employee = new employee();
        $employee->fname = $request->input('fname');
        $employee->mname = $request->input('mname');
        $employee->lmail = $request->input('lmail');
        $employee->address = $request->input('address');
        $employee->date_of_birth = $request->input('date_of_birth');
        $employee->contact_number = $request->input('contact_number');
        $employee->save();

        return redirect()->route('employee.index')->with('success', 'Employee created successfully.');
    }

    public function edit( int $id)
    {
        $employee = employee::findOrFail($id);
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, int $id) {
        $employee = employee::findOrFail($id);
        $employee->fname = $request->input('fname');
        $employee->mname = $request->input('mname');
        $employee->lmail = $request->input('lmail');
        $employee->address = $request->input('address');
        $employee->date_of_birth = $request->input('date_of_birth');
        $employee->contact_number = $request->input('contact_number');
        $employee->save();

        return redirect()->route('employee.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy(int $id){
        $employee = employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employee.index')->with('success', 'Employee deleted successfully.');
    }
}
