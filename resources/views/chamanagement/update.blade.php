
@section('content')
<div class="container">
 {!!
 Form::open([
 'method'=>'post',
 'action'=>['ChamanagementController@updateData',$id],
 'class'=>'form-horizontal form-label-left'
 ])
 !!}
  {!! Form::token(); !!}
 <div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Number Of Cha/Coffee <span class="required">*</span>
       </label>
         
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!!
            Form::number('cha_number', $dataForView['cha_number'] ,[
              'class' => 'form-control',
              'label'=>false,
              'autocomplete'=>'off',
              'type'=>'text',
             
            ]);
          !!} 
        </div>
        <div class="error"><b>{{ $errors->first('cha_number') }}</b></div>
 </div>
  <div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Credit Creditor Name<span class="required">*</span>
       </label>
         
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!!
            Form::text('credit_name', $dataForView['credit_name'] ,[
              'class' => 'form-control',
              'label'=>false,
              'autocomplete'=>'off',
              'type'=>'text',
              'placeholder'=>'Phone Number'
            ]);
          !!} 
        </div>
        <div class="error"><b>{{ $errors->first('credit_name') }}</b></div>
 </div>
  <div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Phone Number<span class="required">*</span>
       </label>
         
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!!
            Form::text('debtor_name', $dataForView['debtor_name'] ,[
              'class' => 'form-control',
              'label'=>false,
              'autocomplete'=>'off',
              'type'=>'text',
              'placeholder'=>'E-mail'
            ]);
          !!} 
        </div>
        <div class="error"><b>{{ $errors->first('debtor_name') }}</b></div>
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
@endsection
@IF(!empty(Auth::user()) && Auth::user()->role_id == 1)
    <?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
@ELSE
    <?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
@ENDIF