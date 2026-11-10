<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest; 
class OrderController extends Controller
{
    public function index(){
        $orders = Order::with('customer')->paginate(1);
        return view("orders.index", ["orders" => $orders]);
    }

    public function create(){
        
        $customers = Customer::orderBy('name')->get();
        return view("orders.create", ['customers' => $customers]);
    }
    public function store(OrderRequest $request){
    $validated = $request ->validated();
    Order::create([
            'customer_id' => $request->customer_id,
            'order_number' => $request->order_number,
            'order_date' => $request->order_date,
            'total' => $request->total,
            'status' => $request->status,      
     
        ]);
        return redirect()->route("orders");
    }
    public function show($id){
        $order = Order::findOrFail($id);
        return view ('orders.show', ['order' => $order]);
    }
    public function edit($id){
        $order = Order::findOrFail($id);
        return view ('orders.show', ['order' => $order]);
    }
    public function update(OrderRequest $request, $id){
    $validated = $request ->validated();
        $order = Customer::findOrFail($id);
        $order->update([
            'customer_id' => $request->customer_id,
            'order_number' => $request->order_number,
            'order_date' => $request->order_date,
            'total' => $request->total,
            'status' => $request->status,      
     
        ]);
        return redirect()->route("orders");
    }    
    public function destroy($id){
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()->route("orders")->with('success, "Order Berhasil dihapus.');
    }
}

