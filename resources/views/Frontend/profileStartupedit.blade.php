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
        <link rel="stylesheet" href="css/form.css">


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
  <div class="profile-nav col-md-3" >
      <div class="panel" >
          <div class="user-heading round">
              <a href="#">
                  <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
              </a>
              <h1>{{Auth::user()->firstName}}&nbsp{{Auth::user()->lastName}}</h1>
              <p>{{Auth::user()->email}}</p>
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
  <div class="profile-info col-md-9">
      
      <div class="profile-info col-md-12" style="padding-right:0px;padding-left:0px;margin-top:0px;">
      
        <div class="panel">
            <div class="panel-body bio-graph-info" style="background: #fbc02d; color: white;">
                <h1 style=" margin: 0 0 0px; text-align:center">New Startup</h1>
            </div>
        </div>
      </div>
      <div>
          <div class="row">
            <div id="container2">
            <form  action="/updateStartup" method="POST">
                 {{csrf_field()}}
                 {{method_field('PUT')}}
                 <input type="hidden" name="startup_id" value="{{$startup->id}}">
                    <div class="row">
                    <div class="col-25">
                        <label for="fname">Startup Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="startupName" value="{{$startup->startupName}}" placeholder="Startup Name..">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                        <label for="lname">Tagline</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="tagline" value="{{$startup->tagline}}" placeholder="Tagline..">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                        <label for="lname">Company Logo</label>
                    </div>
                    <div class="col-75">
                        <input style="float:left" type="file" id="myFile" name="logo">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                        <label for="lname">Web URL</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="webUrl" value="{{$startup->webUrl}}" placeholder="Url..">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                        <label for="lname">Telephone Number</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="telephone" value="{{$startup->telephone}}" placeholder="Number..">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                        <label for="lname">Company Address</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="companyAddress" value="{{$startup->companyName}}" placeholder="Address..">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                        <label for="lname">Company Name (In Business Registration)</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="companyName" value="{{$startup->companyName}}" placeholder="Company Name..">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                        <label for="lname">Business Registration Number</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="businessRegistrationNumber" value="{{$startup->businessRegistrationNumber}}" placeholder="Business Registration Number..">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                        <label for="lname">Founded Date</label>
                    </div>
                    <div class="col-75">
                        <input type="date" id="lname" name="foundedDate" value="{{$startup->foundedDate}}" placeholder="Company Name..">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                        <label for="lname">Startup Category</label>
                    </div>
                    <div class="col-75">
                        <select id="country" name="startupCategory">
                            <option {{ ( $startup->startupCategory == "Agriculture / Agritech") ? 'selected' : '' }}> Agriculture / Agritech</option>
                            <option {{ ( $startup->startupCategory == "AI") ? 'selected' : '' }}>AI</option>
                            <option {{ ( $startup->startupCategory == "Arts and Culture") ? 'selected' : '' }}>Arts and Culture</option>
                            <option {{ ( $startup->startupCategory == "Cloud Computing") ? 'selected' : '' }}>Cloud Computing</option>
                            <option {{ ( $startup->startupCategory == "Comp. Hardware") ? 'selected' : '' }}>Comp. Hardware</option>
                            <option {{ ( $startup->startupCategory == "Construction") ? 'selected' : '' }}>Construction</option>
                            <option {{ ( $startup->startupCategory == "Consulting") ? 'selected' : '' }}>Consulting</option>
                            <option {{ ( $startup->startupCategory == "Design & Print") ? 'selected' : '' }}>Design & Print</option>
                            <option {{ ( $startup->startupCategory == "Robotics") ? 'selected' : '' }}>Robotics</option>
                            <option {{ ( $startup->startupCategory == "Social Innovation") ? 'selected' : '' }}>Social Innovation</option>
                            <option {{ ( $startup->startupCategory == "Digital Marketing") ? 'selected' : '' }}>Digital Marketing</option>
                            <option {{ ( $startup->startupCategory == "Educational / Edutech") ? 'selected' : '' }}>Educational / Edutech</option>
                            <option {{ ( $startup->startupCategory == "Entertainment") ? 'selected' : '' }}>Entertainment</option>
                            <option {{ ( $startup->startupCategory == "Events") ? 'selected' : '' }}>Events</option>
                            <option {{ ( $startup->startupCategory == "Fashion") ? 'selected' : '' }}>Fashion</option>
                            <option {{ ( $startup->startupCategory == "Financial/ Fintech") ? 'selected' : '' }}>Financial/ Fintech</option>
                            <option {{ ( $startup->startupCategory == "Food & Beverages") ? 'selected' : '' }}>Food & Beverages</option>
                            <option {{ ( $startup->startupCategory == "Green Technology") ? 'selected' : '' }}>Green Technology</option>
                            <option  {{ ( $startup->startupCategory == "Sports") ? 'selected' : '' }}>Sports</option>
                            <option {{ ( $startup->startupCategory == "UI/UX") ? 'selected' : '' }}>UI/UX</option>

                        </select>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                        <label for="subject">Description</label>
                    </div>
                    <div class="col-75">
                        <textarea id="subject" name="description" placeholder="Write a Description.." style="height:100px">{{$startup->description}}</textarea>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lname">Number of Employees</label>
                        </div>
                        <div class="col-75">
                            <input type="number" id="lname" name="numberOfEmployees" value="{{$startup->numberOfEmployees}}" placeholder="Number of Employees..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lname">Founder Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="lname" name="founderName" value="{{$startup->founderName}}" placeholder="Founder Name...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lname">Founder Email</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="lname" name="founderEmail"value="{{$startup->founderEmail}}"  placeholder="Founder Email..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lname">Founder Contact Number</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="lname" name="founderTelephone" value="{{$startup->founderTelephone}}" placeholder="Telephone Number..">
                        </div>
                    </div>
                    <div class="row">
                    <input id="" value="Cancel">
                    <input id="" type="submit" value="Submit">
                    </div>
                </form>
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
                        <!-- <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
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
