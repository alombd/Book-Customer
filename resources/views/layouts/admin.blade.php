<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/bootstrap/css/bootstrap.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/font-awesome/css/font-awesome.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/nprogress.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/green.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/nprogress.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/bootstrap-progressbar-3.3.4.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/jqvmap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/select2.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/jquery-ui.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/custom.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/common.css') }}">

		
		<title></title>

		<script type="text/javascript" src="{{ URL::asset('public/js/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('public/js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('public/js/nprogress.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('public/js/jquery-ui.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('public/js/select2.full.js') }}"></script>

	</head>

	<body class="nav-md">
	    <div class="container body">
	    	<div class="main_container">
		        <!-- Left Menu -->
		        @include('includes/leftbar')
		        <!--  End of Left Menu -->
		        <!-- top navigation -->
		        @include('includes/topbar')
		        <!-- /top navigation -->

		        <!-- page content -->
		        @include('includes/main_content')
		        
		        <!-- /page content -->

		        <!-- footer content -->
		        @include('includes/footer')
		        <!-- /footer content -->
	    	</div>
	    </div>
	    <script type="text/javascript" src="{{ URL::asset('public/js/custom.js') }}"></script>
	</body>


</html>