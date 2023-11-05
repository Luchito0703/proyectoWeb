<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class CustomersController extends Controller
{

    public function index()
    {
        $customers=Customer::all();
        // return view(index);
        
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $rules=[
            'dni_customer' => 'required|string',
            'name_customer' => 'required|string',
            'number_customer' => 'required|string',
            'address_customer' => 'required|string',
            'email_customer' => 'required|email'
        ];

        $messages=[
            'dni_customer.required' => 'El campo dni del cliente es obligatorio.',
            'dni_customer.string' => 'El campo dni del cliente debe ser cadena de texto.',
            'name_customer.required' => 'El campo nombre del cliente es obligatorio.',
            'name_customer.string' => 'El campo nombre del cliente debe ser cadena de texto.',
            'number_customer.required' => 'El campo numero de telefono del cliente es obligatorio.',
            'number_customer.string' => 'El campo numero de telefono del cliente debe ser valido.',
            'address_customer.required' => 'El campo direccion de telefono del cliente es obligatorio.',
            'address_customer.string' => 'El campo direccion de telefono del cliente debe ser cadena de texto.',
            'email_customer.required' => 'El campo email del cliente es obligatorio.',
            'email_customer.email' => 'El campo email del cliente debe ser un email valido.',
            
        ];

        $this->validate($request, $rules,$messages);

        $customer=new Customer();
        $customer->dni_customer=$request->dni_customer;
        $customer->name_customer=$request->name_customer;
        $customer->number_customer=$request->number_customer;
        $customer->address_customer=$request->address_customer;
        $customer->email_customer=$request->email_customer;
        $customer->save();
        // return redirect()->route('xx');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $customer=Customer::find($id);
        // return view('xx',compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $customer=Customer::find($id);
        $customer->dni_customer=$request->dni_customer;
        $customer->name_customer=$request->name_customer;
        $customer->number_customer=$request->number_customer;
        $customer->address_customer=$request->address_customer;
        $customer->email_customer=$request->email_customer;
        $customer->save();
        // return redirect()->route('xx');
    }

    public function destroy($id)
    {
        $customer=Customer::find($id);
        $customer->delete();
        // return redirect()->route('xx');
    }
}
