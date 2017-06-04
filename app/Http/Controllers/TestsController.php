<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use Session;
use Auth;
class TestsController extends Controller
{
    public function index()
    {
        if(!empty(Auth::user())){
                $roleId = Auth::user()->role_id;
            }
            else{
                $roleId=0;
            }
        $crud = New Test;
        $dataArr = $crud->all()
                        ->toArray();
       $dataArr = Test::paginate(5);
    	return view('tests.index',compact('dataArr'));

    }

    public function add(){
        if(!empty(Auth::user())){
                $roleId = Auth::user()->role_id;
            }
            else{
                $roleId=0;
            }
        return view('tests.add');
    }

    public function store(Request $request)
    {
    if(!empty(Auth::user())){
            $roleId = Auth::user()->role_id;
        }
        else{
            $roleId=0;
        }

        if ($request->isMethod('post')) {
            $crud = New Test;
            $crud->name = $request->name;
            $crud->description = $request->description;
            $crud->save();
            Session::flash('success','Data has been saved successfully!');
            return redirect('/crud');
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
         $test = New Test;
         $dataForView = $test->where
                ([
                    ['id', $id]
                ])->first()->toArray();
         return view('tests/update',compact('id','dataForView'));
      }

       public function updateData($id=null, Request $request)
       {
        if(!empty(Auth::user())){
                $roleId = Auth::user()->role_id;
            }
            else{
                $roleId=0;
            }

         $test = New Test;
         $data = $request->all();
         
         $update = $test->where([['id', $id]])->first();
            $update->update($data);
             Session::flash('success','Data has been updated successfully!');
         return redirect('/crud');
        }

        public function delete($id = null, Request $request)
        {
        if(!empty(Auth::user())){
            $roleId = Auth::user()->role_id;
        }
        else{
            $roleId=0;
        }

         if (!empty($id)) {
          $test = new Test;
          $test = $test->find($id);
                $test->delete();
                 Session::flash('success','Data  has been delete successfully!');
                return redirect('/crud');
         }
     }
}
