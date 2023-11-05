<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contractor;

class ContractorsController extends Controller
{

    public function index()
    {
        $contractors = contractor::all();
        return view('contractor.gestion_contractor',compact('contractors'));
    }

  
    
    public function store(Request $request)
    {
        $contractor = new contractor();
        $contractor-> id_contractor = $request->id_contractor;
        $contractor-> name_contractor = $request->name_contractor;
        $contractor-> number_phone = $request->number_phone;
        $contractor-> address_contractor = $request->address_contractor;
        $contractor-> dni_contractor = $request->dni_contractor;
        $contractor-> email_contractor = $request->email_contractor;
        $contractor->save();
        return redirect()->route('contractors.index');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $contractors = contractor::find($id);
        return view('contractor.editar_contractor', compact('contractors'));
    }

  
    public function update(Request $request, $id)
    {
        $contractor = contractor::find($id);
        $contractor-> id_contractor = $request->id_contractor;
        $contractor-> name_contractor = $request->name_contractor;
        $contractor-> number_phone = $request->number_phone;
        $contractor-> address_contractor = $request->address_contractor;
        $contractor-> dni_contractor = $request->dni_contractor;
        $contractor-> email_contractor = $request->email_contractor;
        $contractor->save();
        return redirect()->route('contractors.index');
    }

    
    public function destroy($id)
    {
        $contractor = contractor::find($id);
        $contractor->delete();
        return redirect()->route('contractors.index');
    }
}
