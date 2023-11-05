<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contract;
use App\Models\customer;
use App\Models\contractor;
use App\Models\adminProject;

class ContractsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $contract=new Contract();
        $contract->id_contract=$request->id_contract;
        $contract->id_contra=$request->id_contra;
        $contract->dni_admin_proj=$request->dni_admin_proj;
        $contract->nit_customer=$request->nit_customer;
        $contract->save();
        // return redirect()->route('xx');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $contract=Contract::find($id);
        $contractors=Contractor::all();
        $customers=Customer::all();
        $adminProjects=adminProject::all();
        // return view('xx',compact('contract','contractors','customers','adminProjects'));
    }

    public function update(Request $request, $id)
    {
        $contract=Contract::find($id);
        $contract->id_contract=$request->id_contract;
        $contract->id_contra=$request->id_contra;
        $contract->dni_admin_proj=$request->dni_admin_proj;
        $contract->nit_customer=$request->nit_customer;
        $contract->save();
        // return redirect()->route('xx');
    }

    
    public function destroy($id)
    {
        $contract=Contract::find($id);
        $contract->delete();
        // return redirect()->route('xx');
    }
}
