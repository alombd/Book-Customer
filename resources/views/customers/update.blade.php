

@section('content')
<div class="container">
 {!!
 Form::open([
 'method'=>'post',
 'action'=>['CustomerController@updateData',$id],
 'class'=>'form-horizontal form-label-left'
 ])
 !!}
  {!! Form::token(); !!}
 <div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Customer Name <span class="required">*</span>
       </label>
         
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!!
            Form::text('customer_name', $dataForView['customer_name'] ,[
              'class' => 'form-control',
              'label'=>false,
              'autocomplete'=>'off',
              'type'=>'text',
              'placeholder'=>'Customer Name'
            ]);
          !!} 
        </div>
        <div class="error"><b>{{ $errors->first('customer_name') }}</b></div>
 </div>
  <div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Phone Number<span class="required">*</span>
       </label>
         
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!!
            Form::text('phone', $dataForView['phone'] ,[
              'class' => 'form-control',
              'label'=>false,
              'autocomplete'=>'off',
              'type'=>'text',
              'placeholder'=>'Phone Number'
            ]);
          !!} 
        </div>
        <div class="error"><b>{{ $errors->first('phone') }}</b></div>
 </div>
  <div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Phone Number<span class="required">*</span>
       </label>
         
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!!
            Form::text('email', $dataForView['email'] ,[
              'class' => 'form-control',
              'label'=>false,
              'autocomplete'=>'off',
              'type'=>'text',
              'placeholder'=>'E-mail'
            ]);
          !!} 
        </div>
        <div class="error"><b>{{ $errors->first('email') }}</b></div>
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