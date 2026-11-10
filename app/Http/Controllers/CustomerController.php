<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest; 

class CustomerController extends Controller
{
      public function index(){
        $customers = Customer::paginate(1);
        return view("customers.index", ["customers" => $customers]);
    }
    public function create(){
        return view("customers.create");
    }
    public function store(CustomerRequest $request){
    $validated = $request ->validated();
    Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'city' => $request->city,
        ]);
        
        return redirect()->route("customers");
    }
    public function show($id){
        $customer = Customer::findOrFail($id);
        return view ('customers.show', ['customer' => $customer]);
    }
    public function edit($id){
        $customer = Customer::findOrFail($id);
        return view ('customers.edit', ['customer' => $customer]);
    }
    public function update(CustomerRequest $request, $id){
        $validated = $request ->validated();
        $customer = Customer::findOrFail($id);
        $customer->update([
            'name' => $request->name,
            'email' => $request->email,
            'city' => $request->city,
        ]);
        return redirect()->route("customers");
    }    
    public function destroy($id){
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route("customers")->with('success, "Customer Berhasil dihapus.');
    }
}


