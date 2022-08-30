<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class InventoryController extends Controller
{


    // show inventory
    public function show(Inventory $inventoryData){
        $inventoryData = Inventory::first()->filter(request(['search']))->get();
        return view('inventory', ['inventorylist'=>$inventoryData]);
        
    }

    //show create form
    public function create(){
        return view('create');
    }

    // required|integer|between:0,9999999999999'

    //store item inventory data
    public function store(Request $request){
        $formFields = $request->validate([
            'item_barcode' =>['required',  Rule::unique('inventories', 'item_barcode')],
            'item_name' => 'required',
            'item_quantity' => 'required|integer',
            'item_size' => 'required',
            'item_price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'item_procprice' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'item_description' => 'required',
            'item_discount' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'expire_date' => 'required'
        ]);

        Inventory::create($formFields);
        return redirect('/inventory')->with('message', 'An item was created successfully.');
    }

    //show edit form
    public function edit(Inventory $inventory){
        return view('edit', ['inventory'=>$inventory]);
    }

    //update item inventory data
    public function update(Request $request, Inventory $inventory){
        $formFields = $request->validate([
            'item_barcode' =>'required',
            'item_name' => 'required',
            'item_quantity' => 'required|integer',
            'item_size' => 'required',
            'item_price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'item_procprice' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'item_description' => 'required',
            'item_discount' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'expire_date' => 'required'
        ]);

        $inventory->create($formFields);
        return redirect('/inventory')->with('message', 'An item was updated successfully.');
    }

    //delete item
    public function destroy(Inventory $inventory){
        $inventory->delete();
        return redirect('/inventory')->with('message', 'An item was deleted successfully.');
    }

    
}
