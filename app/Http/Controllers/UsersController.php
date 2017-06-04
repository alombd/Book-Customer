<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use App\Http\Requests\ProfileValidation;
use Auth;

class UsersController extends Controller
{
    public function index()
    {
        if(!empty(Auth::user())){
                $roleId = Auth::user()->role_id;
            }
            else{
                $roleId=0;
            }
    	return view('users/index');
    }

        public function update($id=null)
        {
            if(!empty(Auth::user())){
                $roleId = Auth::user()->role_id;
            }
            else{
                $roleId=0;
            }

	        $test = New User;
	        $dataForView = $test->where
	            ([
	                ['id', $id]
	            ])->first()->toArray();

               return view('users.update', compact('id','dataForView'));
    	}
        

    	 public function updateData($id=null, Request $request)
    	 {
            if(!empty(Auth::user())){
                $roleId = Auth::user()->role_id;
            }
            else{
                $roleId=0;
            }

	        $test = New User;
	        $data = $request->all();
	        //dd($data);die;
	        $update = $test->where([['id', $id]])->first();

	        if(!empty($request->file('profile_pic'))) {
            $avatar = uniqid();
            $file = $request->file('profile_pic');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $destinationPath = base_path().'/public/img/profile_picture/';
            $newFilename = $avatar.'.'.$extension;
            $data['profile_pic'] = $newFilename;
            $request ->file('profile_pic')->move($destinationPath, $newFilename);

            
            }
            $update->update($data);

            Session::flash('success','Data has been updated successfully!');

	        return redirect('/editprofile');
    	}

}
