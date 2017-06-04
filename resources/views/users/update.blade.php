
@section('content')
<div class="container">
 {!!
 Form::open([
 'method'=>'post',
 'action'=>['UsersController@updateData',$id],
 'class'=>'form-horizontal form-label-left',
 'enctype' => 'multipart/form-data'
 ])
 !!}
  {!! Form::token(); !!}
   <div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">User Name
       </label>
         
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!!
            Form::text('user_name', $dataForView['user_name'] ,[
              'class' => 'form-control',
              'label'=>false,
              'autocomplete'=>'off',
              'type'=>'text',
              'placeholder'=>'first name',
              'readonly' => 'true'
            ]);
          !!} 
        </div>
        <div class="error"><b>{{ $errors->first('user_name') }}</b></div>
 </div>
 <div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">First Name
       </label>
         
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!!
            Form::text('first_name', $dataForView['first_name'] ,[
              'class' => 'form-control',
              'label'=>false,
              'autocomplete'=>'off',
              'type'=>'text',
              'placeholder'=>'first name'
            ]);
          !!} 
        </div>
        <div class="error"><b>{{ $errors->first('first_name') }}</b></div>
 </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last_name">Last Name
          </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
         
          {!! 
            Form::text('last_name', $dataForView['last_name'] ,[
              'rows'=>5,
              'class' => 'form-control',
              'label'=>false,
              'autocomplete'=>'off',
              'placeholder'=>'last name'
            ]);
          !!}
        </div>
        <div class="error"><b>{{ $errors->first('last_name') }}</b></div>
    </div>

 <div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email Address
       </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
         
          {!! 
            Form::text('email', $dataForView['email'] ,[
              'rows'=>5,
              'class' => 'form-control',
              'label'=>false,
              'autocomplete'=>'off',
              'placeholder'=>'email',
              'readonly' => 'true'
            ]);
          !!}
        </div>
        <div class="error"><b>{{ $errors->first('email') }}</b></div>
 </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone_number">Phone number
          </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
         
          {!! 
            Form::text('phone_number', $dataForView['phone_number'] ,[
              'rows'=>5,
              'class' => 'form-control',
              'label'=>false,
              'autocomplete'=>'off',
              'placeholder'=>'phone number'
            ]);
          !!}
        </div>
        <div class="error"><b>{{ $errors->first('phone_number') }}</b></div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="present_address">Present Address
          </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
         
          {!! 
            Form::textarea('present_address', $dataForView['present_address'] ,[
              'rows'=>5,
              'class' => 'form-control',
              'label'=>false,
              'autocomplete'=>'off',
              'placeholder'=>'Present Address'
            ]);
          !!}
        </div>
        <div class="error"><b>{{ $errors->first('present_address') }}</b></div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="permanent_address">Permanent Address
          </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
         
          {!! 
            Form::textarea('permanent_address', $dataForView['permanent_address'] ,[
              'rows'=>5,
              'class' => 'form-control',
              'label'=>false,
              'autocomplete'=>'off',
              'placeholder'=>'permanent address'
            ]);
          !!}
        </div>
        <div class="error"><b>{{ $errors->first('permanent_address') }}</b></div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dob">Date of Birth
          </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
         
          {!! 
            Form::text('dob', $dataForView['dob'] ,[
              'rows'=>5,
              'class' => 'form-control',
              'label'=>false,
              'autocomplete'=>'off',
              'placeholder'=>'yyyy-mm-dd',
              'id'=>'datepicker'
            ]);
          !!}
        </div>
        <div class="error"><b>{{ $errors->first('dob') }}</b></div>
    </div>

        <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="profile_pic">Profile Picture
          </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
         
          {!! 
            Form::file('profile_pic', '' ,[
              'rows'=>5,
              'class' => 'form-control',
              'label'=>false,
              'autocomplete'=>'off',
            ]);
          !!}
        </div>
        <div class="error"><b>{{ $errors->first('profile_pic') }}</b></div>
    </div>

 <div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12">&nbsp;</label>
        <div class="col-md-6 col-sm-6 col-xs-12">         
          {!! 
            Form::submit('Update',[
              'class' => 'btn btn-info',
              'escape'=>'false'
            ]);
          !!}
        </div>
 </div>
 {!! Form::close(); !!}

</div>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
        dateFormat: 'yy-mm-dd'
    });
  } );
  </script>
@endsection


@IF(!empty(Auth::user()) && Auth::user()->role_id == 1)
    <?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
@ELSE
    <?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
@ENDIF