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

Route::get("/cliente",[CustomersController::class,'index'])->name("customer.index");
Route::post("/cliente",[CustomersController::class,'store'])->name("customer.store");
Route::delete("/cliente/{id}",[CustomersController::class,'destroy'])->name("customer.destroy");
Route::put("/cliente/{id}",[CustomersController::class,'update'])->name("customer.update");
Route::get("/cliente_edit/{id}",[CustomersController::class,'edit'])->name("customer.edit");