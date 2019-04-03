<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\Request;

class IndexController extends Controller
{
    public function create()
    {
    	return view('index');
    }
}