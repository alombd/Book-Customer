

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Services</div>
                 <div class="panel-body">
         			{!!
                     Form::open([
                     'method'=>'post',
                     'action'=>['ContactusController@index'],
                     'class'=>'form-horizontal form-label-left',
                      'enctype'=>'multipart/form-data'
                     ])
                     !!}
                      {!! Form::token(); !!}
                     <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                           </label>
                             
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              {!!
                                Form::text('name',"" ,[
                                  'class' => 'form-control',
                                  'label'=>false,
                                  'autocomplete'=>'off',
                                  'type'=>'text',
                                  'placeholder'=>'Name',
                                  'required' =>''
                                ]);
                              !!} 
                            </div>
                            <div class="error"><b>{{ $errors->first('name') }}</b></div>
                     </div>

                     <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Email Address <span class="required">*</span>
                           </label>
                             
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              {!!
                                Form::email('email',"" ,[
                                  'class' => 'form-control',
                                  'label'=>false,
                                  'autocomplete'=>'off',
                                  'type'=>'email',
                                  'placeholder'=>'Email Address',
                                  'required' =>''
                                ]);
                              !!} 
                            </div>
                            <div class="error"><b>{{ $errors->first('email') }}</b></div>
                     </div>


                     <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Subject <span class="required">*</span>
                           </label>
                             
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              {!!
                                Form::text('subject',"" ,[
                                  'class' => 'form-control',
                                  'label'=>false,
                                  'autocomplete'=>'off',
                                  'type'=>'text',
                                  'placeholder'=>'Subject',
                                  'required' =>''
                                ]);
                              !!} 
                            </div>
                            <div class="error"><b>{{ $errors->first('subject') }}</b></div>
                     </div>

                     <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description"> Body <span class="required">*</span>
                           </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                             
                              {!! 
                                Form::textarea('body',"" ,[
                                  'rows'=>5,
                                  'class' => 'form-control',
                                  'label'=>false,
                                  'autocomplete'=>'off',
                                  'placeholder'=>'Body',
                                  'required' =>''
                                ]);
                              !!}
                            </div>
                            <div class="error"><b>{{ $errors->first('body') }}</b></div>
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
                            </div>
                     </div>
                     {!! Form::close(); !!}
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