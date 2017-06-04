<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Chamanagement;
use App\Http\Requests\ChamanagementValidation;
use App\user;
use Auth;
use Session;

class ChamanagementController extends Controller
{
    public function index(){
    	$chamanagement = New Chamanagement;
            $dataArr = $chamanagement->all()
                            ->toArray();
           $dataArr = Chamanagement::paginate();
    	return view('chamanagement.index',compact('dataArr'));
    }

    public function add(){
    	return view('chamanagement.add');
    }

    public function store(ChamanagementValidation $request) {
    if(!empty(Auth::user())){
            $roleId = Auth::user()->role_id;
        }
        else{
            $roleId=0;
        }

        if ($request->isMethod('post')) {
            $chamanagement = New Chamanagement;
            $chamanagement->cha_number = $request->cha_number;
            $chamanagement->credit_name = $request->credit_name;
            $chamanagement->debtor_name = $request->debtor_name;
            //$chamanagement->dob = $request->dob;
            $chamanagement->save();
            Session::flash('success','Data has been saved successfully!');
            return redirect('/chamanagement');
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

             $chamanagement = New Chamanagement;
             $dataForView = $chamanagement->where
                    ([
                        ['id', $id]
                    ])->first()->toArray();
             return view('chamanagement/update',compact('id','dataForView'));
      }

      public function updateData($id=null, Request $request)
       {
          if(!empty(Auth::user())){
                $roleId = Auth::user()->role_id;
            }
            else{
                $roleId=0;
            }

         $chamanagement = New Chamanagement;
         $data = $request->all();
         
         $update = $chamanagement->where([['id', $id]])->first();
            $update->update($data);
             Session::flash('success','Data has been updated successfully!');
         return redirect('/chamanagement');
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
               $chamanagement = New chamanagement;
               $chamanagement = $chamanagement->find($id);
                           $chamanagement->delete();
                Session::flash('success','Data  has been delete successfully!'); 
                return redirect('/chamanagement');
            }
        }
}
