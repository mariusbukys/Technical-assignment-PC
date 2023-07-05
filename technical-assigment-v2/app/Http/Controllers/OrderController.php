<?php

namespace App\Http\Controllers;

use App\Models\Base;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)->get();

        return view('orders', ['orders' => $orders]);
    }


    public function createOrder(Request $request)
    {

        $user = Auth::user();
        $products = $request->input('ids', []);
        $base = $request->input('id');

        $selectedProducts = Product::whereIn('id', $products)->pluck('name')->implode(', ');
        $selectedBase = Base::find($base)->base_name;

        $selectedProductPrices = Product::whereIn('id', $products)->pluck('price')->toArray();
        $selectedBasePrice = Base::find($base)->base_price;
        
        $total = $selectedBasePrice;
        foreach($selectedProductPrices as $product){
            $total += $product;
        }
        if(count($products) > 3){
            $discount = $total * 0.1;
            $total -= $discount;
        }

        $order = new Order();
        $order->user_id = $user->id;
        $order->selected_base = $selectedBase;
        $order->selected_products = $selectedProducts; 
        $order->total = $total;
        $order->save();

        return redirect('/orders')->with('status','Your order created successfully');
    }

}
