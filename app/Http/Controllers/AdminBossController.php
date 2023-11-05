<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminBoss;

class AdminBossController extends Controller
{
    public function index()
    {
        $adminBosses = adminBoss::all();
        return view('adminBoss.gestion_adminBoss',compact('adminBosses'));
    }

    public function store(Request $request)
    {
        $rules=[
            'dni' => 'required|numeric',
            'name' => 'required|string',
            'number_phone' => 'required|numeric',
            'address' => 'required|string',
            'email' => 'required|email'
        ];

        $messages=[
            'dni.required' => 'El campo DNI es obligatorio.',
            'dni.numeric' => 'El campo DNI debe ser numérico.',
            'name.required' => 'El campo Nombre es obligatorio.',
            'name.string' => 'El campo Nombre debe ser una cadena de texto.',
            'number_phone.required' => 'El campo Número de teléfono es obligatorio.',
            'number_phone.numeric' => 'El campo Número de teléfono debe ser numérico.',
            'address.required' => 'El campo Dirección es obligatorio.',
            'address.string' => 'El campo Dirección debe ser una cadena de texto.',
            'email.required' => 'El campo Correo Electrónico es obligatorio.',
            'email.email' => 'El campo Correo Electrónico debe ser una dirección de correo electrónico válida.'
        ];

        $this->validate($request, $rules,$messages);

        $adminBoss = new adminBoss();
        $adminBoss->dni = $request->dni;
        $adminBoss->name = $request->name;
        $adminBoss->number_phone = $request->number_phone;
        $adminBoss->address = $request->address;
        $adminBoss->email = $request->email;
        $adminBoss->save();
        return redirect()->route('adminBoss.index');

    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $adminBoss = adminBoss::find($id);
        return view('adminBoss.editar_adminBoss',compact('adminBoss'));
    }

    public function update(Request $request, $id)
    {
        $adminBoss = adminBoss::find($id);
        $adminBoss->dni = $request->dni;
        $adminBoss->name = $request->name;
        $adminBoss->number_phone = $request->number_phone;
        $adminBoss->address = $request->address;
        $adminBoss->email = $request->email;
        $adminBoss->save();
        return redirect()->route('adminBoss.index');
    }

    public function destroy($id)
    {
        $adminBoss = adminBoss::find($id);
        $adminBoss->delete();
        return redirect()->route('adminBoss.index');
    }
}
