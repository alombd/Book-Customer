
@section('content')
@include('message._message')
<div class="container">
    <div class="col-md-12 col-md-offset-0">
         <div class="panel-heading"><h2>Module List</h2></div>  
     <div class="table-responsive">
      <table id="datatable-buttons" class="table table-striped table-bordered">
        <thead>
           <tr>
                <th class="text-center">Module Number</th>
                <th class="text-center">Module</th>
                <th class="text-center">
                    <a href="{{url('/modulelist/add')}}" class="btn btn-primary">
                        <i class="wicon-plus"></i>ADD Module
                    </a>
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
                   <td class="">{{$data['controller_name']}}
                 </td>
                 <td></td>
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

