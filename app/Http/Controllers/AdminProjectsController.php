<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminProject;

class AdminProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminProjects = adminProject::all();
        // return view(index);
    }

    public function store(Request $request)
    {
        $adminProject = new adminProject();
        $adminProject->dni = $request->dni;
        $adminProject->name = $request->name;
        $adminProject->number_phone = $request->number_phone;
        $adminProject->address = $request->address;
        $adminProject->email = $request->email;
        $adminProject->save();
        // return redirect()->route('x.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $adminProject = adminProject::find($id);
        // return view('x.editar',compact('adminBoss'));
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
        // return redirect()->route('x.index');
    }

    public function destroy($id)
    {
        $adminProject = admiProject::find($id);
        $adminProject->delete();
        // return redirect()->route('x.index');
    }
}
