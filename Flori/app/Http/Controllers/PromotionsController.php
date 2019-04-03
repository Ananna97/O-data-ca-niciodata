<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\Request;

class PromotionsController extends Controller
{
    public function create()
    {
    	return view('promotions');
    }
}