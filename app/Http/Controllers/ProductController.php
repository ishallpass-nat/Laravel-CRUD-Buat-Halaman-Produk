<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
      public function index(){
      $products = Product::all();
        return view("products.index", ["products" => $products]);
    }
    public function create(){
 
        return view("products.create");
    }
    public function store(Request $request){
        Product::create([
            'name' => $request->name,
            'stock' => $request->stock,
            'price' => $request->price,
        ]);
        return redirect()->route("products");
    }
    public function show($id){
        $product = Product::findOrFail($id);
        return view ('products.show', ['product' => $product]);
    }
        public function edit($id){
        $product = Product::findOrFail($id);
        return view ('products.edit', ['product' => $product]);
    }
    public function update(Request $request, $id){
            $product = Product::findOrFail($id);
            $product->update([
                'name' => $request->name,
                'stock' => $request->stock,
                'price' => $request->price,
            ]);
        return redirect()->route("products");
    }    
    public function destroy($id){
    $product = Product::findOrFail($id);
    $product->delete();
            return redirect()->route("products")->with('success, "Data Produk Berhasil dihapus.');
    }

    public function detail(){
        echo "test";
    }
}


