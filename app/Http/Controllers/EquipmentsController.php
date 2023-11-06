<?php

namespace App\Http\Controllers;
use App\Models\equipment;

use Illuminate\Http\Request;

class EquipmentsController extends Controller
{
    
    public function index()
    {
        $equipments = equipment::all();
        return view('equipment.gestion_equipments',compact("equipments"));
    }

    public function store(Request $request)
    {
        $rules=[
            'id_equipment' => 'required|string',
            'name_equipment' => 'required|string',
        ];

        $messages=[
            'id_equipment.required' => 'El campo dni del cliente es obligatorio.',
            'id_equipment.string' => 'El campo dni del cliente debe ser valido.',
            'name_equipment.required' => 'El campo nombre del cliente es obligatorio.',
            'name_equipment.string' => 'El campo nombre del cliente debe ser cadena de texto.',
            
        ];

        $this->validate($request, $rules,$messages);

        $equipment = new equipment();
        $equipment-> id_equipment= $request->id_equipment;
        $equipment->name_equipment=$request->name_equipment;
        $equipment->save();
        return redirect()->route('equipments.index');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $equipments = equipment::find($id);
        return view('equipment.editar_equipments',compact("equipments"));
    }

   
    public function update(Request $request, $id)
    {
        $equipment = equipment::find($id);
        $equipment-> id_equipment= $request->id_equipment;
        $equipment->name_equipment=$request->name_equipment;
        $equipment->save();
        return redirect()->route('equipments.index');
    }

 
    public function destroy($id)
    {
        $equipment = equipment::find($id);
        $equipment->delete();
        return redirect()->route('equipments.index');;
    }
}
