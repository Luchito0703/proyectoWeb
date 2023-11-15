<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\adminProject;

class AdminProjectsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $adminProjects = adminProject::all();
        return view('adminProject.gestion_adminProjects',compact("adminProjects",'user'));
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

        $adminProject = new adminProject();
        $adminProject->dni = $request->dni;
        $adminProject->name = $request->name;
        $adminProject->number_phone = $request->number_phone;
        $adminProject->address = $request->address;
        $adminProject->email = $request->email;
        $adminProject->save();
        return redirect()->route('adminProjects.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $adminProject = adminProject::find($id);
        $user = Auth::user();
        return view('adminProject.editar_adminProject',compact('adminProject','user'));
    }

    public function update(Request $request, $id)
    {
        $adminProject = adminProject::find($id);
        $adminProject->dni = $request->dni;
        $adminProject->name = $request->name;
        $adminProject->number_phone = $request->number_phone;
        $adminProject->address = $request->address;
        $adminProject->email = $request->email;
        $adminProject->save();
        return redirect()->route('adminProjects.index');
    }

    public function destroy($id)
    {
        $adminProject = adminProject::find($id);
        $adminProject->delete();
        return redirect()->route('adminProjects.index');
    }
}