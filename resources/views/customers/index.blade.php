

@section('content')
@include('message._message')
<div class="container">
	<div class="col-md-12 col-md-offset-0">
		<div class="panel-heading"><h2>Customers List</h2></div>  
	 <div class="table-responsive">
	  <table id="datatable-buttons" class="table table-striped table-bordered">
	  	<thead>
		   <!-- <colgroup>
		    <col width="10%">
		    <col width="20%">
		    <col width="20%">
		    <col width="20%">
		    <col width="30%">
		   </colgroup> -->
		   <tr>
		        <th class="text-center">Customer Number</th>
		        <th class="text-center">Customer Name </th>
		        <th class="text-center">Customer Phone</th>
		        <th class="text-center">Customer Email</th>
		        <th class="text-center"><a href="{{url('customer/add')}}" class="btn btn-primary"><span class="glyphicon glyphicon-plus">ADD </a>
		        </th>

		   </tr>

		  </thead>
		  <tbody>
		   <?php $i=1;

		    ?>
		   @IF(!empty($dataArr))
		    @FOREACH($dataArr as $data)
		    <?php
		    	$customerId = $data['id'];
		    ?>
		     <tr>
			      <td class="text-center"><?= $i++; ?></td>
			      <td class="text-center">{{$data['customer_name']}}</td>
			      <td class="text-center">{{$data['phone']}}</td>
			      <td class="text-center">{{$data['email']}}</td>
			      <td class="text-center">
				       <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $customerId;?>">View Details</button>
						<!-- Modal Content -->
	                    <div class="modal fade" id="myModal<?php echo $customerId;?>" role="dialog">
	                        <div class="modal-dialog">

	                          <!-- Modal content-->
	                            <div class="modal-content">
	                                <div class="modal-header">
	                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
	                                    <h4 class="modal-title">Customers Profile</h4>
	                                </div>

	                                <div class="modal-body">
											
	                                    <p><label>Customer Name</label> - {{$data['customer_name']}} <br>
	                                    <label>Phone Number</label> - {{$data['phone']}}<br>
	                                     <label>Customer Email</label> - {{$data['email']}}</p>
	                                </div>

	                                <div class="modal-footer">
	                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                                </div>
	                            </div>
	                          
	                        </div>
	                    </div>
				      <a href="{{url('customer/update/'.$data['id'])}}" class="btn btn-success"><i class="fa fa-pencil"> Edit</i></a>
				      
				      <a href="{{url('customer/delete/'.$data['id'])}}" class="btn btn-danger" onclick="myFunction()"><span class="glyphicon glyphicon-trash">Delete</a>
			      </td>
		     </tr>
		     
		    @ENDFOREACH
		   @ENDIF
		</tbody> 
	  </table>
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
 <script>
		        function myFunction() {
		            alert("Are your sure!");
		        }
		    </script>
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

