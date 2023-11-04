<?php

namespace App\Http\Controllers;
use App\Models\equipment;

use Illuminate\Http\Request;

class EquipmentsController extends Controller
{
    
    public function index()
    {
        $equipments = equipment::all();
        // return('x.index');
    }

    public function store(Request $request)
    {
        $equipment = new equipment();
        $equipment-> id = $required->idEquipment;
        $equipment->name=$required->nameEquipment;
        $equipment->save();
        // return redirect()->route('x.index');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $equipment = equipment::find($id);
        // return view('x.edit_equipment',compact('equipment'));
    }

   
    public function update(Request $request, $id)
    {
        $equipment = equipment::find($id);
        $equipment-> id = $required->idEquipment;
        $equipment->name=$required->nameEquipment;
        $equipment->save();
        // return redirect()->route('x.index');
    }

 
    public function destroy($id)
    {
        $equipment = equipment::find($id);
        $equipment->delete();
        // return redirect()->route('x.index');
    }
}
