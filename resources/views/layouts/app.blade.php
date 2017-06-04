<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/font-awesome/css/font-awesome.min.css') }}">
        
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{URL::asset('public/css/app.css')}}" rel="stylesheet">
       <script type="text/javascript" src="{{ URL::asset('public/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('public/js/bootstrap.min.js') }}"></script>
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse">
          <div class="profile clearfix">

          </div>
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      @IF (Auth::check())
       <img class="img-circle" src="{{URL::asset('public/img/profile_picture')}}/{{Auth::user()->profile_pic}}" width="10%">
       <a class="navbar-brand" href="#">Book Management</a>
       @ELSE
      <a class="navbar-brand" href="#">Book Management</a>
      @ENDIF
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
            <li><a href="{{ URL('/Home') }}"> Home </a></li>
             <li><a href="{{ URL('/Aboutus') }}"> About Us </a></li>
             <li><a href="{{ URL('/Services') }}"> Services </a></li>
              <li> <a href = "{{URL('/book')}}"> <i class="fa fa-bar-chart-o"></i> Books </a>

            @else
             <li><a href="{{ URL('/Home') }}"> Home </a></li>
             <li><a href="{{ URL('/Aboutus') }}"> About Us </a></li>
             <li><a href="{{ URL('/Services') }}"> Services </a></li>
             <li><a href="{{ URL('/Contactus') }}"> Contact US </a></li>

            @endif
            
          

            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Action <span class="caret"></span></a>
              <ul class="dropdown-menu">
                @if(Auth::check())

                <li><a href="{{ URL('/editprofile')}}"> Edit Profile </a></li>
                <li><a href="{{ URL('/customer')}}"> My Customer </a></li>
                <li><a href="{{ URL('/chamanagement')}}"> Cha Management System </a></li>
                <li> <a href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">  <i class="fa fa-sign-out pull-right"></i> Logout</a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
                @else 
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
                @endif
                
              </ul>
            </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
