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
		<link rel="stylesheet" href="css/signup.css">

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
                        <li><a id="nav-underline" href="/welcome_about">About</a></li>
                        <li><a id="nav-underline" href="/welcome_startups">Startups</a></li>
                        <li><a id="nav-underline" href="/welcome_mentors">Mentors</a></li>
                        <li><a id="nav-underline" href="/welcome_guest_talks">Guest Talks & Trainings</a></li>
                        <li><a id="nav-underline" href="/signIn">Log In</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <div class="wrapper">
			<div class="inner">
				<div class="image-holder">
					<img src="img/signup2.jpg" alt="">
				</div>
                                         
				<form action="/signupApplication" method="POST">
                {{csrf_field()}}
					<h3>Create Your Profile</h3>
					<div class="form-row">
						<input type="text" name="firstName" class="form-control" placeholder="First Name">
						<input type="text" name="lastName" class="form-control" placeholder="Last Name">
					</div>
                    <div class="form-row">
						<input type="text" name="email" class="form-control" placeholder="Email">
						<input type="password" name="password" class="form-control" placeholder="Password">
					</div>
					<div class="form-row">
						<input type="text" name="telePhoneNumber" class="form-control" placeholder="Contact Number">
						<div class="form-holder">
							<select name="roleName" id="role" class="form-control">
								<option value="" disabled selected>Choose Your Role</option>
								<option value="Entrepreneur">Entrepreneur</option>
								<option value="Mentor">Mentor</option>
							</select>
							<i class="zmdi zmdi-chevron-down"></i>
						</div>
					</div>
                    <div class="form-row">
						<input type="text" name="linkedInUrl" class="form-control" placeholder="LinkedIn URL">
						<input type="text" name="college" class="form-control" placeholder="University/College">
					</div>
                    <div class="form-row">
                        <!-- <input type="text" class="form-control" name="category" id="category" placeholder="Enter Your Category"> -->
                        <input type="file" name="image" class="form-control" placeholder="Post Image">
                        <label for="file">Upload a Picture</label>

                    </div>
                    <div class="form-row ">
                        <p>Already have a account? </p><a class="logInHyper" style="color:#17c8f8; " href="/signIn"> Log In</a>
                    </div>
					<!-- <textarea name="" id="" placeholder="Message" class="form-control" style="height: 130px;"></textarea> -->
					<button type="submit">Create<i class="zmdi zmdi-long-arrow-right"></i></button>
                    <a href="/test" class="btn btn-danger deletebtn"> HI</a> 
				</form>
				
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
    var role = document.getElementById("role");
    var category = document.getElementById("category");

    role.addEventListener("change", function(){
    //Update this to your logic...
    if(role.value === "mentor"){
        category.disabled = true;
        
    }
    });

    <script type="text/javascript">
    $(document).ready(function()
      {
        var navItems = $('.admin-menu li > a');
        var navListItems = $('.admin-menu li');
        var allWells = $('.admin-content');
        var allWellsExceptFirst = $('.admin-content:not(:first)');
        allWellsExceptFirst.hide();
        navItems.click(function(e)
        {
            e.preventDefault();
            navListItems.removeClass('active');
            $(this).closest('li').addClass('active');
            allWells.hide();
            var target = $(this).attr('data-target-id');
            $('#' + target).show();
        });
        });
    </script>

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
