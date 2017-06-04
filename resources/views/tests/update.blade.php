

@section('content')
<div class="container">
 {!!
 Form::open([
 'method'=>'post',
 'action'=>['TestsController@updateData',$id],
 'class'=>'form-horizontal form-label-left'
 ])
 !!}
  {!! Form::token(); !!}
 <div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
       </label>
         
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!!
            Form::text('name', $dataForView['name'] ,[
              'class' => 'form-control',
              'label'=>false,
              'autocomplete'=>'off',
              'type'=>'text',
              'placeholder'=>'Name'
            ]);
          !!} 
        </div>
        <div class="error"><b>{{ $errors->first('name') }}</b></div>
 </div>
 <div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description <span class="required">*</span>
       </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
         
          {!! 
            Form::textarea('description', $dataForView['description'] ,[
              'rows'=>5,
              'class' => 'form-control',
              'label'=>false,
              'autocomplete'=>'off',
              'placeholder'=>'Description'
            ]);
          !!}
        </div>
        <div class="error"><b>{{ $errors->first('description') }}</b></div>
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