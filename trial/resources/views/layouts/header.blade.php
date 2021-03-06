<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
        <!--external css-->
            <link href="{{asset('assets/font-awesome/css/font-awesome.css" rel="stylesheet')}}" />
            <link rel="stylesheet" type="text/css" href="{{asset('assets/css/zabuto_calendar.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('assets/js/gritter/css/jquery.gritter.css')}}" />
            <link rel="stylesheet" type="text/css" href="{{asset('assets/lineicons/style.css')}}">    
    
        <!-- Custom styles -->
            <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
            <link href="{{asset('assets/css/style-responsive.css')}}" rel="stylesheet">
            <link href="{{asset('assets/css/custom-index.css')}}" rel="stylesheet">

        <!-- Scripts-->
                <script src="{{asset('assets/js/chart-master/Chart.js')}}"></script>

                <title>{{config('app.name', 'Church')}}</title>
 
    </head>
    <body>
                <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <!--header start-->
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips div-white" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
          <!--logo start-->
          <a href="index.html" class="logo">CHURCH CMS</a>
          <!--logo end-->
          
          <div class="top-menu">
              <ul class="nav pull-right top-menu">
                  <li><a class="logout" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    
                    Logout</a></li>
              </ul>
          </div>
      </header>
        @yield('content')
        
    </body>
    
</html>
