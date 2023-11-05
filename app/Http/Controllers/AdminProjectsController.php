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
        return view('adminProject.gestion_adminProjects',compact("adminProjects"));
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
        return redirect()->route('adminProjects.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $adminProject = adminProject::find($id);
        return view('adminProject.editar_adminProject',compact('adminProject'));
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
