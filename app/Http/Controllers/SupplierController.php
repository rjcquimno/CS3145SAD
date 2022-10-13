<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SupplierController extends Controller
{
    // show supplier
    public function show(Supplier $supplierData){
        if (Supplier::first()){
        $supplierData = Supplier::first()->filter(request(['search']))->get();

        $supplierData = Supplier::first()->filter(request(['search']))->paginate(5);

        return view('supplier', ['supplierlist'=>$supplierData]);
        }
        else{
            return view('supplier', ['supplierlist'=>Supplier::first()]);
        }
        
        
    }

    //show create form
    public function create(){
        return view('createsupplier');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'sup_name' =>['required',Rule::unique('suppliers', 'sup_name')], 
            'sup_contactPerson' => 'required',
            'sup_address' => 'required',
            'sup_phoneNum' => 'required|numeric|digits:11|unique:suppliers,sup_phoneNum,$id',
            'sup_email' => ['required', 'email',Rule::unique('suppliers', 'sup_email')],
        ]);

        Supplier::create($formFields);
        return redirect('/supplier')->with('message', 'An item was created successfully.');
    }

    //show edit form
    public function edit(Supplier $supplier){
        return view('editsupplier', ['supplier'=>$supplier]);
    }

    //update item inventory data
    public function update(Request $request, Supplier $supplier){
        $formFields = $request->validate([
            'sup_name' =>'required', 
            'sup_contactPerson' => 'required',
            'sup_address' => 'required',
            'sup_phoneNum' => 'required|numeric|digits:11',
            'sup_email' => ['required', 'email'],
        ]);

        $supplier->update($formFields);
        return redirect('/supplier')->with('message', 'An item was updated successfully.');
    }

    //delete item
    public function destroy(Supplier $supplier){
        $supplier->delete();
        return redirect('/supplier')->with('message', 'An item was deleted successfully.');
    }
}
