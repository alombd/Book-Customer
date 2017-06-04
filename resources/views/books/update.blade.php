
@section('content')
<div class="container">
 {!!
 Form::open([
 'method'=>'post',
 'action'=>['BooksController@updateData',$id],
 'class'=>'form-horizontal form-label-left',
 'enctype' => 'multipart/form-data'
 ])
 !!}
  {!! Form::token(); !!}
   <div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="book_name">Book Name
       </label>
         
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!!
            Form::text('book_name', $dataForView['book_name'] ,[
              'class' => 'form-control',
              'label'=>false,
              'autocomplete'=>'off',
              'type'=>'text',
              'placeholder'=>'Book Name'
            ]);
          !!} 
        </div>
        <div class="error"><b>{{ $errors->first('book_name') }}</b></div>
 </div>
 <div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="category">Category
       </label>
         
        <div class="col-md-6 col-sm-6 col-xs-12">
          {!!
            Form::text('category', $dataForView['category'] ,[
              'class' => 'form-control',
              'label'=>false,
              'autocomplete'=>'off',
              'type'=>'text',
              'placeholder'=>'Category'
            ]);
          !!} 
        </div>
        <div class="error"><b>{{ $errors->first('category') }}</b></div>
 </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="summery">Last Name
          </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
         
          {!! 
            Form::text('summery', $dataForView['summery'] ,[
              'rows'=>5,
              'class' => 'form-control',
              'label'=>false,
              'autocomplete'=>'off',
              'placeholder'=>'last name'
            ]);
          !!}
        </div>
        <div class="error"><b>{{ $errors->first('summery') }}</b></div>
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