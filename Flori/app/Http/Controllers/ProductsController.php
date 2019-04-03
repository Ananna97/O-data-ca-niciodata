<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\Request;

class ProductsController extends Controller
{

    public function create()
    {
    	return view('products');
    }
}