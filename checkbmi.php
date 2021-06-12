<?php
session_start();

if(!isset($_SESSION["usrname"]))
{
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from madang_h1.kenzap.com/choose-plan-about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Oct 2020 10:56:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <title>Madang</title>

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
<body class="choose-plan-page">

    <!-- loader image before page load starts -->
    <div class="se-pre-con"></div>
    <!-- loader image before page load ends -->

    <!-- main wrapper of the site starts -->
    <div class="wrapper">

        <!-- ============== Header starts ============== -->
        <header class="logo-only-header">
            <div class="container">
                <div class="row">

                    <!-- ============== logo block starts ============== -->
                    <div class="col-xs-12 col-sm-12 text-center logo-block">
                        <figure><a href="userhome.php"><img class="img-responsive" src="images/sitelogo.png" alt="Madang Logo" /></a></figure>
                    </div>
                    <!-- ============== logo block ends ============== -->
                </div>
            </div>
        </header>
        <!-- ============== Header ends ============== -->

        <main>



           

            <!-- =============== choose your own plan title block starts ================== -->
            <section class="choose-plan-block">
                <div class="container">
                    <h5 class="text-center wow fadeInUp text-uppercase"> Hey! <?php echo $_SESSION['usrname']; ?> CHECK YOUR BMI</h5>
                </div>
            </section>                
            <!-- =============== choose your own plan title block ends ================== -->     

            <!-- =============== plan steps block starts ================== -->
            <section class="plan-step">
                <div class="steps-wrapper" data-wizard-init>

                    <!-- == step navigation starts ==-->
                


                    <!-- == step navigation ends ==-->

                    <!-- == step content starts ==-->
                    <div class="step-content">

                        <!-- choose plan about us step starts -->
                        <div class="step1">
                            <div class="col-xs-12 col-sm-6 wow fadeInLeft  left-form">
                                <h5 class="text-uppercase">Not Sure About Your Accurate Body Mass Index? No Worries! Check it here.</h5>
                                <form class="about-us-form" onsubmit="return false" name="bmiform" method="POST">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 pull-left">
                                                <div class="light-font radio-btn radio-btn-men checked">
                                                    <input class="radio-class" type="radio" name="gender" id="gen" value="men" /> <span>Men</span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 pull-right">
                                                <div class="light-font radio-btn radio-btn-women">
                                                    <input class="radio-class" type="radio" name="gender" id="gen" value="women" /> <span>Women</span>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <input type="text" id="height" placeholder="Height In feet" required />
                                    </fieldset>
                                    <fieldset>
                                        <input type="number" id="weight" placeholder="Weight in Kg" required />
                                    </fieldset>
                                   
                                    <fieldset>
                                        Your BMI is :
                                         <input type="number" id="getbmival" name="bmival" placeholder="" />
                                    </fieldset>
                                    <fieldset>
                                        Your BMI simply means :
                                         <input type="text" id="bmimeans" placeholder="" />
                                    </fieldset>
                                    <fieldset>
                                        <input type="submit" name="submit" value="Calculate" onclick="getbmi()" />
                                    </fieldset>
                                    Your BMI is stored <a href="userhome.php">Go Back to Home Page</a>
                                </form>
                            </div>

                            <div class="col-xs-12 col-sm-6 wow fadeInRight right-image">
                                <figure><img src="images/about-us-right-image.jpg" alt="About us image" /></figure>
                            </div>
                        </div>
                        <!-- choose plan about us step ends -->
                    </div>
                    <!-- == step content ends ==-->
                </div>
            </section>
            <!-- =============== plan steps block ends ================== -->






        </main>

        

        

        <!-- ============== footer block starts ============== -->
        <footer class="limited-footer">
            <div class="container">
                &copy; 2014-2016 Madang, Inc. ALL RIGHT RESERVED.
            </div>
        </footer>
        <!-- ============== footer block ends ============== -->


    </div>
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


        <script type="text/javascript">

            function getbmi()
            {
                var weight = document.bmiform.weight.value;
                var height = document.bmiform.height.value;

                height = height * 12; // height in inches
                height = height * 0.025; // height in meter

                var bmival = weight / (height * height);

                bmival = Math.round(bmival);

                document.bmiform.getbmival.value = bmival;

                if(bmival <= 18.5 )
                {
                    document.bmiform.bmimeans.value = "You are Underweighted!"
                }

                if(bmival > 18.5 && bmival <= 25 )
                {
                    document.bmiform.bmimeans.value = "You are Healthy!"
                }

                if(bmival > 25 )
                {
                    document.bmiform.bmimeans.value = "You are overweighted!"
                }

                $.ajax({
                    url: 'bmi_insert.php',
                    method: 'POST',
                    data: {
                        bmival:bmival
                    },
                    success:function(res){
                        alert(res);
                    }
                })
              
            } 
          
          
        </script>
</body>

<!-- Mirrored from madang_h1.kenzap.com/choose-plan-about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Oct 2020 10:56:50 GMT -->
</html>