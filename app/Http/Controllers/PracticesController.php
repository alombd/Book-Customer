<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PracticesController extends Controller
{
    public function index()
    {
    	if(!empty(Auth::user())){
                $roleId = Auth::user()->role_id;
            }
            else{
                $roleId=0;
            }
    	return view('practices/index');
    }
}
