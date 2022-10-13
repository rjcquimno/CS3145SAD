<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EmployeeController extends Controller
{
    // // Show all employees
    // public function index() {
    //     return view('employee', [
    //         'employee' => Employee::first()->filter(request(['id', 'search']))->paginate(6)
    //     ]);
    // }

    public function show(Employee $employeeData){
        if (Employee::first()){
        $employeeData = Employee::first()->filter(request(['search']))->paginate(5);
        return view('employee', ['employeelist'=>$employeeData]);
        }
        else return view('createemployee');
    }
    
    public function showAttendance(Employee $employeeData){
        /*if (Employee::first()){
        $employeeData = Employee::first()->filter(request(['search']))->paginate(5);
        return view('employee', ['employeelist'=>$employeeData]);
        }
        else*/ return view('employeeattendance');
    }

    // //Show single employee
    // public function show(Employee $employee) {
    //     return view('employee', [
    //         'employee' => $employee
    //     ]);
    // }

    // Show Create Form
    public function create() {
        return view('createemployee');
    }

    // Store Employee Data
    public function store(Request $request) {
        $formFields = $request->validate([
            'emp_fullName' =>['required',Rule::unique('employees', 'emp_fullName')], 
            'emp_phoneNum' => 'required|numeric|digits:11|unique:employees,emp_phoneNum,$id',
            'emp_address' => 'required',
            'emp_email' => ['required', 'email',Rule::unique('employees', 'emp_email')],
            'emp_gender' => 'required',
            'emp_birthdate' => 'required',
            'emp_role' => 'required',
        ]);

        // $formFields['user_id'] = auth()->id();

        Employee::create($formFields);

        return redirect('/employee')->with('message', 'Employee created successfully!');
    }

    // Show Edit Form
    public function edit(Employee $employee) {
        return view('editemployee', ['employee' => $employee]);
    }

    // Update Listing Data
    public function update(Request $request, Employee $employee) {
        // // Make sure logged in user is owner
        // if($listing->user_id != auth()->id()) {
        //     abort(403, 'Unauthorized Action');
        // }
        
        $formFields = $request->validate([
            'emp_fullName' =>'required', 
            'emp_phoneNum' => 'required|numeric|digits:11',
            'emp_address' => 'required',
            'emp_email' => ['required', 'email'],
            'emp_gender' => 'required',
            'emp_birthdate' => 'required',
            'emp_role' => 'required',
        ]);

        $employee->update($formFields);

        //return back()->with('message', 'Employee updated successfully!');
        return redirect('/employee')->with('message', 'An employee was updated successfully.');
    }

    // Delete Listing
    public function destroy(Employee $employee) {
        // // Make sure logged in user is owner
        // if($listing->user_id != auth()->id()) {
        //     abort(403, 'Unauthorized Action');
        // }
        
        $employee->delete();
        return redirect('/employee')->with('message', 'Employee deleted successfully');
    }

    // // Manage Employees
    // public function manage() {
    //     return view('employees.manage', ['employees' => auth()->user()->employee()->get()]);
    // }
}
