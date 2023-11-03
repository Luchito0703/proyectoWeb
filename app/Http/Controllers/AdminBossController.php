<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminBoss;

class AdminBossController extends Controller
{

    public function index()
    {
        $adminBosses = adminBoss::all();
        return response()->json($adminBosses);
        // return view(index);
    }

    public function store(Request $request)
    {
        $adminBoss = new adminBoss();
        $adminBoss->id = $request->idBoss;
        $adminBoss->name = $request->nameBoss;
        $adminBoss->phone = $request->phoneBoss;
        $adminBoss->address = $request->addressBoss;
        $adminBoss->email = $request->emailBoss;
        if ($adminBoss->save()) {
            return response()->json([
                "status"=>"succes",
                "message"=>"Author created succesfully"
            ]);
        } else{
            return response()->json([
                "status"=>"Error",
                "message"=>"Author  not created"
            ]);
        }
        // $adminBoss->save();
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
        $adminBoss->id = $request->idBoss;
        $adminBoss->name = $request->nameBoss;
        $adminBoss->phone = $request->phoneBoss;
        $adminBoss->address = $request->addressBoss;
        $adminBoss->email = $request->emailBoss;
        $adminBoss->save();
        // return redirect()->route('x.index');
    }

    public function destroy($id)
    {
        $adminBoss = adminBoss::find($id);
        if ($adminBoss->delete()) {
            return response()->json([
                "status"=>"succes",
                "message"=>"Author created succesfully"
            ]);
        } else{
            return response()->json([
                "status"=>"Error",
                "message"=>"Author  not created"
            ]);
        }
        // $adminBoss->delete();
        // return redirect()->route('x.index');
    }
}
