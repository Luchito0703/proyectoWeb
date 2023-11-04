<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\certificate;

class CertificatesController extends Controller
{

    public function index()
    {
        $certificates = certificate::all();
        // return view('index',compact('certificates'));
    }

    public function store(Request $request)
    {
        $certificate = new certificate();
        $certificate->id = $request->$id;
        $certificate->id_contra = $request->$id_contra;
        $certificate->nit_costumer = $request->$nit_costumer;
        $certificate->id_contract = $request->$id_contract;
        $certificate->date_expedition = $request->$date_expedition;
        $certificate->issue = $request->$issue;
        $certificate->save();
        // return redirect()->route('x.index');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $certificate = certificate::find($id);
        // return view('x.edit_certificate',compact('certificate'));
    }

    public function update(Request $request, $id)
    {
        $certificate = certificate::find($id);
        $certificate->id = $request->$idCertificate;
        $certificate->id_contra = $request->$idContractor;
        $certificate->nit_costumer = $request->$nit_costumer;
        $certificate->id_contract = $request->$idcontract;
        $certificate->date_expedition = $request->$dateExpedition;
        $certificate->issue = $request->$issueCertificate;
        $certificate->save();
        // return redirect()->route('x.index');
    }

    public function destroy($id)
    {
        $certificate = certificate::find($id);
        $certificate->delete();
        // return redirect()->route('x.index');
    }
}
