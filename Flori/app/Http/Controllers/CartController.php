<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Product;
use Cart;

class CartController extends Controller
{
    public function create()
    {
    	return view('cart');
    }

    public function store(Request $request)
    {
    	Cart::add($request->id_product, $request->name_product, 1 ,$request->price)->associate('App\Product');
    	echo $request;

    	return redirect()->route('cart.create')->with('success_message','Item was added to your cart');
    }

   
}