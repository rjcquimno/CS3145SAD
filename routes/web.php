<?php

use App\Models\Inventory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
Route::get('createsupplier', [SupplierController::class, 'create'])->middleware('auth');

//store supplier item data
Route::post('supplier', [SupplierController::class, 'store'])->middleware('auth');

//show supplier
Route::get('supplier', [SupplierController::class, 'show'])->middleware('auth');


//show edit form
Route::get('editsupplier/{supplier}', [SupplierController::class, 'edit'])->middleware('auth');

//update inventory
Route::put('supplier/{supplier}', [SupplierController::class, 'update'])->middleware('auth');

//delete supplier
Route::delete('supplier/{supplier}', [SupplierController::class, 'destroy'])->middleware('auth');


//create form
Route::get('create', [InventoryController::class, 'create'])->middleware('auth');

//store inventory item data
Route::post('inventory', [InventoryController::class, 'store'])->middleware('auth');

//show edit form
Route::get('edit/{inventory}', [InventoryController::class, 'edit'])->middleware('auth');

//update inventory
Route::put('inventory/{inventory}', [InventoryController::class, 'update'])->middleware('auth');

//delete inventory
Route::delete('inventory/{inventory}', [InventoryController::class, 'destroy'])->middleware('auth');


//show inventory
Route::get('inventory', [InventoryController::class, 'show'])->middleware('auth');


//show procurement
Route::get('procurement', [InventoryController::class, 'show1'])->middleware('auth');


// Show Employees
Route::get('employee', [EmployeeController::class, 'show'])->middleware('auth');

// Show Create Form
Route::get('createemployee', [EmployeeController::class, 'create'])->middleware('auth');

// Store Employee Data
Route::post('employee', [EmployeeController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('editemployee/{employee}', [EmployeeController::class, 'edit'])->middleware('auth');

//update employee
Route::put('editemployee/{employee}', [EmployeeController::class, 'update'])->middleware('auth');

//delete employee
Route::delete('employee/{employee}', [EmployeeController::class, 'destroy'])->middleware('auth');

// Store Employee Data
Route::get('employee/attendance', [EmployeeController::class, 'showAttendance'])->middleware('auth');

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);





//store salesorder data
//Route::post('salesorder', [SalesOrderController::class, 'store']);


//show salesorder
Route::get('salesorder', [SalesOrderController::class, 'show'])->middleware('auth');

//update inventory after successful salesorder. updateInventory will also run the function for storing the SalesOrder entry and entering the card/cash payment information.
Route::put('salesorder', [salesOrderController::class, 'updateInventory'])->middleware('auth');

//show saleshistory
Route::get('saleshistory', [SalesOrderController::class, 'showHistory'])->middleware('auth');


