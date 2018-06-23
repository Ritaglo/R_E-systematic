@extends('layouts.header')
{{-- @extends loads template from layouts>app --}}

@section('content')

<section id="container" >
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
        <!--header end-->
        
        <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
        <!--sidebar start-->
        <aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                
                      <p class="centered"><a href="profile.html"><img src="assets/img/administrator-male.png" class="img-circle" width="60"></a></p>
                      <h5 class="centered">Administrator</h5>
                      <div>	
                    <li class="mt">
                        <a class="active">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!-- Add -->
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-desktop"></i>
                            <span>Add </span>
                        </a>
                        <ul class="sub">
                            <li><a  href="#">Add Diocese</a></li>
                            <li><a  href="#">Add Users</a></li>
                            <li><a  href="#">Generate Reports</a></li>
                        </ul>
                    </li>
  
                    <!-- View -->
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class=" fa fa-bar-chart-o"></i>
                            <span>View</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="#">Priests</a></li>
                            <li><a  href="#">Bishops</a></li>
                            <li><a  href="#">List of Parishes</a></li>
                            <li><a  href="#">List of Diocese </a></li>
                        </ul>
                    </li>
  
                    
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-book"></i>
                            <span>Extra Pages</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="#">Blank Page</a></li>
                            <li><a  href="#">Login</a></li>
                            <li><a  href="lock_screen.html">Lock Screen</a></li>
                        </ul>
                    </li>
                    
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-cogs"></i>
                            <span>Settings</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="#">Calendar</a></li>
                            <li><a  href="#">Background </a></li>
                            
                        </ul>
                    </li>
  
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        
        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <!-- pages load faster --> 
      <script src="assets/js/jquery.js"></script>
      <script src="assets/js/jquery-1.8.3.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
      <script src="assets/js/jquery.scrollTo.min.js"></script>
      <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
      <script src="assets/js/jquery.sparkline.js"></script>
  
  
      <!--common script for all pages-->
      <script src="assets/js/common-scripts.js"></script>
      
      <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
      <script type="text/javascript" src="assets/js/gritter-conf.js"></script>
  
      <!--script for this page-->
      <script src="assets/js/sparkline-chart.js"></script>    
      <script src="assets/js/zabuto_calendar.js"></script>	
      
      <script type="text/javascript">
          $(document).ready(function () {
          var unique_id = $.gritter.add({
              // (string | mandatory) the heading of the notification
              title: 'Welcome to the Church MS!',
              // (string | mandatory) the text inside the notification
              text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. ',
              // (string | optional) the image to display on the left
              image: 'assets/img/administrator-male.png',
              // (bool | optional) if you want it to fade out on its own or just sit there
              sticky: true,
              // (int | optional) the time you want it to be alive for before fading out
              time: '',
              // (string | optional) the class name you want to apply to that specific message
              class_name: 'my-sticky-class'
          });
  
          return false;
          });
      </script>
      
      <script type="application/javascript">
          $(document).ready(function () {
              $("#date-popover").popover({html: true, trigger: "manual"});
              $("#date-popover").hide();
              $("#date-popover").click(function (e) {
                  $(this).hide();
              });
          
              $("#my-calendar").zabuto_calendar({
                  action: function () {
                      return myDateFunction(this.id, false);
                  },
                  action_nav: function () {
                      return myNavFunction(this.id);
                  },
                  ajax: {
                      url: "show_data.php?action=1",
                      modal: true
                  },
                  legend: [
                      {type: "text", label: "Special event", badge: "00"},
                      {type: "block", label: "Regular event", }
                  ]
              });
          });
          
          
          function myNavFunction(id) {
              $("#date-popover").hide();
              var nav = $("#" + id).data("navigation");
              var to = $("#" + id).data("to");
              console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
          }
      </script>


@endsection