<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminBoss;

class AdminBossController extends Controller
{
    public function create()
    {
        return view('adminBoss.create');
    }
    public function mostrarVista()
    {
        return view('mi_vista');
    }

    public function verVista()
    {
        return view('welcome');
    }

    public function index()
    {
        $adminBosses = adminBoss::all();
        // return view(index);
    }

    public function store(Request $request)
    {
        $adminBoss = new adminBoss();
        $adminBoss->dni = $request->dni;
        $adminBoss->name = $request->name;
        $adminBoss->number_phone = $request->number_phone;
        $adminBoss->address = $request->address;
        $adminBoss->email = $request->email;
        $adminBoss->save();
        // return redirect()->route('x.index');

    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $adminBoss = adminBoss::find();
        // return view('x.editar',compact('adminBoss'));
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
        // return redirect()->route('x.index');
    }

    public function destroy($id)
    {
        $adminBoss = adminBoss::find($id);
        $adminBoss->delete();
        // return redirect()->route('x.index');
    }
}
