<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pmis;
use Session;
use Auth;

class PmisController extends Controller
{
    public function index(){

        if(!empty(Auth::user())){
                $roleId = Auth::user()->role_id;
            }
            else{
                $roleId=0;
            }

    	$pmis = new Pmis;
    	$dataArr  = $pmis->all()
    						 ->toArray();
        $dataArr = Pmis::paginate(5);
    	return view('pmis.index',compact('dataArr'));
    }

    public function add(){
        if(!empty(Auth::user())){
                $roleId = Auth::user()->role_id;
            }
            else{
                $roleId=0;
            }

    	return view('pmis.add');
    }

        public function store(Request $request)  {

                if(!empty(Auth::user())){
                        $roleId = Auth::user()->role_id;
                    }
                    else{
                        $roleId=0;
                    }

                if ($request->isMethod('post')) {
                    $pmis = New Pmis;
                    $pmis->project_name = $request->project_name;
                    $pmis->problem_summery = $request->problem_summery;
                    $pmis->save();
                    Session::flash('success','Data has been saved successfully!');
                    return redirect('/pmis');
                }
            }

    public function update($id=null)
      {
        if(!empty(Auth::user())){
          $roleId = Auth::user()->role_id;
            }  else {
                $roleId=0;
            }

         $pmis = New Pmis;
         $dataForView = $pmis->where
                ([
                    ['id', $id]
                ])->first()->toArray();
         return view('pmis/update',compact('id','dataForView'));
      }

         public function updateData($id=null, Request $request)
           {
            if(!empty(Auth::user())){
                    $roleId = Auth::user()->role_id;
                }
                else{
                    $roleId=0;
                }

             $test = New Pmis;
             $data = $request->all();
             
             $update = $test->where([['id', $id]])->first();
                $update->update($data);
                 Session::flash('success','Data has been updated successfully!');
             return redirect('/pmis');

            }


         public function delete($id = null, Request $request) {
            if(!empty(Auth::user())){
                $roleId = Auth::user()->role_id;
            }
            else{
                $roleId=0;
            }

             if (!empty($id)) {
              $pmis = new Pmis;
              $pmis = $pmis->find($id);
                    $pmis->delete();
                     Session::flash('success','Data  has been delete successfully!');
                    return redirect('/pmis');
             }
        }
}
