<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\contractor;

class ContractorsController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $contractors = contractor::all();
        return view('contractor.gestion_contractor',compact('contractors','user'));
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
        $user = Auth::user();
        $contractors = contractor::find($id);
        return view('contractor.editar_contractor', compact('contractors','user'));
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