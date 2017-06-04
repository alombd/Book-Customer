

@section('content')
@include('message._message')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
            <div class="panel-heading"><h2>User Profile</h2></div>

             <div class="panel-body">
             <div class="table-responsive">
                <table id="datatable-buttons" class="table table-striped table-bordered">
                
             <colgroup>
              <col width="25%">
              <col width="40%">
              <col width="35%">
             </colgroup>

               <tr>
                <th class="align-right">First Name</th>
                <td class="align-right">{{Auth::user()->first_name}}</td>
                <td rowspan="7">
                    <center><h2>Profile Picture</h2></center>
                    <img src="{{URL::asset('public/img/profile_picture')}}/{{Auth::user()->profile_pic}}" width="100%"></td>
               </tr>
               </thead>
                <tr> 
                    <th class="align-right">User Name </th>
                    <td class="align-right">{{Auth::user()->user_name}}</td>
                   </tr>
               <tr> 
                    <th class="align-right">last Name</th>
                    <td class="align-right">{{Auth::user()->last_name}}</td>
               </tr>
               <tr> 
                    <th class="align-right">Email Address</th>
                    <td class="align-right">{{Auth::user()->email}}</td>
               </tr>
               <tr> 
                    <th class="align-right">Phone</th>
                    <td class="align-right">{{Auth::user()->phone_number}}</td>
               </tr>
               <tr> 
                    <th class="align-right">Present Address</th>
                    <td class="align-right">{{Auth::user()->present_address}}</td>
               </tr>
               <tr> 
                    <th class="align-right">Permanent Address</th>
                    <td class="align-right">{{Auth::user()->permanent_address}}</td>
               </tr>
               <tr> 
                    <th class="align-right">Date of Birth</th>
                    <td class="align-right">{{Auth::user()->dob}}</td>
               </tr>
               <tr> 
                <td class="text-center">
                <a href="{{url('editprofile/update/'.Auth::user()->id)}}" class="btn btn-success">Edit</a>
                </td>
               </tr>
        		
               <!-- @IF(!empty($dataArr))
                <tr>
                 <td class="text-center">{{$dataArr['firstname']}}</td>
                 <td class="text-center">{{$dataArr['lastname']}}</td>
                 <td class="text-center">{{$dataArr['email']}}</td>
                 <td class="text-center">{{$dataArr['phone']}}</td>
                 <td class="text-center">
                 <a href="{{url('users/update'.$dataArr['id'])}}" class="btn btn-success">Edit</a>
                 </td>
                </tr>
               @ELSE
               <tr> <th class="text-center" colspan="3">No Information Found</th></tr>
               
               @ENDIF -->
              </table>
        </div>
    </div>
   </div>
  </div>
 </div>    
</div>

@endsection

@IF(!empty(Auth::user()) && Auth::user()->role_id == 1)
    <?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
@ELSE
    <?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
@ENDIF
