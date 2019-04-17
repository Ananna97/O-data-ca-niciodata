<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\Request;

class CartController extends Controller
{
    public function create()
    {
    	return view('cart');
    }
}