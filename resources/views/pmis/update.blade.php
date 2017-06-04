
@section('content')
<script type="text/javascript" src="{{ URL::asset('public/js/ckeditor/ckeditor.js') }}"></script>
<div class="container">
 {!!
 Form::open([
 'method'=>'post',
 'action'=>['PmisController@updateData',$id],
 'class'=>'form-horizontal form-label-left'
 ])
 !!}
  {!! Form::token(); !!}
 <div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="project_name">Project Name <span class="required">*</span>
       </label>
         
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!!
            Form::text('project_name', $dataForView['project_name'] ,[
              'class' => 'form-control',
              'label'=>false,
              'autocomplete'=>'off',
              'type'=>'text',
              'placeholder'=>'Name'
            ]);
          !!} 
        </div>
        <div class="error"><b>{{ $errors->first('project_name') }}</b></div>
 </div>
 <div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="problem_summery">Proejct Problem Summery <span class="required">*</span>
       </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
         
          {!! 
            Form::textarea('problem_summery',$dataForView['problem_summery'] ,[
              'rows'=>5,
              'class' => 'form-control',
              'label'=>false,
              'autocomplete'=>'off',
              'placeholder'=>'Proejct Problem Summery',
              'id' => 'problem-summery'
            ]);
          !!}
        </div>
        <div class="error"><b>{{ $errors->first('problem_summery') }}</b></div>
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
<script type="text/javascript">
  CKEDITOR.replace( 'problem-summery', {
      language: 'en',
      uiColor: '#9AB8F3'
  });
</script>
@endsection

@IF(!empty(Auth::user()) && Auth::user()->role_id == 1)
    <?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
@ELSE
    <?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
@ENDIF