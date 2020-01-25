<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Mail;
use Session;

class ContactController extends Controller
{
    public function create()
    {
    	return view('contact');
    }

    //function for email sending
    public function postContact(Request $request)
    {
    	//input validation
    	$this->validate($request,[
    		'name' => 'required',
    		'email' => 'required|email',
    		'message' => 'required'
    	]);

    	//array with inputs
    	$data = array(
    		'email' => $request->email,
    		'subject' => $request->name,
    		'bodyMessage' =>$request->message
    	);

    	//email format
    	Mail::send('emails.contact-message', $data,function($message) use ($data){

    		$message->to('thelazyunicorn97@gmail.com');
    		$message->subject($data['subject']);
    		$message->from($data['email'] , $data['email']);
    		

    	});
    		//return message if send
    		echo('Message send successfully');
    		

    }
}