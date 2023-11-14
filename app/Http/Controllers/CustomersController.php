<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\customer;

class CustomersController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $customers = Customer::all();
        return view('customer.gestion_customer',compact('customers','user'));
    }


    public function store(Request $request)
    {
        $customer =new Customer();
        $customer->nit_customer = $request->nit_customer;
        $customer->dni_customer=$request->dni_customer;
        $customer->name_customer=$request->name_customer;
        $customer->number_customer=$request->number_customer;
        $customer->address_customer=$request->address_customer;
        $customer->email_customer=$request->email_customer;
        $customer->save();
        return redirect()->route('customer.index');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = Auth::user();
        $customer=Customer::find($id);
        return view('customer.editar_customer',compact('customer','user'));
    }

    public function update(Request $request, $id)
    {
        $customer=Customer::find($id);
        $customer->nit_customer = $request->nit_customer;
        $customer->dni_customer=$request->dni_customer;
        $customer->name_customer=$request->name_customer;
        $customer->number_customer=$request->number_customer;
        $customer->address_customer=$request->address_customer;
        $customer->email_customer=$request->email_customer;
        $customer->save();
        return redirect()->route('customer.index');
    }

    public function destroy($id)
    {
        $customer=Customer::find($id);
        $customer->delete();
        return redirect()->route('customer.index');
    }
}