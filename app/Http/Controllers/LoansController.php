<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loan;

class LoansController extends Controller
{
    
    public function index()
    {
        $loans = loan::all();
        // return view('x.index');
    }

   
    public function store(Request $request)
    {
        $loan = new loan();
        $loan-> id_prest = $request->id_prest;
        $loan-> id_contractor = $request->id_contractor;
        $loan-> id_team = $request->id_team;
        $loan-> date_devolution = $request->date_devolution;
        $loan-> date_loan = $request->date_loan;
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
        $loan-> id_prest = $request->id_prest;
        $loan-> id_Contractor = $request->id_Contractor;
        $loan-> id_team = $request->id_team;
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
