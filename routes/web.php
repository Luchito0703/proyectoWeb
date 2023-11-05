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
