
@section('content')
@include('message._message')
<div class="container">
    <div class="col-md-12 ">
        <div class="panel panel-default">
        <div class="panel-heading"><h2>Cha/Coffe Offer Credit & Debtor List</h2></div>  
     <div class="table-responsive">
      <table id="datatable-buttons" class="table table-striped table-bordered">
        <thead>
           			<tr>
				        <th class="text-center">Pmis SI</th>
				        <th class="text-center">Project Name</th>
				        <th class="text-center">Problem Summery</th>
				        <th class="text-center"><a href="{{url('pmis/add')}}" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"></span>ADD </a>

				        </th>

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
					      <div class="pmis">
						      <h6><td class="">{{$data['project_name']}}</td></h6>
						      <td class="" ><p>{!! $data['problem_summery'] !!}</p></td>
					  	  </div>
					      <td class="text-center">
					      	<a href="{{url('pmis/update/'.$data['id'])}}" class="btn btn-success"><i class="fa fa-pencil"> Edit</i></a>

							<a href="{{url('pmis/delete/'.$data['id'])}}" class="btn btn-danger" onclick="myFunction()"><span class="glyphicon glyphicon-trash"></span>Delete</a>
							
						       <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $bookId;?>">View Details</button>

						        

						      
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
													
			                                    <p><label>Project Name</label> - {{$data['project_name']}} <br>
			                                    <label>Project Summery</label> - {!!$data['problem_summery'] !!}<br>
			                                     
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
            @ENDIF
           </tbody>
      </table>
     </div>
     </div>
     <?php //echo $dataArr->links(); ?>
    </div>
    
</div>   
<script>
    function myFunction() {
        alert("Are your sure!");
    }
</script>
   <!-- Datatables -->
    <link href="{{ asset('public/js/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/js/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
}
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


@IF(!empty(Auth::user()) && Auth::user()->role_id == 1)
    <?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
@ELSE
    <?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
@ENDIF