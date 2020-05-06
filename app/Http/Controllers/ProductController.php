<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function getProduct() { 

       return view('products'); 
     } 

    public function saveProduct(Request $request) { 

        $this->validate($request, [
            'title' => 'required',
            'price' => 'required'
        ]);

        $product = new Product;

        $product->title = $request->title;
        $product->price = $request->price;

        $product->save();
    }
}
