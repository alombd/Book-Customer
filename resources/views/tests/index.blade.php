
@section('content')
@include('message._message')
<div class="container">
 <div class="table-responsive">
  <table class="table table-borderd">
   <colgroup>
   <col width="10%">
    <col width="25%">
    <col width="40%">
    <col width="25%">
   </colgroup>
   <tr>
        <th class="text-center">SI</th>
        <th class="text-center">Name</th>
        <th class="text-center">Description</th>
        <th class="text-center"><a href="{{url('crud/add')}}" class="btn btn-primary"> ADD </a></th>

   </tr>
   <?php $i=1;

    ?>
   @IF(!empty($dataArr))
    @FOREACH($dataArr as $data)
       <tr>
        <td class="text-center"><?= $i++; ?></td>
        <td class="text-center">{{$data['name']}}</td>
        <td class="text-center">{{$data['description']}}</td>
        <td class="text-center">
        <a href="{{url('crud/update/'.$data['id'])}}" class="btn btn-success">Edit</a>
        <a href="{{url('crud/delete/'.$data['id'])}}" class="btn btn-danger" onclick="myFunction()">Delete</a>
      </td>
     </tr>
     <script>
        function myFunction() {
            alert("Are your sure!");
        }
    </script>
    @ENDFOREACH
   @ELSE
   <tr> <th class="text-center" colspan="3">No Information Found</th></tr>
   
   @ENDIF

  </table>
 
 </div>
 <?php echo $dataArr->links(); ?>
</div>
@endsection

@IF(!empty(Auth::user()) && Auth::user()->role_id == 1)
    <?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
@ELSE
    <?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
@ENDIF