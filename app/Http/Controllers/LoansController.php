<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loan;

class LoansController extends Controller
{
    
    public function index()
    {
        $loans = loans::all();
        // return view('x.index');
    }

   
    public function store(Request $request)
    {
        $loan = new loan();
        $loan-> id = $request->idPrest;
        $loan-> id_contra = $request->idContractor;
        $loan-> id_team = $request->idTeam;
        $loan-> date_dev = $request->dateDevolution;
        $loan-> date_prest = $request->DateLoan;
        $loan->save();
        // return redirect()->route('x.index');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $loan = loan::find($id);
        // return view('x.edit_loan',compact('loan'));
    }

   
    public function update(Request $request, $id)
    {
        $loan = loan::find($id);
        $loan-> id = $request->idPrest;
        $loan-> id_contra = $request->idContractor;
        $loan-> id_team = $request->idTeam;
        $loan-> date_dev = $request->dateDevolution;
        $loan-> date_prest = $request->DateLoan;
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
