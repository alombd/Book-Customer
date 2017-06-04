

@section('content')
<div class="container">
     <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
        <div class="panel-heading"><h4>Ak Cup Cha Management Add</h4> </div><br>
       {!!
       Form::open([
       'method'=>'post',
       'action'=>['ChamanagementController@store'],
       'class'=>'form-horizontal form-label-left',
        'enctype'=>'multipart/form-data'
       ])
       !!}
        {!! Form::token(); !!}
        
       <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cha_number">Number Of Cha/Coffee <span class="required">*</span>
             </label>
               
              <div class="col-md-6 col-sm-6 col-xs-12">
                {!!
                  Form::number('cha_number',"" ,[
                    'class' => 'form-control',
                    'label'=>false,
                    'autocomplete'=>'off',
                    'type'=>'text',
                    'placeholder'=>'Tell me how many cups of tea  '
                  ]);
                !!} 
              </div>
              <div class="error"><b>{{ $errors->first('cha_number') }}</b></div>
       </div>

       <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="credit_name">Credit Creditor Name <span class="required">*</span>
             </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
               
                {!! 
                  Form::text('credit_name',"" ,[
                    'rows'=>5,
                    'class' => 'form-control',
                    'label'=>false,
                    'autocomplete'=>'off',
                    'placeholder'=>'Credit Creditor Name '
                  ]);
                !!}
              </div>
              <div class="error"><b>{{ $errors->first('credit_name') }}</b></div>
       </div>

         <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="debtor_name">Debtor Creditor Name <span class="required">*</span>
             </label>
               
              <div class="col-md-6 col-sm-6 col-xs-12">
                {!!
                  Form::text('debtor_name',"" ,[
                    'class' => 'form-control',
                    'label'=>false,
                    'autocomplete'=>'off',
                    'type'=>'text',
                    'placeholder'=>'Debtor Creditor Name'
                  ]);
                !!} 
              </div>
              <div class="error"><b>{{ $errors->first('debtor_name') }}</b></div>
       </div>
         <!-- <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dob">Date of Birth
          </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
         
          {!! 
            Form::text('dob',"",[
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
             </div>  -->
       <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">&nbsp;</label>
              <div class="col-md-6 col-sm-6 col-xs-12">         
                {!! 
                  Form::submit('Submit',[
                    'class' => 'btn btn-primary',
                    'escape'=>'false'
                  ]);
                !!}
              </div>
       </div>
       {!! Form::close(); !!}
    </div>
    </div>
</div>
@endsection

  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
        dateFormat: 'yy-mm-dd'
    });
  } );
  </script>

@IF(!empty(Auth::user()) && Auth::user()->role_id == 1)
    <?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
@ELSE
    <?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
@ENDIF