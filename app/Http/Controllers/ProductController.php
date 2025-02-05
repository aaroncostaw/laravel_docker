<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function getAll() {
        $products = Product::all();
        return response()->json($products);
    }

    public function getById(Request $request) {
        $product = Product::find($request->id);
        return response()->json($product);
    }

    public function create(Request $request) {
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    public function update(Request $request) {
        $product = Product::find($request->id);
        $product->update($request->all());
        return response()->json($product, 200);
    }

    public function delete(Request $request) {
        Product::find($request->id)->delete(); 
        return response()->json(null, 204);
    }
    
}
