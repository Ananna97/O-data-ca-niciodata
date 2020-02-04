<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;
use Cart;
use DB;

class CartController extends Controller
{
    public function create()
    {

    	return view('cart');
    }

    public function store(Request $request)
    {
        $quantity = 1;
    	Cart::add($request->id_product, $request->name_product, $quantity ,$request->price)->associate('App\Product');
    	echo $request;

    	return redirect()->route('cart.create')->with('success_message','');
    }

    public function removeCartProduct($id_product)
    {

        Cart::remove($id_product);

        return redirect('/cart')->with('msg','item removed');
    }

    public function update($rowId)
    {

        $row = Cart::get($rowId);

        Cart::update($rowId, $row->qty + 1);
    }


   public function submitOrder()
    {
        $user = Auth::user();
        print($user->user_id);

        $cart = Cart::content();

        foreach ($cart as $item) {
        
            DB::table('order_products')->insert(
            ['user_id' => $user->user_id, 
            'id_product' => $item->model->id_product,
            'quantity' => 1,
            'address' => 'home',
            'city' => 'home',
            'county' => 'home',
            'postal_code' => 100100,
            ]
            );
        }
        Cart::destroy();
        return redirect('/cart')->with('msg','submited');
    }
}