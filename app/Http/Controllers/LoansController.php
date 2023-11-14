<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\contractor;
use App\Models\loan;
use App\Models\equipment;

class LoansController extends Controller
{    
    public function index()
    {
        $user = Auth::user();
        $loans = loan::all();
        $contractors = contractor::all();
        $equipments = equipment::all();
        return view('loan.gestion_loan',compact('loans','contractors','equipments','user'));
    }

   
    public function store(Request $request)
    {
        // dd($request->all());
        $loan = new loan();
        $loan-> id_prest = $request->id_prest;
        $loan-> id_contractor = $request->id_contractor;
        $loan-> id_equipment = $request->id_equipment;
        $loan-> date_loan = $request->date_loan;
        $loan-> date_devolution = $request->date_devolution;
        $loan->save();
        return redirect()->route('loans.index');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = Auth::user();
        $loan = loan::find($id);
        $contractors = contractor::all();
        $equipments = equipment::all();
        return view('loan.editar_loan',compact('loan','contractors','equipments','user'));
    }

   
    public function update(Request $request, $id)
    {
        $loan = loan::find($id);
        $loan-> id_prest = $request->id_prest;
        $id_contractor = $request->id_contractor;
        $loan-> id_equipment = $request->id_equipment;
        $loan-> date_loan = $request->date_loan;
        $loan-> date_devolution = $request->date_devolution;
        $loan->save();
        return redirect()->route('loans.index');
    }

   
    public function destroy($id)
    {
        $loan = loan::find($id);
        $loan->delete();
        return redirect()->route('loans.index');
    }
}