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