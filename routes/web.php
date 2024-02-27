<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/producto',[ProductController::class,'create']);
Route::post('/producto',[ProductController::class,'store'])->name("producto.store");

Route::get('/cliente',[CustomerController::class,'create']);
Route::post('/cliente',[CustomerController::class,'store'])->name("cliente.store");

Route::get('/empleado',[EmployeeController::class,'create']);
Route::post('/empleado',[EmployeeController::class,'store'])->name("empleado.store");

Route::get('/factura',[InvoiceController::class,'create']);
Route::post('/factura',[InvoiceController::class,'store'])->name("factura.store");

