<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loan;
use App\Models\contractor;
use App\Models\equipment;

class LoansController extends Controller
{    
    public function index()
    {
        $loans = loan::all();
        $contractors = contractor::all();
        $equipments = equipment::all();
        return view('loan.create',compact('loans','contractors','equipments'));
    }

   
    public function store(Request $request)
    {
        $rules=[
            'id_prest' => 'required|numeric',
            'id_contractor' => 'required|numeric',
            'id_equipment' => 'required|numeric',
            'date_devolution' => 'required|date',
            'date_loan' => 'required|date'
        ];

        $messages=[
            'id_prest.required' => 'El campo id del prestamo es obligatorio.',
            'id_prest.numeric' => 'El campo id del prestamo debe ser un numerico.',
            'id_contractor.required' => 'El campo id del contratista es obligatorio.',
            'id_contractor.numeric' => 'El campo id del contratista debe ser numerico.',
            'id_equipment.required' => 'El campo id del equipo es obligatorio.',
            'id_equipment.numeric' => 'El campo id del equipo debe ser numerico.',
            'date_devolution.required' => 'El campo fecha de devolucion es obligatorio.',
            'date_devolution.date' => 'El campo fecha de devolucion debe ser una fecha valida.',
            'date_loan.required' => 'El campo fecha de prestamo es obligatorio.',
            'date_loan.date' => 'El campo fecha de prestamo debe ser una fecha valida.',
            
        ];

        $this->validate($request, $rules,$messages);

        // dd($request->all());
        $loan = new loan();
        $loan-> id_prest = $request->id_prest;
        $loan-> id_contractor = $request->id_contractor;
        $loan-> id_equipment = $request->id_equipment;
        $loan-> date_devolution = $request->date_devolution;
        $loan-> date_loan = $request->date_loan;
        $loan->save();
        return redirect()->route('loan.index');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $loan = loan::find($id);
        $contractors = contractor::all();
        $equipments = equipment::all();
        return view('loan.edit_loan',compact('loan','contractors','equipments'));
    }

   
    public function update(Request $request, $id)
    {
        $loan = loan::find($id);
        $loan-> id_prest = $request->id_prest;
        $loan-> id_contractor = $request->id_contractor;
        $loan-> id_equipment = $request->id_equipment;
        $loan-> date_devolution = $request->date_devolution;
        $loan-> date_loan = $request->date_loan;
        $loan->save();
        // return redirect()->route('x.index');
    }

   
    public function destroy($id)
    {
        $loan = loan::find($id);
        $loan->delete();
        // return redirect()->route('x.index');
    }
}
