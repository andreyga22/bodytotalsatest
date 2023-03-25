<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ActiveController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\TransactionController;
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

Route::resource("actives", ActiveController::class);
Route::resource("clients", ClientController::class);
Route::resource("employees", EmployeeController::class);
Route::resource("details", DetailController::class);
Route::resource("transactions", TransactionController::class);
