
@section('content')
@include('message._message')
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
        <div class="panel-heading"><h2>Cha/Coffe Offer Credit & Debtor List</h2></div>  
     <div class="table-responsive">
      <table id="datatable-buttons" class="table table-striped table-bordered">
           <colgroup>
                <col width="5%">
                <col width="25%">
                <col width="20%">
                <col width="25%">
                <col width="25%">
           </colgroup>
           <tr>
                <th class="text-center">Serial Number</th>
                <th class="text-center"> Number of Cha/Coffe</th>
                <th class="text-center"> Credit Creditor Name </th>
                <th class="text-center"> Debtor Creditor Name </th>
                <th class="text-center"> Cha/Coffe Offer Date </th>
                @IF(!empty(Auth::user()) && Auth::user()->role_id == 1)
                    <th class="text-center"><a href="{{url('chamanagement/add')}}" class="btn btn-primary"> ADD Cha </a></th>
                @ELSE
                <th class="text-center"> Action </th>
                @ENDIF
           </tr>
           <?php $i=1;

            ?>
           @IF(!empty($dataArr))
            @FOREACH($dataArr as $data)
            <?php
                $chamanagementId = $data['id'];
            ?>
               <tr>
                    <td class="text-center"><?= $i++; ?></td>
                    <td class="text-center">{{$data['cha_number']}}</td>
                    <td class="text-center">{{$data['credit_name']}}</td>
                    <td class="text-center">{{$data['debtor_name']}}</td>
                    <td class="text-center">{{$data['dob']}}</td>
                    <td class="text-center">
                    @IF(!empty(Auth::user()) && Auth::user()->role_id == 1)

                      <a href="{{url('chamanagement/update/'.$data['id'])}}" class="btn btn-success">Edit</a>
                    
                         <a href="{{url('chamanagement/delete/'.$data['id'])}}" class="btn btn-danger" onclick="myFunction()">Delete</a>

                         <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $chamanagementId;?>">View Details   </button>
                    @ELSE 
                     <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $chamanagementId;?>">View Details   </button>
                    @ENDIF   
                       
                        <!-- Modal Content -->
                        <div class="modal fade" id="myModal<?php echo $chamanagementId;?>" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Books Details</h4>
                                    </div>

                                    <div class="modal-body">
                                            
                                        <p><label> Number of Cha/Coffe</label> - {{$data['cha_number']}} <br>
                                        <label>Credit Creditor Name </label> - {{$data['credit_name']}}<br>
                                         <label> Debtor Creditor Name</label> - {{$data['debtor_name']}}<br>
                                         <label> Debtor Creditor Name</label> - {{$data['created_at']}}<br>
                                         
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    
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
     </div>
     <?php echo $dataArr->links(); ?>
    </div>
    
</div>   

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


@IF(!empty(Auth::user()) && Auth::user()->role_id == 1)
    <?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
@ELSE
    <?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
@ENDIF