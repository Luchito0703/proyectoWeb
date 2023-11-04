<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminBossController;
use App\Http\Controllers\AdminProjectsController;
use App\Http\Controllers\CertificatesController;
use App\Http\Controllers\ContractorsController;
use App\Http\Controllers\ContractsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\EquipmentsController;
use App\Http\Controllers\LoansController;

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

// Route::get('/',[AdminBossController::class,'mostrarVista'])->name('mostrar_vista');
// Route::get('/boss',[AdminBossController::class,'verVista'])->name('welcome');
Route::resource('boss',AdminBossController::class);
Route::resource('project',AdminProjectsController::class);
Route::resource('certificate',CertificatesController::class);
Route::resource('contractor',ContractorsController::class);
Route::resource('contract',ContractsController::class);
Route::resource('customer',CustomersController::class);
Route::resource('equipment',EquipmentsController::class);
Route::resource('loan',LoansController::class);
