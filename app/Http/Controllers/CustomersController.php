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
