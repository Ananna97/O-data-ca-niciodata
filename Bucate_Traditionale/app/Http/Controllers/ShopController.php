<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
    	$products = Product::inRandomOrder()->take(12)->get();
    	return view('shop')->with('products', $products);
    }

     public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('product')->with('product',$product);
    }
}
