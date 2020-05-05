<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function ShowAddProductForm(){
        return view('add-product');
    }

    public function addMoney(Request $request){
        Form::create([
        'title' => request('title'),
        'price' => request('price')
        ]);

        return redirect()->route('products');
    }

    public function save(Request $request)
    {

        $product = new Product;

        $product->title = $request->title;
        $product->price = $request->price;

        $product->save();
    }

    public function showProducts(){
        $products = Product::all();
        return view ('products', compact('products'));
        }

    public function index(){
         return Product::all();
    }

    public function show(Form $product)
    {
         return $product;
    }

}
}
