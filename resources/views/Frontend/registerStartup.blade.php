<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--
Victory HTML CSS Template
https://templatemo.com/tm-507-victory
-->
        <title>Victory HTML CSS Template</title>
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

        <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="js/navdrop.js"></script>
        <script src="js/formvalidation.js"></script>
        <style>
            .nav-item-dropdown a:focus {
            background-color: blue;
            }

        </style>

        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    </head>


<body>
    <div class="header">
        <div class="container">
            <img id="header-image"src="img/logo.png" href="#" width="150" height="90">
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
                        <li><a id="nav-underline" href="/menu">About</a></li>
                        <li><a id="nav-underline" href="blog.html">Explore</a></li>
                        <li><a id="nav-underline" href="contact.html">Partners</a></li>
                        <li class="nav-item-dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="nav-underline" role="button" data-toggle="dropdown" >
                            Start Up <i class="fa fa-caret-down"></i>
                            </a>
                            <div class="dropdown-menu"  aria-labelledby="navbarDropdown1">
                                <a class="dropdown-item" href="#">Register Startup</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">View Session</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Get Reports</a>
                            </div>
                        </li>
                        <li><a id="nav-underline" href="/login">Meeting Requests</a></li>
                        <li class="nav-item dropdown" style="">
                            <a class="nav-link-dropdown-toggle" href="#" id="nav-underline" role="button" data-toggle="dropdown" >
                            Admin <i class="fa fa-caret-down"></i>
                            </a>
                            <div class="dropdown-menu"  aria-labelledby="navbarDropdown1">
                                <a class="dropdown-item" href="#">User Management</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Session Requests</a>
                            </div>
                        </li>
                        <li><a id="nav-underline" href="/login">Profile</a></li>
                        <li><a id="nav-underline" href="/login">Log In</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->
    <!-- <div class="zf-templateWidth"><form > -->
        <!---------template Header Starts Here---------->
            <!-- <ul class="zf-tempHeadBdr"><li class="zf-tempHeadContBdr"><h2 class="zf-frmTitle"><em>Startup Details</em></h2>
            <p class="zf-frmDesc">Enter the details of Startup Details</p>
            <div class="zf-clearBoth"></div></li></ul> -->
        <!-- -------template Header Ends Here-------- -->

        <div id="container1">
            <form action="action_page.php">
                <div class="row">
                <div class="col-25">
                    <label for="fname">Startup Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="firstname" placeholder="Startup Name..">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="lname">Tagline</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Tagline..">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="lname">Company Logo</label>
                </div>
                <div class="col-75">
                    <input style="float:left" type="file" id="myFile" name="filename">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="lname">Web URL</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Url..">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="lname">Telephone Number</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Number..">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="lname">Company Address</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Address..">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="lname">Company Name (In Business Registration)</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Company Name..">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="lname">Business Registration Number</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Business Registration Number..">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="lname">Founded Date</label>
                </div>
                <div class="col-75">
                    <input type="date" id="lname" name="lastname" placeholder="Company Name..">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="lname">Startup Category</label>
                </div>
                <div class="col-75">
                    <select id="country" name="country">
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                    </select>
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="subject">Description</label>
                </div>
                <div class="col-75">
                    <textarea id="subject" name="subject" placeholder="Write a Description.." style="height:100px"></textarea>
                </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Number of Employees</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="lastname" placeholder="Number of Employees..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Founder Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="lastname" placeholder="Founder Name...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Founder Email</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="lastname" placeholder="Founder Email..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Founder Contact Number</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="lastname" placeholder="Telephone Number..">
                    </div>
                </div>



                <div class="row">
                <input id="subbutton" type="submit" value="Submit">
                </div>
            </form>
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
</body>
</html>
