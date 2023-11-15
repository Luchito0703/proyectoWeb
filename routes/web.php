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

Route::get('/', function () {
    return view('principal_page');
});

Route::get("/jefe",[AdminBossController::class,'index'])->name("adminBoss.index");
Route::post("/jefe",[AdminBossController::class,'store'])->name("adminBoss.store");
Route::delete("/jefe/{id}",[AdminBossController::class,'destroy'])->name("adminBoss.destroy");
Route::put("/jefe/{id}",[AdminBossController::class,'update'])->name("adminBoss.update");
Route::get("/jefe_edit/{id}",[AdminBossController::class,'edit'])->name("adminBoss.edit");

Route::get("/equipment",[equipmentsController::class,'index'])->name("equipments.index");
Route::post("/equipment",[equipmentsController::class,'store'])->name("equipments.store");
Route::delete("/equipment/{id}",[equipmentsController::class,'destroy'])->name("equipments.destroy");
Route::put("/equipment/{id}",[equipmentsController::class,'update'])->name("equipments.update");
Route::get("/equipment_edit/{id}",[equipmentsController::class,'edit'])->name("equipments.edit");

Route::get("/prestamo",[LoansController::class,'index'])->name("loans.index");
Route::post("/prestamo",[LoansController::class,'store'])->name("loans.store");
Route::delete("/prestamo/{id}",[LoansController::class,'destroy'])->name("loans.destroy");
Route::put("/prestamo/{id}",[LoansController::class,'update'])->name("loans.update");
Route::get("/prestamo_edit/{id}",[LoansController::class,'edit'])->name("loans.edit");

Route::get("/contratista",[ContractorsController::class,'index'])->name("contractors.index");
Route::post("/contratista",[ContractorsController::class,'store'])->name("contractors.store");
Route::delete("/contratista/{id}",[ContractorsController::class,'destroy'])->name("contractors.destroy");
Route::put("/contratista/{id}",[ContractorsController::class,'update'])->name("contractors.update");
Route::get("/contratista_edit/{id}",[ContractorsController::class,'edit'])->name("contractors.edit");

Route::get("/proj",[AdminProjectsController::class,'index'])->name("adminProjects.index");
Route::post("/proj",[AdminProjectsController::class,'store'])->name("adminProjects.store");
Route::delete("/proj/{id}",[AdminProjectsController::class,'destroy'])->name("adminProjects.destroy");
Route::put("/proj/{id}",[AdminProjectsController::class,'update'])->name("adminProjects.update");
Route::get("/proj_edit/{id}",[AdminProjectsController::class,'edit'])->name("adminProjects.edit");

Route::get("/contrato",[ContractsController::class,'index'])->name("contracts.index");
Route::post("/contrato",[ContractsController::class,'store'])->name("contracts.store");
Route::delete("/contrato/{id}",[ContractsController::class,'destroy'])->name("contracts.destroy");
Route::put("/contrato/{id}",[ContractsController::class,'update'])->name("contracts.update");
Route::get("/contrato_edit/{id}",[ContractsController::class,'edit'])->name("contracts.edit");

Route::get("/certificado",[CertificatesController::class,'index'])->name("certificates.index");
Route::post("/certificado",[CertificatesController::class,'store'])->name("certificates.store");
Route::delete("/certificado/{id}",[CertificatesController::class,'destroy'])->name("certificates.destroy");
Route::put("/certificado/{id}",[CertificatesController::class,'update'])->name("certificates.update");
Route::get("/certificado_edit/{id}",[CertificatesController::class,'edit'])->name("certificates.edit");

Route::get("/cliente",[CustomersController::class,'index'])->name("customer.index");
Route::post("/cliente",[CustomersController::class,'store'])->name("customer.store");
Route::delete("/cliente/{id}",[CustomersController::class,'destroy'])->name("customer.destroy");
Route::put("/cliente/{id}",[CustomersController::class,'update'])->name("customer.update");
Route::get("/cliente_edit/{id}",[CustomersController::class,'edit'])->name("customer.edit");

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
