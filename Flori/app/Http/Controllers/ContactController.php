<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\Request;

class ContactController extends Controller
{
    public function create()
    {
    	return view('contact');
    }
}