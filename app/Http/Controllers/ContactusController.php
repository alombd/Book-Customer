<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Auth;
use App\Http\Requests\ContactusValidation;

class ContactusController extends Controller
{
    public function index(Request $request)
    {
 		if ($request->isMethod('post')) {
	    	$data = $request->all();

	        Mail::send('emails.contact_us_email', ['data' => $data], function ($m) use ($data) {
	            $m->from('alombd.bd@gmail.com', 'testApp');

	            $m->to('alombd.bd@gmail.com', 'Alamgir Hossen')->subject($data['subject']);
	        });
	    }

    	return view('/contactus/index');
    	//return view('/emails/contact_us_email');
    }
}
