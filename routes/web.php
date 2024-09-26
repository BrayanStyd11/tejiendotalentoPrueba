<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\PositionsController;

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

Route::get('/',[UsersController::class, 'index'])->name('index');
Route::post('/login',[UsersController::class, 'login'])->name('login');
Route::get('/logout',[UsersController::class, 'logout'])->name('logout');

Route::get('/employees',[EmployeesController::class,'index'])->name('employees');
Route::post('/employees/create',[EmployeesController::class,'store'])->name('employees.create');
Route::put('/employees/update',[EmployeesController::class,'update'])->name('employees.update');
Route::get('/employees/delete/{id}',[EmployeesController::class,'destroy'])->name('employees.delete');

Route::get('/positions',[PositionsController::class,'index'])->name('positions');
Route::post('/positions/create',[PositionsController::class,'store'])->name('positions.create');
Route::get('/positions/update/{id_employee}/{id_position}',[PositionsController::class,'deletePosition'])->name('positions.update');