<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SupplierController extends Controller
{
    // show supplier
    public function show(Supplier $supplierData){
        $supplierData = Supplier::first()->filter(request(['search']))->get();
        return view('supplier', ['supplierlist'=>$supplierData]);
        
    }

    //show create form
    public function create(){
        return view('createsupplier');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'sup_name' =>'required', 
            'sup_contactPerson' => 'required',
            'sup_address' => 'required',
            'sup_phoneNum' => 'required|numeric|digits:11',
            'sup_email' => ['required', 'email'],
        ]);

        Supplier::create($formFields);
        return redirect('/supplier')->with('message', 'An item was created successfully.');
    }

    //show edit form
    public function edit(Supplier $supplier){
        return view('editsupplier', ['supplier'=>$supplier]);
    }

    //delete item
    public function destroy(Supplier $supplier){
        $supplier->delete();
        return redirect('/supplier')->with('message', 'An item was deleted successfully.');
    }
}
