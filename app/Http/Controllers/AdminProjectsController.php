<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminProjects = adminProjects::all();
        // return view(index);
    }

    public function store(Request $request)
    {
        $adminProject = new adminProjects();
        $adminProject->id = $request->idProject;
        $adminProject->name = $request->nameProject;
        $adminProject->phone = $request->phoneProject;
        $adminProject->address = $request->addressProject;
        $adminProject->email = $request->emailProject;
        $adminProject->save();
        // return redirect()->route('x.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $adminProject = adminProjects::find($id);
        // return view('x.editar',compact('adminBoss'));
    }

    public function update(Request $request, $id)
    {
        $adminProject = adminProjects::find($id);
        $adminProject->id = $request->idProject;
        $adminProject->name = $request->nameProject;
        $adminProject->phone = $request->phoneProject;
        $adminProject->address = $request->addressProject;
        $adminProject->email = $request->emailProject;
        $adminProject->save();
        // return redirect()->route('x.index');
    }

    public function destroy($id)
    {
        $adminProject = admiProjects::find($id);
        $adminProject->delete();
        // return redirect()->route('x.index');
    }
}
