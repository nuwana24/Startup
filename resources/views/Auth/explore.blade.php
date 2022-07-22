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
                        <li><a id="nav-underline" href="/about">About</a></li>
                        <li><a id="nav-underline" href="/explore">Explore</a></li>
                        <li><a id="nav-underline" href="/partners">Partners</a></li>
                        <li><a id="nav-underline" href="/guestTalksTrainings">Guest Talks & Trainings</a></li>
                        <li><a id="nav-underline" href="/login">Log In</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Explore</h1>
                    <p>Find about more infomation about the new startups that entered to the industry</p>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-food">
        <div class="container">
            <div class="row">
                <div class="heading">
                    <h2>Weekly Featured Food</h2>
                </div>
            </div>
            <div class="row">
            @for ($i = 0; $i <= 4; $i++)
            <div class="col-md-4">
                    <div class="food-item">
                        <h2>12moon</h2>
                        <h4>Strategic Digital Solutions</h4>
                        <img src="img/breakfast_item.jpg" alt="">
                        <div class="price">UI/UX</div>
                        <div class="text-content">
                            <h4>Description:</h4>
                            <p>12moon is a web design company that focuses on creating beautiful, conversion base websites.</p>
                        </div>
                      
                        <div class="text-content">
                            <h4>Founder:</h4>
                            <p>Mahinda Kahandagama</p>
                            <p>mahinda@gmail.com</p>
                            <p>+94119119119</p>
                        </div>
                        <div class="text-content">
                            <h4>Founded Date:</h4>
                            <p>2022-06-24</p>
                        </div>
                        <div class="text-content">
                            <h4>Web URL:</h4>
                            <a href="https://www.youtube.com/">https://www.youtube.com/</a>
                        </div>
                    </div>
                </div>
            @endfor

                
                <!-- <div class="col-md-4">
                    <div class="food-item">
                        <h2>12moon</h2>
                        <h4>Strategic Digital Solutions</h4>
                        <img src="img/lunch_item.jpg" alt="">
                        <div class="price">UI/UX</div>
                        <div class="text-content">
                            <h4>Description:</h4>
                            <p>12moon is a web design company that focuses on creating beautiful, conversion base websites.</p>
                        </div>
                      
                        <div class="text-content">
                            <h4>Founder:</h4>
                            <p>Mahinda Kahandagama</p>
                            <p>mahinda@gmail.com</p>
                            <p>+94119119119</p>
                        </div>
                        <div class="text-content">
                            <h4>Founded Date:</h4>
                            <p>2022-06-24</p>
                        </div>
                        <div class="text-content">
                            <h4>Web URL:</h4>
                            <a href="https://www.youtube.com/">https://www.youtube.com/</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="food-item">
                    	<h2>12moon</h2>
                        <h4>Strategic Digital Solutions</h4>
                        <img src="img/dinner_item.jpg" alt="">
                        <div class="price">UI/UX</div>
                        <div class="text-content">
                            <h4>Description:</h4>
                            <p>12moon is a web design company that focuses on creating beautiful, conversion base websites.</p>
                        </div>
                      
                        <div class="text-content">
                            <h4>Founder:</h4>
                            <p>Mahinda Kahandagama</p>
                            <p>mahinda@gmail.com</p>
                            <p>+94119119119</p>
                        </div>
                        <div class="text-content">
                            <h4>Founded Date:</h4>
                            <p>2022-06-24</p>
                        </div>
                        <div class="text-content">
                            <h4>Web URL:</h4>
                            <a href="https://www.youtube.com/">https://www.youtube.com/</a>
                        </div>
                    </div> -->
                <!-- </div> -->
            </div>
            
        </div>
    </section>

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
</body>
</html>
