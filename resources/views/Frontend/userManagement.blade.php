<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--
Victory HTML CSS Template
https://templatemo.com/tm-507-victory
-->
        <title>Startup Support</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <link rel="stylesheet" href="css/navdrop.css">

        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <!-- <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css"> -->
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/profile.css">


        <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="js/navdrop.js"></script>
        <script src="js/formvalidation.js"></script>
    </head>


<body>
    <div class="header">
        <div class="container">
            <img id="header-image"src="img/newlogo.png" href="#" width="150" height="120">
            <hr>
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a id="nav-underline" href="/">Home</a></li>
                        <li><a id="nav-underline" href="/about">About</a></li>
                        <li><a id="nav-underline" href="/startups">Startups</a></li>
                        <li><a id="nav-underline" href="/mentors">Menotrs</a></li>
                        <li><a id="nav-underline" href="/guestTalksTrainings">Guest Talks & Trainings</a></li>
                        <li><a id="nav-underline" href="/profile">Profile</a></li>
                        <li>
                            <a id="nav-underline" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                </form>
                        </li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets bootdey">
    <div class="row">
        <div class="profile-nav col-md-3">
            <div class="panel">
                <div class="user-heading round">
                     @if(Auth::user()->profilePicturePath != null)
                    <a href="#">
                        <img src="img/{{Auth::user()->profilePicturePath}}" alt="">
                    </a>
                    @else
                    <a href="#">
                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                    </a>
                    @endif
                    <h1>{{Auth::user()->firstName}}&nbsp{{Auth::user()->lastName}}</h1>
                    <h5>{{Auth::user()->email}}</h5>
                </div>

                <ul class="nav nav-pills nav-stacked" style="left:0%">
                <li><a href="/profile"> <i class="fa fa-user"></i> Dashboard</a></li>
                    @role('Entrepreneur')
                    <li><a href="/mystartups"> <i class="fa fa-calendar"></i> My Startups </a></li>
                    @endrole
                    @role('Entrepreneur')
                    <li><a href="/registerStartup"> <i class="fa fa-plus-square-o"></i> Register New Startup</a></li>
                    @endrole
                    <li><a href="/editProfile"> <i class="fa fa-edit"></i> Edit profile</a></li>
                    @role('Admin')
                    <li ><a href="/userManagement"> <i class="fa fa-users"></i> User Management</a></li>
                    @endrole
                    @role('Admin')
                    <li><a href="/startupManagement"> <i class="fa fa-building"></i> Startup Managament</a></li>
                    @endrole
                    @role('Mentor')
                    <li><a href="/getMeetingRequestsOfMentor"> <i class="fa fa-building"></i> Session Requests For Mentor</a></li>
                    @endrole
                    @role('Admin')
                    <li  class="active"><a href="/adminSessionManagement"> <i class="fa fa-meetup"></i> Session Requests For Admin</a></li>
                    @endrole
                    @role('Admin')
                    <li><a href="/guestTalksTrainingsManagement"> <i class="fa fa-crosshairs"></i> Guest Talks / Trainings</a></li>
                    @endrole

                </ul>
            </div>
        </div>

          <div class="col-md-9">
            <div class="card" style="margin-top:40px">
            <div class="panel-body bio-graph-info" style="background: #1494bb; color: white;">
                <h1 style=" margin: 0 0 0px; text-align:center">User Management</h1>
            </div>
              <div class="card-body" style="margin-top:30px">
                <div class="table-responsive">
                  <table id="dataTable" class="table">
                    <thead class=" text-primary font-weight-bold" >
                      

                      <th>
                        Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Role
                      </th> 
                      <th>
                        Telephone
                      </th>  
                      <th>
                        
                      </th>  
                      <th>
                        
                      </th>  
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                          <td>{{$user->firstName}} &nbsp {{$user->lastName}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->roleName}}</td>
                          <td>{{$user->telePhoneNumber}}</td>
                          <td style="max-width:100px">
                            <a href="/deleteUser/{{$user->id}}" class="btn btn-danger deletebtn" style="float:left; position:relative;"> DELETE </a>                          
                          </td>
                        </tr>
                     @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>  
<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>Copyright &copy; 2022 Startup Support</p>
                </div>
                <div class="col-md-4">
                    <ul class="social-icons">
                        <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p>Design: Startup Support Team</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>





    <script type="text/javascript">
    $(document).ready(function() {
        // navigation click actions
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
    <script src="{{asset('js/sweetalert.js')}}"></script>
    <script>
     @if (session('status'))
      swal({
          title: '{{ session('status') }}',
          icon: '{{ session('status_code') }}',
          button: "OK",
          });
    @endif
    </script>
</body>
</html>
