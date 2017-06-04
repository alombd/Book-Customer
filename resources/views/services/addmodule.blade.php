
@section('content')
 <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Module</div><br/>
                 {!!
                 Form::open([
                 'method'=>'post',
                 'action'=>['ServicesController@store'],
                 'class'=>'form-horizontal form-label-left',
                 ])
                 !!}
                  {!! Form::token(); !!}
                 <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="controller_name">Controller Name <span class="required">*</span>
                       </label>
                         
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!!
                            Form::text('controller_name',"" ,[
                              'class' => 'form-control',
                              'label'=>false,
                              'autocomplete'=>'off',
                              'type'=>'text',
                              'placeholder'=>'Controller Name'
                            ]);
                          !!} 
                        </div>
                        <div class="error"><b>{{ $errors->first('controller_name') }}</b></div>
                 </div>

                 <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">&nbsp;</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">         
                          {!! 
                            Form::submit('Submit',[
                              'class' => 'btn btn-primary',
                              'escape'=>'false'
                            ]);
                          !!}
                          <a class="btn btn-info" href="{{URL('/modulelist')}}"> Back </a>
                        </div>
                 </div>
                 {!! Form::close(); !!}
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