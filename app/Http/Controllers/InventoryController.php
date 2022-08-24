<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;


class InventoryController extends Controller
{

    // show inventory
    public function index(){
        return view('inventories', [
            'inventories'=> Inventory::first()->filter(request(['search']))->get()
        ]);
    }



    public function show(Inventory $inventoryData){
        $inventoryData = Inventory::all();
        return view('inventory', ['inventorylist'=>$inventoryData]);
    }
    
}
