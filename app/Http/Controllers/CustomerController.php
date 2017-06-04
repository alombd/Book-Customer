<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Session;
use Auth;
use App\Http\Requests\CustomerValidation;

class CustomerController extends Controller
{


    public function index()
    {   
        if(!empty(Auth::user())){
           $roleId = Auth::user()->role_id;
            }   else {
                $roleId=0;
            }

    	$customer = new Customer;
    	/*$dataArr  = $customer
                            ->
                            ->get()
    						->toArray();*/
                       
        $dataArr = $customer
                    ->where(['user_id'=>Auth::user()->id])
                    ->paginate(5);
         // pr($dataArr); die;    
    	return view('customers.index', compact('roleId','dataArr'));
    }

    public function add(){
          if(!empty(Auth::user())){
            $roleId = Auth::user()->role_id;
            }  else  {
                $roleId=0;
            }

    	return view('customers.add');
    }

    public function store(CustomerValidation $request)
    {
          if(!empty(Auth::user())){
          $roleId = Auth::user()->role_id;
            }   else   {
                $roleId=0;
            }
    	if ($request->isMethod('post')) {
    		$customer = New Customer;
    		$customer->customer_name = $request->customer_name;
    		$customer->phone = $request->phone;
            $customer->email = $request->email;
    		$customer->user_id = Auth::user()->id;
    		$customer->save();
    		Session::flash('success','Data has been saved successfully!');
    		return redirect('/customer');
    	}
    }


    public function update($id=null)
      {
            if(!empty(Auth::user())){
             $roleId = Auth::user()->role_id;
            }
            else{
                $roleId=0;
            }

             $test = New Customer;
             $dataForView = $test->where
                    ([
                        ['id', $id]
                    ])->first()->toArray();
             return view('customers/update',compact('id','dataForView'));
      }

      public function updateData($id=null, Request $request)
       {
          if(!empty(Auth::user())){
                $roleId = Auth::user()->role_id;
            }
            else{
                $roleId=0;
            }

         $test = New Customer;
         $data = $request->all();
         
         $update = $test->where([['id', $id]])->first();
            $update->update($data);
             Session::flash('success','Data has been updated successfully!');
         return redirect('/customer');
        }

    public function delete($id=null,Request $request)
    {
         if(!empty(Auth::user())){
                $roleId = Auth::user()->role_id;
            }
            else{
                $roleId=0;
            }
        if (!empty($id)) {
           $customer = New Customer;
           $customer = $customer->find($id);
                       $customer->delete();
            Session::flash('success','Data  has been delete successfully!'); 
            return redirect('/customer');
        }
    }
}
