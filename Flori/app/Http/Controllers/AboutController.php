<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\Request;

class AboutController extends Controller
{
    public function create()
    {
    	return view('about');
    }
}