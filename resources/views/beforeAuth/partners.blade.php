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
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Partners</h1>
                    <p>Findout more information on our mentors who are the backbone of our community</p>
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
            <!-- <div class="row">
            @for ($i = 0; $i <= 4; $i++)
                 <div class="col-md-6">
                    <div class="blog-post">
                        <img src="img/blog_post_01.jpg" alt="">
                        <div class="date">26 Oct 2020</div>
                        <div class="right-content">
                            <h4>Mahinda Rajapaksha</h4>
                            <h5>Category</h5>
                            <span>UI/UX</span>
                            <h5>University/College</h5>
                            <span>UI/UX</span>
                            <h5>LinkedIn URL</h5>
                            <span>www.youtube.com</span>
                            <div class="text-button">
                                <a href="#">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor -->

         <div class="row">
            @for ($i = 0; $i <= 4; $i++)
                 <div class="col-md-4">
                    <ul>
                        <li class="booking-card" style= "background-image: url(img/maina.jpg)";>
                            <div class="book-container">
                            <div class="content">
                                <button class="btn">Request Meeting</button>
                            </div>
                            </div>
                            <div class="informations-container">
                            <h2 class="title">Mahinda Rajapaksha</h2>
                            <p class="sub-title"><strong>Electronic Engineering</strong></p>
                            <p style="margin-bottom: 20px" class="sub-title">mahinda@gmail.com</p>
                           
                            <div class="more-information">
                                <div class="info-and-date-container">
                                <div class="box info">
                                    <svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M9.5 14.25l-5.584 2.936 1.066-6.218L.465 6.564l6.243-.907L9.5 0l2.792 5.657 6.243.907-4.517 4.404 1.066 6.218" />
                                </svg>
                                    <p>Rating</p>
                                    <p>4.8 / 5.0</p>
                                </div>
                                <div class="box date">
                                    <svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24" stroke="#1494bb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none">
                                    <circle cx="12" cy="12" r="9" />
                                    <path d="M12,3 C 8,3 8,21 12,21 C 16,21 16,3 12,3"/>
                                    <path d="M3,12 C 3,8 21,8 21,12 C 21,16 3,16 3,12"/>
                        </svg>
                                    <p>Samedi 1er février 2020</p>
                                </div>
                                </div>
                                <p class="disclaimer">Lorem ipsum dolor sit amet consectetur, </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                 </div>
            @endfor 
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
