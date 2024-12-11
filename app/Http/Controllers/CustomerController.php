<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Tampilkan semua data customer
    public function index()
    {
        $customer = Customer::all();
        return view('customers.index', compact('customer'));
    }

    // Form tambah customer
    public function create()
    {
        return view('customers.create');
    }

     // input data
     public function store(Request $request){

        $data = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'phone' => 'required|numeric'

        ]);

        $newCustomer = Customer::create($data);

        return redirect(route('customers.index'));
    }

    // ke form edit
    public function edit(Customer $customer){
        return view('customers.edit', ['customer' => $customer]);

    }


    //update
    public function update(Customer $customer, Request $request){

        $data = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'phone' => 'required|numeric'

        ]);

        $customer->update($data);

        return redirect(route('customers.index'))->with('success', 'Customer Updated Succesfully');
    }
    
    public function destroy(Customer $customer){
        $customer->delete();
        return redirect(route('customers.index'))->with('success', 'Customer Deleted Succesfully');

    }
}
