<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\certificate;
use App\Models\contractor;
use App\Models\contracts;
use App\Models\customer;

class CertificatesController extends Controller
{

    public function index()
    {
        $certificates = certificate::all();
        $contractors=contractor::all();
        $contracts=contracts::all();
        $customers=customer::all();
        return view('certificado.gestion_certificate',compact('certificates','contractors','contracts','customers'));
    }

    public function store(Request $request)
    {
        $rules=[
            'id_certificate' => 'required|numeric',
            'id_contra' => 'required|numeric',
            'nit_costumer' => 'required|numeric',
            'id_contract' => 'required|numeric',
            'date_expedition' => 'required|date',
            'issue' => 'required|string'
        ];

        $messages=[
            'id_certificate.required' => 'El campo Id del certificado es obligatorio.',
            'id_certificate.numeric' => 'El campo Id del certificado debe ser numérico.',
            'id_contra.required' => 'El campo de contratista es obligatorio.',
            'id_contra.numeric' => 'El campo contratista debe ser numérico.',
            'nit_costumer.required' => 'El campo Número de nit del cliente es obligatorio.',
            'nit_costumer.numeric' => 'El campo Número de nit del cliente debe ser numérico.',
            'id_contract.required' => 'El campo Id contrato es obligatorio.',
            'id_contract.numeric' => 'El campo Id contrato del certificado debe ser numérico.',
            'date_expedition.required' => 'El campo fecha de expedicion es obligatorio.',
            'date_expedition.date' => 'El campo fecha de expedicion debe ser una fecha valida.',
            'issue.required' => 'El campo Tema es obligatorio.',
            'issue.string' => 'El campo  debe ser una cadena de texto.'
        ];

        $this->validate($request, $rules,$messages);

        $certificate = new certificate();
        $certificate->id_certicate = $request->$id_certificate;
        $certificate->id_contra = $request->$id_contra;
        $certificate->nit_costumer = $request->$nit_costumer;
        $certificate->id_contract = $request->$id_contract;
        $certificate->date_expedition = $request->$date_expedition;
        $certificate->issue = $request->$issue;
        $certificate->save();
        return redirect()->route('certificates.index');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $certificate = certificate::find($id);
        return view('certificado.editar_certificate', compact('certificate'));
    }

    public function update(Request $request, $id)
    {
        $certificate = certificate::find($id);
        $certificate->id_certicate = $request->$id_certificate;
        $certificate->id_contra = $request->$id_contra;
        $certificate->nit_costumer = $request->$nit_costumer;
        $certificate->id_contract = $request->$id_contract;
        $certificate->date_expedition = $request->$date_expedition;
        $certificate->issue = $request->$issue;
        return redirect()->route('certificates.index');    }

    public function destroy($id)
    {
        $certificate = certificate::find($id);
        $certificate->delete();
        return redirect()->route('certificates.index');    }
}
