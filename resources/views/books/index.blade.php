
@section('content')
@include('message._message')
<div class="container">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading"><b><h3>Books List</h3></b></div>  
		 <div class="table-responsive">
		  <table id="datatable-buttons" class="table table-striped table-bordered">
		  	<thead>
				    <tr>    
				    	<th class="text-center">Book Number</th>
				        <th class="text-center">Book Name </th>
				        <th class="text-center">Category</th>
				        <th class="text-center">Summery</th>
				        <th class="text-center">Dowanlod</th>
				        @IF(!empty(Auth::user()) && Auth::user()->role_id == 1)
				        <th class="text-center"><a href="{{url('book/add')}}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>ADD </a>
				        </th>
						@ELSE  
						<th class="text-center"> Action </th>
						@ENDIF
				   </tr>
			</thead>
			<tbody>
			   <?php $i=1;

			    ?>
				   @IF(!empty($dataArr))
				    @FOREACH($dataArr as $data)
			    <?php
			    	$bookId = $data['id'];
			    ?>
			     <tr>
				      <td class="text-center"><?= $i++; ?></td>
				      <td class="text-center">{{$data['book_name']}}</td>
				      <td class="text-center">{{$data['category']}}</td>
				      <td class="text-center">{{$data['summery']}}</td>
				      <td class="text-center">
		                    <?php if (!empty($data['profile_pic'])){ 
		                        ?>
		                    <a target="_blank" href="<?php echo 'public/img/book_file/'.$data['profile_pic']; ?>">Download File</a>
		                   <?php } else {
		                    echo 'No Preview <br> Available';
		                   }?>
	               	  </td>
				      <td class="text-center">
				      	@IF(!empty(Auth::user()) && Auth::user()->role_id == 1)

						<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $bookId;?>">View Details</button>

				      	<a href="{{url('book/update/'.$data['id'])}}" class="btn btn-success"><i class="fa fa-pencil"> Edit</i></a>

					      <a href="{{url('book/delete/'.$data['id'])}}" class="btn btn-danger" onclick="myFunction()"><span class="glyphicon glyphicon-trash">Delete</a>

					      @ELSE

					       <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $bookId;?>">View Details</button>
					       @ENDIF
							<!-- Modal Content -->
		                    <div class="modal fade" id="myModal<?php echo $bookId;?>" role="dialog">
		                        <div class="modal-dialog">

		                          <!-- Modal content-->
		                            <div class="modal-content">
		                                <div class="modal-header">
		                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
		                                    <h4 class="modal-title">Books Details</h4>
		                                </div>

		                                <div class="modal-body">
												
		                                    <p><label>Book Name</label> - {{$data['book_name']}} <br>
		                                    <label>Books Category</label> - {{$data['category']}}<br>
		                                   <label>Books summrey</label> - {{$data['summery']}}</p>
							               
		                                   <?php  ?>
		                                   <label>Book Picture</label>  <?php echo 'public/img/book_file/'.$data['profile_pic']; ?>
		                                  
		                                </div>

		                                <div class="modal-footer">
		                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                                </div>
		                            </div>
		                          
		                        </div>
		                    </div>
					      
				      </td>
			     </tr>
			    @ENDFOREACH
			   <tbody>
			   
			   
			   @ENDIF

		  </table>
		 </div>
			    <?php //echo $dataArr->links(); ?>
		</div>
	</div>
</div>

</script>
   <!-- Datatables -->
    <link href="{{ asset('public/js/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/js/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">

    <!-- Datatables -->
    <script type="text/javascript" src="{{ asset('public/js/datatables.net/js/jquery.dataTables.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public/js/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public/js/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public/js/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public/js/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/datatables.net-buttons/js/buttons.print.min.js') }}"></script>

    <!-- Datatables -->
    <script type="text/javascript">
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
@endsection
<script>
        function myFunction() {
            alert("Are your sure!");
        }
 </script>

@IF(!empty(Auth::user()) && Auth::user()->role_id == 1)
    <?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
@ELSE
    <?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
@ENDIF