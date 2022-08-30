<?php

use App\Models\Inventory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//show homepage
Route::get('/', function () {
    return view('index');
});
//create form
Route::get('create', [InventoryController::class, 'create']);

//store inventory item data
Route::post('inventory', [InventoryController::class, 'store']);

//show edit form
Route::get('edit/{inventory}', [InventoryController::class, 'edit']);

//update inventory
Route::put('inventory/{inventory}', [InventoryController::class, 'update']);

//delete inventory
Route::delete('inventory/{inventory}', [InventoryController::class, 'destroy']);


//show inventory
Route::get('inventory', [InventoryController::class, 'show']);






