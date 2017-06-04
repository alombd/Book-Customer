

@section('content')
@include('message._message')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading">Module List</div>

                <div class="panel-body">
                    <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                    {!!
                    Form::open([
                    'method'=>'post',
                    'action'=>['ServicesController@assignprivilage', $id],
                    'class'=>'form-horizontal form-label-left',
                    ])
                    !!}
                  
                        <table class="table table-borderd">
                            <colgroup>
                                <col width="60%">
                                <col width="40%">
                            </colgroup>

                            <tr>
                                <th class="text-center">Module</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @IF(!empty($dataArr))
                                    @FOREACH($dataArr as $key=> $data)

                                    <td class="text-center">{{$data['controller_name']}}
                                    </td>

                                    <td class="text-center">
                                        <input type="checkbox" value="{{$data['id']}}" name="ch1[{{$key}}][module_id]">
                                    </td>
                                     <td class="text-center">
                                        <input type="hidden" value="{{$id}}" name="ch1[{{$key}}][user_id]">
                                    </td>
                            </tr>
                                @ENDFOREACH

                                @ELSE
                                @ENDIF
                                </tbody>
                                <tr>
                                    <td>
                                        <center><button class="btn btn-primary text-center">Save</button></center>
                                    </td>
                                </tr>
                        </table>
                    {!! Form::close(); !!}  
                    </div>
                </div>  
            </div>
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



@IF(!empty(Auth::user()) && Auth::user()->role_id == 1)
    <?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
@ELSE
    <?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
@ENDIF