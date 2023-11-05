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
        return view('loan.gestion_loan',compact('loans','contractors','equipments'));
    }

   
    public function store(Request $request)
    {
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
        return view('loan.editar_loan',compact('loan','contractors','equipments'));
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
        return redirect()->route('loan.index');
    }

   
    public function destroy($id)
    {
        $loan = loan::find($id);
        $loan->delete();
        return redirect()->route('loan.index');
    }
}
