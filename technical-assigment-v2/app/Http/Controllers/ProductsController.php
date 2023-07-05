<?php

namespace App\Http\Controllers;


use App\Models\Base;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function items()
    {
        $products = Product::all();
        $base = Base::all();
        return view('products', [
            'products' => $products,
            'base' => $base,
        ]);
    }

   
}
