<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class CustomersController extends Controller
{

    public function index()
    {
        // $customers=Customer::all();
        
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $customer=new Customer();
        $customer->id=$request->idCustomer;
        $customer->name=$request->nameCustomer;
        $customer->number_phone=$request->numberCustomer;
        $customer->address=$request->addressCustomer;
        $customer->email=$request->emailCustomer;
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
        $customer->id=$request->idCustomer;
        $customer->name=$request->nameCustomer;
        $customer->number_phone=$request->numberCustomer;
        $customer->address=$request->addressCustomer;
        $customer->email=$request->emailCustomer;
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
