
<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<!-- Mirrored from madang_h1.kenzap.com/home-version1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Oct 2020 10:37:04 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <title>Login</title>
    <!-- style lists -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link rel="stylesheet" href="css/feature-carousel.css">
    <link href="css/jquery-ui-1.9.2.custom.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- montserrat font embed -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        /******* loader image before page load ******/
        .no-js #loader {display: none;}.js #loader { display: block; position: absolute; left: 100px; top: 0;}.se-pre-con {position: fixed;left: 0px;top: 0px;width: 100%;height: 100%;z-index: 9999;background: url(images/Preloader_4.gif) center no-repeat #fff;}
    </style>
</head>
<body class="home-page home-version1-page">
    <!-- loader image before page load starts -->
    <div class="se-pre-con"></div>
    <!-- loader image before page load ends -->
    <!-- main wrapper of the site starts -->
    <div class="wrapper">

        <!-- ============== Header starts ============== -->
        <header>
            <div class="container">
                <div class="row">

                    <!-- ============== Left logo block starts ============== -->
                    <div class="col-xs-12 col-sm-3 logo-block">
                        <figure><a href="guesthome.html"><img class="img-responsive" src="images/sitelogo.png" alt="Madang Logo" /></a></figure>
                    </div>
                    <!-- ============== Left logo block ends ============== -->

                    <!-- ============== Main navigation starts ============== -->
                    <div class="col-xs-12 col-sm-7 menu-block">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse">
                                    <ul class="nav navbar-nav text-right pull-right">
                                        <li class="active"><a href="about-us.html">About Us</a></li>
                                        <li><a href="program.html">Programs</a></li>
                                        <!-- <li><a href="program.html">programs</a></li>
                                        <li><a href="pricing.html">pricing</a></li> -->
                                        <li><a href="blog.html">blog</a></li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>

                    <!-- <div class="col-xs-12 col-sm-2 nav-right-btn">
                        <a class="btn border-btn-small" href="login.html">choose plan</a>
                    </div> -->
                    <!-- ============== Main navigation ends ============== -->

                </div>
            </div>
        </header>
        <!-- ============== Header ends ============== -->

        <!-- ============== Banner starts ============== -->
        <!-- <section class="banner home-banner home-banner1"> 
            <div class="bannerwrap">

                <div id="owl-demo">
                    <div class="item">
                        <img src="images/home-banner1.jpg" alt="Owl Image">
                        <div class="container">
                            <div class="banner-text text-left">
                                <h1 class="text-capitalize">Healthy inside, fresh <span>outside.</span></h1>
                                <p>We deliver healthy food that are ready to eat. Just choose your own menu you like.</p>
                                <a href="#" class="btn">learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/home-banner2.jpg" alt="Owl Image">
                        <div class="container">
                            <div class="banner-text text-left">
                                <h1 class="text-capitalize">Healthy Food, <span>For breakfast.</span></h1>
                                <p>We deliver healthy food that are ready to eat. Just choose your own menu you like.</p>
                                <a href="#" class="btn">learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/home-banner3.jpg" alt="Owl Image">
                        <div class="container">
                            <div class="banner-text text-center">
                                <h1 class="text-capitalize">Healthy Food Comes From <span>Healthy Ingredients</span></h1>
                                <a href="#" class="btn">Select Program</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- ============== Baner ends ============== -->

        <main>
            <!-- ============== how it works block starts ============== -->
           <!-- <section class="block how-it-works-block">
                <div class="container">
                    <div class="top-text text-center wow fadeInUp">
                        <h4 class="text-uppercase text-lt text-sp" >HOW IT WORKS</h4>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 choose wow fadeInLeft">
                            <div class="feature-item-wrap text-center">
                                <figure><a href="#"><img class="img-responsive" src="images/meal.svg" alt="Meal icon" /></a></figure>
                                <h5><a class="text-lt" href="#">Choose Your Favorite</a></h5>
                                <p>Choose your favorite meals and order online or by phone. It's easy to customize your order.</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 deliver wow fadeInUp">
                            <div class="feature-item-wrap text-center">
                                <figure><a href="#"><img class="img-responsive" src="images/delivery.svg" alt="Delivery icon" /></a></figure>
                                <h5><a class="text-lt" href="#">We Deliver Your Meals</a></h5>
                                <p>We prepared and delivered meals arrive at your door. Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 eat wow fadeInRight">
                            <div class="feature-item-wrap text-center">
                                <figure><a href="#"><img class="img-responsive" src="images/eat-enjoy.svg" alt="Eat and enjoy icon" /></a></figure>
                                <h5><a class="text-lt" href="#">Eat and Enjoy</a></h5>
                                <p>No shooping, no cooking, no counting and no cleaning. Enjoy your healthy meals with your family.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>-->
            <!-- ============== how it works block starts ============== -->

            <!-- ============== featured menu block starts ============== -->
           <!-- <section class="block featured-menu-block">
                <div class="container">
                     == top text header starts == 
                    <div class="wow fadeInUp top-text-header text-center">
                        <h4 class="text-uppercase text-lt text-sp">OUR FEATURED MENU</h4>
                    </div>
                    == top text header ends == 
                </div>

                 == featured menu slider starts ==
                <div class="wow fadeInUp featured-menu-slider">
                    <div class="container">
                        <ul class="bxslider1 row">
                            <li class="col-xs-12 col-sm-3">
                                <a href="#">
                                    <figure><img src="images/featured-image2.jpg" alt="Featured image" /></figure>
                                    <div class="menu-info">
                                        <h6 class="text-capitalize text-lt text-sp">Grilled Salmon</h6>
                                        <span>With Lime Butter Sauce</span>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-12 col-sm-3">
                                <a href="#">
                                    <figure><img src="images/featured-image3.jpg" alt="Featured image" /></figure>
                                    <div class="menu-info">
                                        <h6 class="text-capitalize text-lt text-sp">Salad With Chicken</h6>
                                        <span>Duis autem vel eum iriure</span>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-12 col-sm-3">
                                <a href="#">
                                    <figure><img src="images/featured-image4.jpg" alt="Featured image" /></figure>
                                    <div class="menu-info">
                                        <h6 class="text-capitalize text-lt text-sp">Healthy Breakfast Egg</h6>
                                        <span>Duis autem vel eum iriure</span>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-12 col-sm-3">
                                <a href="#">
                                    <figure><img src="images/featured-image5.jpg" alt="Featured image" /></figure>
                                    <div class="menu-info">
                                        <h6 class="text-capitalize text-lt text-sp">Grilled Roast Vegetable</h6>
                                        <span>With tofu or soybean curd</span>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-12 col-sm-3">
                                <a href="#">
                                    <figure><img src="images/featured-image6.jpg" alt="Featured image" /></figure>
                                    <div class="menu-info">
                                        <h6 class="text-capitalize text-lt text-sp">Tomatoes Sandwiches</h6>
                                        <span>With tofu or soybean curd</span>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-12 col-sm-3">
                                <a href="#">
                                    <figure><img src="images/featured-image1.jpg" alt="Featured image" /></figure>
                                    <div class="menu-info">
                                        <h6 class="text-capitalize text-lt text-sp">Grilled Roast Vegetable</h6>
                                        <span>With tofu or soybean curd</span>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-12 col-sm-3">
                                <a href="#">
                                    <figure><img src="images/featured-image2.jpg" alt="Featured image" /></figure>
                                    <div class="menu-info">
                                        <h6 class="text-capitalize text-lt text-sp">Grilled Salmon</h6>
                                        <span>With Lime Butter Sauce</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                 == featured menu slider ends == 
            </section> -->
            <!-- ============== php part login ============== -->

            <?php

            include 'dbcon.php';

            if(isset($_POST['submit']))
            {
                
                $email = $_POST['email'];
                $pass = $_POST['pass'];

                $em = "select * from usr where email = '$email'";
                $qry = mysqli_query($con, $em);

                if(mysqli_num_rows($qry) > 0)
                {
                    $em_pass = mysqli_fetch_assoc($qry);
                    $db_pass = $em_pass['pass'];
                    $_SESSION['usrname'] =  $em_pass['usrname'];
                    $_SESSION['usrid'] =  $em_pass['usrid'];

                    $pass_decode = password_verify($pass, $db_pass);

                    if($pass_decode)
                    {
                        echo "login Successful";
                        ?>
                        <script>
                            location.replace("userhome.php")
                        </script>

                        <?php
                    }
                    else
                    {
                        echo '<script> alert("Incorrect password")</script>';
                    }
                }
                else
                {
                    echo '<script> alert("Invalid Email")</script>';
                }

            }


            ?>


            <!-- ============== select program block starts ============== -->
            <section class='block select-program-block'>
                <div class='container'>
                    <div class='row' >
                        <div class="col-xs-12 col-sm-6 wow fadeInLeft left-image-block" style="height=100%">
                            <figure><img class="img-responsive" src="images/select-program-image.png" alt="Select program image" height="100%" /></figure>
                        </div>
                        <div class="col-xs-12 col-sm-6 wow fadeInRight pull-right right-form-block">
                            <h3 class='text-uppercase text-sp'>Login</h3>
                            <form action="" method="POST">
                              
                                <fieldset>
                                    <div class="text-uppercase text-lt text-sp">Your E-mail</div>
                                    <input type="text" name="email" required />
                                </fieldset>
                               
                                <fieldset>
                                    <div class="text-uppercase text-lt text-sp">Your Password</div>
                                    <input type="Password" name="pass" required />
                                </fieldset>
                                
                                <fieldset>
                                    <input type='submit' class='btn hvr-wobble-horizontal text-lt text-sp' value='Login' name="submit" />
                                </fieldset>
                                <fieldset>
                                    <a href="reg.php"> Don't Have An Account? </a>
                                </fieldset>
                                <!--  <fieldset>
                                    <a href=""> Forgot Password? </a>
                                </fieldset> -->
                                <fieldset>
                                    <a href="admlogin.php">login As Admin? </a>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ============== select program block ends ============== -->

            <!-- ============== pricing block starts ============== -->
            <!-- <section class="block pricing-block"> -->
                <!-- <div class="container"> -->

                    <!-- top header text starts -->
                    <!-- <div class="top-text-header text-center"> -->
                        <!-- <h4 class="wow fadeInUp text-center animated text-uppercase text-lt text-sp" style="visibility: visible; animation-name: fadeInUp;">COMPARE PRICING</h4>
                        <div class="text-center  wow flipInX animated" style="visibility: visible; animation-name: flipInX;">
                            <span class="select-program-title">Select Program</span>
                            <select class="select-program text-lt text-sp">
                                <option value="">Accelerated Weight Loss</option>
                                <option value="">Accelerated Weight Gain</option>
                                <option value="">Accelerated Protein Free</option>
                                <option value="">Accelerated Weight Loss</option>
                            </select>
                        </div>
                    </div>
                    top header text ends -->

                    <!-- == pricing box starts == -->
                   <!--  <div class="row">

                        pricing box single starts
                        <div class="col-xs-12 col-sm-4 wow fadeInLeft pricing-box">
                            <div class="text-center price-box-wrap">
                                <h5 class="text-lt">2 WEEK PROGRAM</h5>
                                <div class="price-per-day">
                                    <span class="price">$39</span>
                                    <span class="per-day">/day</span>
                                </div>
                                <p>Meals for Breakfast, Lunch, Dinner and Snack with 4 Week Rotation</p>
                                <p>Calories<br />Female 1150-1350, Male 1300-1600</p>
                                <p>Protein Customization<br />Limited Protein Customization</p>
                                <a href="#" class="btn box-btn order-now-btn test-uppercase text-sp">order now</a>
                            </div>
                        </div> -->
                        <!-- pricing box single ends -->

                        <!-- pricing box single starts 
                        <div class="col-xs-12 col-sm-4 pricing-box wow fadeInUp popular">
                            <div class="text-center price-box-wrap">
                                <h5 class="text-lt">3 WEEK PROGRAM</h5>
                                <div class="price-per-day">
                                    <span class="price">$41</span>
                                    <span class="per-day">/day</span>
                                </div>
                                <p>Meals for Breakfast, Lunch, Dinner and Snack with 4 Week Rotation</p>
                                <p>Calories<br />Female 1150-1350, Male 1300-1600</p>
                                <p>Protein Customization<br />Limited Protein Customization</p>
                                <a href="#" class="btn box-btn order-now-btn test-uppercase text-sp">order now</a>
                            </div>
                        </div>
                        <!-- pricing box single ends -->

                        <!-- pricing box single starts 
                        <div class="col-xs-12 col-sm-4 wow fadeInRight pricing-box">
                            <div class="text-center price-box-wrap">
                                <h5 class="text-lt">4 WEEK PROGRAM</h5>
                                <div class="price-per-day">
                                    <span class="price">$43</span>
                                    <span class="per-day">/day</span>
                                </div>
                                <p>Meals for Breakfast, Lunch, Dinner and Snack with 4 Week Rotation</p>
                                <p>Calories<br />Female 1150-1350, Male 1300-1600</p>
                                <p>Protein Customization<br />Limited Protein Customization</p>
                                <a href="#" class="btn box-btn order-now-btn test-uppercase text-sp">order now</a>
                            </div>
                        </div>
                        <!-- pricing box single ends 
                    </div>
                    <!-- pricing box ends 
                </div>
            </section>
            <!-- ============== pricing block ends ============== -->

            <!-- ============== full width video block starts ============== -
            <section class="full-width-video">
                <div class="video-wrap">
                    <img class="video-bg" alt="Madang demo video playback" src="images/video-bg.jpg">
                    <video id="bg-video" preload="auto" muted>
                        <source src="media/video.mp4" type="video/mp4" />
                        <source src="media/video.html" type="video/ogg" />
                        <source src="media/video-2.html" type="video/webm" />
                        Your browser doesn't support HTML5 video. Here's a <a href="#">link</a> to download the video.
                    </video>

                    <div class="video-text text-center video-controls">
                        <a href="#" class="play-btn" id="play-btn"><img src="images/play-btn.svg" alt="Play button" /></a>
                        <h2 class="text-lt text-sp">SEE HOW WE PREPARE YOUR MEAL</h2>
                    </div>
                </div>
            </section>
            <!-- ============== full width video block ends ============== -->

            <!-- ============== team member block starts ============== -
            <section class="block team-member-block">
                <div class="container">
                    <!-- == top header text starts == 
                    <div class="top-text-header wow fadeInUp text-center">
                        <h4 class="text-uppercase text-lt text-sp">OUR PASSIONATE TEAM MEMBER</h4>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit.</p>
                    </div>
                    <!-- == top header text ends == -->

                    <!-- == team member wrapper starts == 
                    <div class="row text-center">
                        <!-- team member single starts 
                        <div class="col-xs-12 col-sm-4 col-md-3 wow fadeInLeft team-member-col">
                            <div class="text-center member-wrap">
                                <div class="member-info">
                                    <figure><a href="#"><img src="images/member1.jpg" alt="Member images" /></a></figure>
                                    <h6 class="text-uppercase"><a class="text-lt text-sp" href="#">MARINKA SULIS</a></h6>
                                    <span class="designation text-capitalize">Founder &amp; CEO</span>
                                </div>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook hvr-wobble-top"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus hvr-wobble-top"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter hvr-wobble-top"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- team member single ends -->

                        <!-- team member single starts 
                        <div class="col-xs-12 col-sm-4 col-md-3 wow fadeInUp team-member-col">
                            <div class="text-center member-wrap">
                                <div class="member-info">
                                    <figure><a href="#"><img src="images/member2.jpg" alt="Member images" /></a></figure>
                                    <h6 class="text-uppercase"><a class="text-lt text-sp" href="#">ROY COLEMAN</a></h6>
                                    <span class="designation text-capitalize">Founder &amp; CTO</span>
                                </div>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook hvr-wobble-top"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus hvr-wobble-top"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter hvr-wobble-top"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- team member single ends -->

                        <!-- team member single starts 
                        <div class="col-xs-12 col-sm-4 col-md-3 wow fadeInRight team-member-col">
                            <div class="text-center member-wrap">
                                <div class="member-info">
                                    <figure><a href="#"><img src="images/member3.jpg" alt="Member images" /></a></figure>
                                    <h6 class="text-uppercase"><a class="text-lt text-sp" href="#">THERESA MEYER</a></h6>
                                    <span class="designation text-capitalize text-lt text-sp">Expert Designer</span>
                                </div>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook hvr-wobble-top"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus hvr-wobble-top"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter hvr-wobble-top"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- team member single ends -
                    </div>
                    <!-- == team member wrapper ends == 
                </div>
            </section>
            <!-- ============== team member block ends ============== -->

            <!-- ============== blog block starts ============== 
            <section class="blog-block">
                <div class="container">
                    <!-- == top header text starts ==
                    <div class="top-text-header text-center wow fadeInUp">
                        <h4 class="text-uppercase text-lt text-sp">latest blog</h4>
                    </div>
                    <!-- == top header text ends == -->

                    <!-- == blog row starts == 
                    <div class="row">
                        <!-- blog single starts 
                        <div class="col-xs-12 col-sm-4 wow fadeInLeft blog-single">
                            <div class="blog-single-wrap">
                                <figure><a href="#"><img src="images/blog-image1.jpg" alt="Blog image" /></a></figure>
                                <div class="blog-description">
                                    <h6 class="text-uppercase"><a href="#" class="text-lt text-sp">5 FOODS THAT SOUND HEALTHY, BUT AREN’T</a></h6>
                                    <span class="posted-date">Posted May 27, 2016</span>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <span class="comments-count">10 Comments</span>
                                    <a href="#" class="text-capitalize pull-right read-more-btn text-lt text-sp">read more</a>
                                </div>
                            </div>
                        </div>
                        <!-- blog single ends -->

                        <!-- blog single starts 
                        <div class="col-xs-12 col-sm-4 wow fadeInUp blog-single">
                            <div class="blog-single-wrap">
                                <figure><a href="#"><img src="images/blog-image2.jpg" alt="Blog image" /></a></figure>
                                <div class="blog-description">
                                    <h6 class="text-uppercase"><a href="#" class="text-lt text-sp">6 TIPS TO MAKE PALEO EATING EASY + AFFORDABLE</a></h6>
                                    <span class="posted-date">Posted May 28, 2016</span>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <span class="comments-count">8 Comments</span>
                                    <a href="#" class="text-capitalize pull-right read-more-btn text-lt text-sp">read more</a>
                                </div>
                            </div>
                        </div>
                        <!-- blog single ends -->

                        <!-- blog single starts 
                        <div class="col-xs-12 col-sm-4 wow fadeInRight blog-single">
                            <div class="blog-single-wrap">
                                <figure><a href="#"><img src="images/blog-image3.jpg" alt="Blog image" /></a></figure>
                                <div class="blog-description">
                                    <h6 class="text-uppercase"><a href="#" class="text-lt text-sp">5 SIMPLE &amp; HEALTHY GLUTEN FREE COOKIE RECIPES</a></h6>
                                    <span class="posted-date">Posted May 29, 2016</span>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <span class="comments-count">21 Comments</span>
                                    <a href="#" class="text-capitalize pull-right read-more-btn text-lt text-sp">read more</a>
                                </div>
                            </div>
                        </div>
                        <!-- blog single ends

                    </div>
                    <!-- == blog row ends ==
                </div>
            </section>
            <!-- ============== blog block ends ============== -->

            <!-- ============== download app block starts ============== 
            <section class="download-app-block">
                <div class="container">
                    <!-- left image starts
                    <div class="wow fadeInLeft left-mobile">
                        <figure><img src="images/mobile-phone.png" alt="Mobile phone" /></figure>
                    </div>
                    <!-- left image ends -->

                    <!-- right text starts
                    <div class="wow fadeInRight download-app-text">
                        <div class="download-app-wrap">
                            <h4><a href="#" class="text-lt text-sp">Download the app</a></h4>
                            <h1 class="text-lt text-sp">Choose. Eat. Enjoy</h1>
                            <p>Nam liber tempor csoluta nobis eleifnd option congue nihil imperdiet doming iquod mazim placerat facer possim assum lorem ipsum dolor possim assum lorem ipsum dolor.</p>
                            <div class="download-from">
                                <a href="#" data-toggle="modal" data-target=".download-popup"><img src="images/app-store.png" alt="App store" /></a>
                                <a href="#" data-toggle="modal" data-target=".download-popup"><img src="images/google-play.png" alt="Google Play" /></a>
                            </div>
                        </div>
                    </div>
                    <!-- right text ends 
                </div>
            </section>
            <!-- ============== download app block ends ============== -->

            <!-- ============== testimonials block starts ============== 
            <section class="testimonials-block">
                <div class="container">
                    <div class="text-center wow fadeInRight testimonials">
                        <ul class="bxslider">
                            <li>
                                <h3 class="text-sp">Madang is Awesome!! Delicious meals that are healthy and fresh!</h3>
                                <p>Madang has fundamentally changed the way my family eat. Previously, dinner meant picking a restaurant on seamless and waiting for food to arrive. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero</p>
                                <div class="testimonial-author">
                                    <figure><img src="images/profile-picture.jpg" alt="Profile picture" /></figure>
                                    <span class="writer text-sp">Shirley Barnes</span>
                                </div>
                            </li>
                            <li>
                                <h3 class="text-sp">Madang is Awesome!!</h3>
                                <p>This has fundamentally changed the way my family eat. Previously, dinner meant picking a restaurant on seamless and waiting for food to arrive. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero</p>
                                <div class="testimonial-author">
                                    <figure><img src="images/profile-picture.jpg" alt="Profile picture" /></figure>
                                    <span class="writer text-sp">Shirley Barnes</span>
                                </div>
                            </li>
                            <li>
                                <h3 class="text-sp">Madang is Awesome!! Delicious meals that are healthy and fresh!</h3>
                                <p>Madang has fundamentally changed the way my family eat. Previously, dinner meant picking a restaurant on seamless and waiting for food to arrive. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero</p>
                                <div class="testimonial-author">
                                    <figure><img src="images/profile-picture.jpg" alt="Profile picture" /></figure>
                                    <span class="writer text-sp">Shirley Barnes</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- ============== testimonials block ends ============== -->

            <!-- ============== instagram block starts ============== -
                <div class="container">
                    <div class="top-text-header text-center">
                        <h4 class="text-uppercase text-sp text-lt">FOLLOW OUR INSTAGRAM</h4>
                        <span class="follow-at text-spx text-lt">@MadangFood</span>
                    </div>
                </div>
                <div class="instagram-image-row">
                    <ul>
                        <li class="wow fadeInUp"><figure><a href="#"><img src="images/instagram-img1.jpg" alt="Instagram image" /></a></figure></li>
                        <li class="wow fadeInUp"><figure><a href="#"><img src="images/instagram-img2.jpg" alt="Instagram image" /></a></figure></li>
                        <li class="wow fadeInUp"><figure><a href="#"><img src="images/instagram-img3.jpg" alt="Instagram image" /></a></figure></li>
                        <li class="wow fadeInUp"><figure><a href="#"><img src="images/instagram-img4.jpg" alt="Instagram image" /></a></figure></li>
                        <li class="wow fadeInUp"><figure><a href="#"><img src="images/instagram-img5.jpg" alt="Instagram image" /></a></figure></li>
                        <li class="wow fadeInUp"><figure><a href="#"><img src="images/instagram-img6.jpg" alt="Instagram image" /></a></figure></li>
                        <li class="wow fadeInUp"><figure><a href="#"><img src="images/instagram-img7.jpg" alt="Instagram image" /></a></figure></li>
                    </ul>
                </div>
            </section>
            <!-- ============== instagram block starts ============== -->

            <!-- ============== Subscribe block starts ============== 
            <section class="block subscribe-block text-center">
                <div class="container">
                    <div class="subscribe-wrap">
                        <div class="top-text wow fadeInUp text-sp text-lt">
                            Be the lucky winner to get FREE Madang premium meals for one week. We are also offer you latest deal in your inbox!
                        </div>
                        <div class="subscribe-form wow fadeInDown">
                            <form>
                                <input type="text" class="text-spx text-lt" placeholder="Enter your e-mail address here">
                                <button type="button" class="btn text-uppercase wow flipInX" data-toggle="modal" data-target=".newsletter-popup">subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ============== Subscribe block ends ============== -->

            <!-- ============== media partner wrap starts ==============
            <div class="media-partner">
                <div class="container">
                    <div class="col-xs-6 col-sm-3 partner-item wow fadeInUp">
                        <figure><img class="img-responsive" src="images/audiojungle.png" alt="Audio jungle" /></figure>
                    </div>
                    <div class="col-xs-6 col-sm-3 partner-item wow fadeInUp">
                        <figure><img class="img-responsive" src="images/graphicriver.png" alt="Graphic river" /></figure>
                    </div>
                    <div class="col-xs-6 col-sm-3 partner-item wow fadeInUp">
                        <figure><img class="img-responsive" src="images/themeforest.png" alt="Themeforest" /></figure>
                    </div>
                    <div class="col-xs-6 col-sm-3 partner-item wow fadeInUp">
                        <figure><img class="img-responsive" src="images/photodune.png" alt="Photodune" /></figure>
                    </div>
                </div>
            </div>
            <!-- ============== media partner wrap ends ============== 
 
        <!-- Download pop up starts 
        <div class="download-popup modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close hvr-wobble-vertical" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                                <path d="M29.02,4.98A17,17,0,1,0,4.98,29.02,17,17,0,1,0,29.02,4.98ZM27.654,27.654A15.066,15.066,0,0,1,6.346,6.346,15.066,15.066,0,0,1,27.654,27.654ZM24.491,9.509a0.963,0.963,0,0,0-1.367,0L17,15.633,10.875,9.509a0.966,0.966,0,0,0-1.367,1.367L15.633,17,9.509,23.125a0.97,0.97,0,0,0,.68,1.653,0.943,0.943,0,0,0,.68-0.286l6.124-6.125,6.125,6.125a0.972,0.972,0,0,0,.68.286,0.931,0.931,0,0,0,.68-0.286,0.963,0.963,0,0,0,0-1.367L18.367,17l6.125-6.125A0.963,0.963,0,0,0,24.491,9.509Z" fill="#60ba62"/>
                            </svg>
                        </span>
                    </button>                        
                    <div class="modal-body">
                        <!-- left image starts 
                        <div class="left-mobile">
                            <figure><img src="images/mobile-phone-big.png" alt="Mobile phone" /></figure>
                        </div>
                        <!-- left image ends -->

                        <!-- right text starts ]
                        <div class="download-app-text">
                            <div class="download-app-wrap">
                                <h4><a href="#">Download the app</a></h4>
                                <h1>Choose. Eat. Enjoy</h1>
                                <p>Nam liber tempor csoluta nobis eleifnd option congue nihil imperdiet doming iquod mazim placerat facer possim assum lorem ipsum dolor possim assum lorem ipsum dolor.</p>
                                <div class="contact-block">
                                    <form>
                                        <fieldset>
                                            <input type="tel" placeholder="Your Phone Number" />
                                        </fieldset>
                                        <fieldset>
                                            <input type="submit" value="text me the link" />
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="download-from">
                                    <a href="#"><img src="images/app-store.png" alt="App store" /></a>
                                    <a href="#"><img src="images/google-play.png" alt="Google Play" /></a>
                                </div>
                            </div>
                        </div>
                        <!-- right text ends -
                    </div>
                </div>
            </div>
        </div>
        <!-- Download pop up ends -->

        <!-- Newsletter pop up starts 
        <div class="newsletter-popup modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close hvr-wobble-vertical" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                                <path d="M29.02,4.98A17,17,0,1,0,4.98,29.02,17,17,0,1,0,29.02,4.98ZM27.654,27.654A15.066,15.066,0,0,1,6.346,6.346,15.066,15.066,0,0,1,27.654,27.654ZM24.491,9.509a0.963,0.963,0,0,0-1.367,0L17,15.633,10.875,9.509a0.966,0.966,0,0,0-1.367,1.367L15.633,17,9.509,23.125a0.97,0.97,0,0,0,.68,1.653,0.943,0.943,0,0,0,.68-0.286l6.124-6.125,6.125,6.125a0.972,0.972,0,0,0,.68.286,0.931,0.931,0,0,0,.68-0.286,0.963,0.963,0,0,0,0-1.367L18.367,17l6.125-6.125A0.963,0.963,0,0,0,24.491,9.509Z" fill="#60ba62"/>
                            </svg>
                        </span>
                    </button>                        
                    <div class="modal-body">
                        <div class="newsletter-inner">
                            <h1 class="text-uppercase"><strong>BE THE LUCKY WINNER</strong></h1>
                            <h2 class="text-uppercase">AND GET FREE MADANG PREMIUM MEALS</h2>
                            <p>We are also offer you latest deal in your inbox. Be the first!</p>
                            <div class="newsletter-subscribe-form">
                                <form>
                                    <fieldset>
                                        <input type="text" placeholder="Drop your e-mail here" />
                                    </fieldset>
                                    <fieldset>
                                        <input type="submit" value="submit" />
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Newsletter pop up ends -->
    </main>
        <!-- ============== footer block starts ============== -->
      <!--   <footer>
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 footer-logo">
                            <figure><a href="#"><img class="img-responsive" src="images/madang-logo-white.png" alt="Footer logo" /></a></figure>
                        </div>
                        <div class="col-xs-12 col-sm-2 footer-social-links pull-right hidden-md hidden-lg hidden-xs">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook hvr-wobble-top"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter hvr-wobble-top"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus hvr-wobble-top"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram hvr-wobble-top"></i></a></li>
                                <li><a href="#"><i class="fa fa-tumblr hvr-wobble-top"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 footer-menu">
                            <div class="row">
                                <div class="col-xs-12 col-sm-3 footer-links-col">
                                    <span>about</span>
                                    <ul>
                                        <li><a href="#">about us</a></li>
                                        <li><a href="#">contact us</a></li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-3 footer-links-col">
                                    <span>press</span>
                                    <ul>
                                        <li><a href="#">press release</a></li>
                                        <li><a href="#">media</a></li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-3 footer-links-col">
                                    <span>company</span>
                                    <ul>
                                        <li><a href="#">team</a></li>
                                        <li><a href="#">board</a></li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-3 footer-links-col">
                                    <span>term</span>
                                    <ul>
                                        <li><a href="#">privacy</a></li>
                                        <li><a href="#">about cookies</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-2 footer-social-links pull-right hidden-sm">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook hvr-wobble-top"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter hvr-wobble-top"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus hvr-wobble-top"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram hvr-wobble-top"></i></a></li>
                                <li><a href="#"><i class="fa fa-tumblr hvr-wobble-top"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bottom-footer">
                <div class="container">
                    <div class="copyright-text text-center">&copy; 2014-2016 Madang, Inc. ALL RIGHT RESERVED.</div>
                </div>
            </div>
        </footer>
 -->        <!-- ============== footer block starts ============== -->
    <!-- </div> -->
    <!-- main wrapper of the site ends -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery-ui-1.9.2.custom.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/jquery.featureCarousel.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script src="js/owl.carousel.js"></script>    
    <script src="js/jquery.waypoints.js"></script>
    <script src="js/jquery.counterup.js"></script>
    <script src="js/main.js"></script>
</body>

<!-- Mirrored from madang_h1.kenzap.com/home-version1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Oct 2020 10:41:00 GMT -->
</html>