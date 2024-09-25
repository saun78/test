<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product (){
        $products = products::all();
        return view('index', compact('products'));
    }

    public function show($id){
        $product = products::find($id);
        return view('product', compact('product'));
    }

}
