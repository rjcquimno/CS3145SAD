<?php

use App\Models\Inventory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\SalesOrderController;
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
Route::get('createsupplier', [SupplierController::class, 'create']);

//store supplier item data
Route::post('supplier', [SupplierController::class, 'store']);

//show supplier
Route::get('supplier', [SupplierController::class, 'show']);


//show edit form
Route::get('editsupplier/{supplier}', [SupplierController::class, 'edit']);

//update inventory
Route::put('supplier/{supplier}', [SupplierController::class, 'update']);

//delete supplier
Route::delete('supplier/{supplier}', [SupplierController::class, 'destroy']);


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


//show procurement
Route::get('procurement', [InventoryController::class, 'show1']);


// Show Employees
Route::get('employee', [EmployeeController::class, 'show']);

// Show Create Form
Route::get('createemployee', [EmployeeController::class, 'create']);

// Store Employee Data
Route::post('employee', [EmployeeController::class, 'store']);

// Show Edit Form
Route::get('editemployee/{id}', [EmployeeController::class, 'edit']);



// Show Register/Create Form
Route::get('/register', [UserController::class, 'create']);

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout']);

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);





//store salesorder data
//Route::post('salesorder', [SalesOrderController::class, 'store']);


//show salesorder
Route::get('salesorder', [SalesOrderController::class, 'show']);

//update inventory after successful salesorder. updateInventory will also run the function for storing the SalesOrder entry.
Route::put('salesorder', [salesOrderController::class, 'updateInventory']);




