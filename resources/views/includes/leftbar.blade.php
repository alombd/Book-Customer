<style type="text/css">
.roundrect {
border-radius: 350px;
height: 100px;
margin-left: 5px;
width: 
}
</style>
<div class="col-md-3 left_col">

  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>Admin Panel</span></a>
    </div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
         @IF(Auth::check())

           <img class="img-circle" src="{{URL::asset('public/img/profile_picture')}}/{{Auth::user()->profile_pic}}" width="100%">
        @ELSE
            <span>Welcome Guest</span>
         @ENDIF
        
      </div>
      <div class="profile_info">        
        @IF(Auth::check())

            <span>Welcome,</span>
            <h2>{{ Auth::user()->user_name }}</h2>
        @ELSE
            <span>Welcome Guest</span>
         @ENDIF

      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li><a href="{{URL('/')}}"><i class="fa fa-home"></i> Home </a>
          </li>
          <li><a><i class="fa fa-edit"></i> Services <span class="fa fa-chevron-down"></span></a>
            
            <ul class="nav child_menu">
                @if (Auth::check())
                    <li><a href="{{URL('/crud')}}">Crud operation</a></li>
                     <li><a href="{{URL('/usermanagement')}}"> User Management </a></li>
                     <li><a href="{{URL('/modulelist')}}"> Module List </a></li>
                @else
                    <li><a href="#">Login</a></li>
                @endif
            </ul>
          </li>
          <li>
            <a href ="{{ URL('/Aboutus') }}"><i class="fa fa-table"></i> About Us </a>
          </li>
          
            @if (Auth::check())
                <li> <a href = "{{URL('/book')}}"> <i class="fa fa-bar-chart-o"></i>Books </a>
               
            @else 
                <li><a><i class="fa fa-bar-chart-o"></i> Contact Us</a>
            @endif

          </li>
          <li><a><i class="fa fa-clone"></i>Users Area <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                @if (Auth::check())
              <li><a href="{{ URL('/editprofile')}}"> Edit Profile </a></li>
              <li><a href="{{ URL('/customer')}}"> My Customer </a></li>
              
              @else
               <li><a href=""> Login </a></li>
              <li><a href=""> Registration </a></li>
              @endif
            </ul>
          </li>
        </ul>
      </div>
      <div class="menu_section">
        <h3>Live On</h3>
        <ul class="nav side-menu">
          <li><a><i class="fa fa-bug"></i> Management System <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
               <li><a href="{{ URL('/pmis')}}"> PMIS Data Entry </a></li>
              <li><a href="{{ URL('/javaScript')}}"> Java Script </a></li>
              <li><a href="{{ URL('/chamanagement')}}"> Ak Cup Cha Management </a></li>
              <li><a href="contacts.html">Contacts</a></li>
              <li><a href="profile.html">Profile</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="page_403.html">403 Error</a></li>
              <li><a href="page_404.html">404 Error</a></li>
              <li><a href="page_500.html">500 Error</a></li>
              <li><a href="plain_page.html">Plain Page</a></li>
              <li><a href="login.html">Login Page</a></li>
              <li><a href="pricing_tables.html">Pricing Tables</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="#level1_1">Level One</a>
                <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li class="sub_menu"><a href="level2.html">Level Two</a>
                    </li>
                    <li><a href="#level2_1">Level Two</a>
                    </li>
                    <li><a href="#level2_2">Level Two</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#level1_2">Level One</a>
                </li>
            </ul>
          </li>                  
          <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
        </ul>
      </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>