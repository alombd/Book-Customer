<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ModuleValidation;
use App\User;
use App\Module;
use App\Privilage;
use Session;
use Auth;

class ServicesController extends Controller
{

	 public function __construct()
    {
        $this->middleware('auth');
    }
    


    public function modulelist(){
        if(!empty(Auth::user())){
                $roleId = Auth::user()->role_id;
            }
            else{
                $roleId=0;
            }

    	 $test = New Module;
        $dataArr = $test->all()
                        ->toArray();
                        // pr($dataArr); die;
    	return view('services.modulelist',compact('dataArr'));

    }

 	 public function addmodule()
	    {
            if(!empty(Auth::user())){
                $roleId = Auth::user()->role_id;
            }
            else{
                $roleId=0;
            }
			 return view('services.addmodule');
	    }

         public function store(Request $request) {

                if(!empty(Auth::user())){
                $roleId = Auth::user()->role_id;
            }
            else{
                $roleId=0;
            }
                if ($request->isMethod('post')) {
                    $module = New Module;
                    $module->controller_name = $request->controller_name; 
                    $module->save();
                    Session::flash('success','Data has been saved successfully!');
                    return redirect('/modulelist');
                }
            }

            
        public function index()
        {

            if(!empty(Auth::user())){
                $roleId = Auth::user()->role_id;
            }
            else{
                $roleId=0;
            }

             $test = New User;
            $dataArr = $test->all()
                            ->toArray();
           $dataArr = User::paginate(5);
            return view('services.index',compact('dataArr'));

        }


 	 // public function showmodulelist()
	  //   {
	  //   	$test = New Module;
   //      	$dataArr = $test->all()
   //                      ->toArray();
			//  return view('services.showmodule',compact('dataArr'));
	  //   } 


        public function assignprivilage($id, Request $request)
        {
            
            if(!empty(Auth::user())){
                $roleId = Auth::user()->role_id;
            }
            else{
                $roleId=0;
            }

            //$userId = Auth::user()->user_id;

            $test = new Privilage;
            if($request->isMethod('post')){
                $data = $request->all();
                //dd($data);die;
                $dataForInsert = array();
                $count = 0;
                foreach ($data['ch1'] as $key => $value) {
                   if (!empty($value['module_id'])) {
                     $dataForInsert[$count]['user_id'] = $value['user_id'];
                     $dataForInsert[$count]['module_id'] = $value['module_id'];
                     ++$count;
                   }
                }

               // pr($data);die;
               // DB::table('privilages')->insert($data['ch1']);
                $test->insert($dataForInsert);
                Session::flash('success','Data has been saved successfully!');
            }
            $module=new Module;
            $dataArr=$module
                            ->all()
                            ->toArray();
            // pr($dataArr);die;  
            return view('services.showmodule', compact('roleId', 'dataArr','id'));
        }


}
