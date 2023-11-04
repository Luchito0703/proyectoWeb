<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contractor;

class ContractorsController extends Controller
{

    public function index()
    {
        $contractor = contractor::all();
        // return view('index');
    }

  
    
    public function store(Request $request)
    {
        $contractor = new contractor();
        $contractor->id_contra = $request->id_contra;
        $contractor-> name = $request->nameContractor;
        $contractor-> number_phone = $request->number_phone;
        $contractor-> address = $request->address;
        $contractor-> dni = $request->dni;
        $contractor-> email = $request->email;
        $contractor->save();
        // return redirect()->route('x.index');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $contractors = contractors::find($id);
        // return view('x.edit_contractor',compact('contractor'));
    }

  
    public function update(Request $request, $id)
    {
        $contractor = contractor::find($id);
        $contractor-> id = $request->idContractor;
        $contractor-> name = $request->nameContractor;
        $contractor-> number_phone = $request->numberPhone_Contractor;
        $contractor-> address = $request->addressContractor;
        $contractor-> dni = $request->dniContractor;
        $contractor-> email = $request->emailContractor;
        $contractor->save();
        // return redirect()->route('x.index');
    }

    
    public function destroy($id)
    {
        $contractor = contractor::find($id);
        $contractor->delete();
        // return redirect->route('x.index');
    }
}
