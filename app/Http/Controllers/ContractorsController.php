<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contractor;

class ContractorsController extends Controller
{

    public function index()
    {
        $contractors = contractor::all();
        return view('contractor.create',compact('contractors'));
    }

  
    
    public function store(Request $request)
    {
        $rules=[
            'id_contractor' => 'required|numeric',
            'name_contractor' => 'required|string',
            'number_phone' => 'required|string',
            'address_contractor' => 'required|string',
            'dni_contractor' => 'required|string',
            'email_contractor' => 'required|email'
        ];

        $messages=[
            'id_contractor.required' => 'El campo Id del contratista es obligatorio.',
            'id_contractor.numeric' => 'El campo Id del contratista debe ser numérico.',
            'name_contractor.required' => 'El campo nombre del contratista es obligatorio.',
            'name_contractor.string' => 'El campo nombre del contratista debe ser cadena de texto.',
            'number_phone.required' => 'El campo numero del contratista es obligatorio.',
            'number_phone.string' => 'El campo numero del contratista debe ser cadena de texto.',
            'address_contractor.required' => 'El campo direccion del contratista es obligatorio.',
            'address_contractor.string' => 'El campo direccion del contratista debe ser cadena de texto.',
            'dni_contractor.required' => 'El campo dni del contratista es obligatorio.',
            'dni_contractor.string' => 'El campo dni del contratista debe ser cadena de texto.',
            'email_contractor.required' => 'El campo email del contratista es obligatorio.',
            'email_contractor.email' => 'El campo email del contratista debe ser un email valido.',
            
        ];

        $this->validate($request, $rules,$messages);

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
        return view('contractors.edit_contractor', compact('contractors'));
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
