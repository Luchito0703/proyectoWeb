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

Route::get("/loan",[LoansController::class,'index'])->name("loans.index");
Route::post("/loan",[LoansController::class,'store'])->name("loans.store");
Route::delete("/loan/{id}",[LoansController::class,'destroy'])->name("loans.destroy");
Route::put("/loan/{id}",[LoansController::class,'update'])->name("loans.update");
Route::get("/loan_edit/{id}",[LoansController::class,'edit'])->name("loans.edit");

Route::get("/contractor",[ContractorsController::class,'index'])->name("contractors.index");
Route::post("/contractor",[ContractorsController::class,'store'])->name("contractors.store");
Route::delete("/contractor/{id}",[ContractorsController::class,'destroy'])->name("contractors.destroy");
Route::put("/contractor/{id}",[ContractorsController::class,'update'])->name("contractors.update");
Route::get("/contractor_edit/{id}",[ContractorsController::class,'edit'])->name("contractors.edit");

Route::get("/proj",[AdminProjectsController::class,'index'])->name("adminProjects.index");
Route::post("/proj",[AdminProjectsController::class,'store'])->name("adminProjects.store");
Route::delete("/proj/{id}",[AdminProjectsController::class,'destroy'])->name("adminProjects.destroy");
Route::put("/proj/{id}",[AdminProjectsController::class,'update'])->name("adminProjects.update");
Route::get("/proj_edit/{id}",[AdminProjectsController::class,'edit'])->name("adminProjects.edit");

Route::get("/certificado",[CertificatesController::class,'index'])->name("certificates.index");
Route::post("/certificado",[CertificatesController::class,'store'])->name("certificates.store");
Route::delete("/certificado/{id}",[CertificatesController::class,'destroy'])->name("certificates.destroy");
Route::put("/certificado/{id}",[CertificatesController::class,'update'])->name("certificates.update");
Route::get("/certificado_edit/{id}",[CertificatesController::class,'edit'])->name("certificates.edit");