<?php

session_start();

if(!isset($_SESSION["usrname"]))
{
    header("location:login.php");
}

?>



<?php

include 'dbcon.php';

$id = $_SESSION['usrid'];

$sql = "select * from dietrec where usrid = '$id'";
$q = mysqli_query($con,$sql);
$rec = mysqli_fetch_assoc($q);


$sql = "select * from foodrec where fid in (".$rec['breakfast'].")";
$q = mysqli_query($con,$sql);
$breakfast = mysqli_fetch_all($q, MYSQLI_ASSOC);


$sql = "select * from foodrec where fid in (".$rec['lunch'].")";
$q = mysqli_query($con,$sql);
$lunch = mysqli_fetch_all($q, MYSQLI_ASSOC);

$sql = "select * from foodrec where fid in (".$rec['snack'].")";
$q = mysqli_query($con,$sql);
$snack = mysqli_fetch_all($q, MYSQLI_ASSOC);


$sql = "select * from foodrec where fid in (".$rec['dinner'].")";
$q = mysqli_query($con,$sql);
$dinner = mysqli_fetch_all($q, MYSQLI_ASSOC);

// echo "<pre>";
// print_r($breakfast);
// echo "</pre>";


// echo "<pre>";
// print_r($lunch);
// echo "</pre>";


// echo "<pre>";
// print_r($snack);
// echo "</pre>";


// echo "<pre>";
// print_r($dinner);
// echo "</pre>";



?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from madang_h1.kenzap.com/sample-menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Oct 2020 10:50:09 GMT -->
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
             <section class="choose-plan-block">
                <div class="container">
                    <h5 class="text-center wow fadeInUp text-uppercase">Heyy! <?php echo $_SESSION['usrname']; ?>  Here's your diet.</h5>
                </div>
            </section>      
            <div class="steps-wrapper">

                    <!-- == step navigation starts ==-->
                    <div class="container">
                        <!-- <ul class="text-center steps">
                            <li class="wow fadeInUp step1"><a href="choose-plan-about-us.html"><span>1</span> About You</a></li>
                           
                            <li class="wow fadeInUp step3 current"><a href="diet.html"><span>3</span> Your Diet</a></li>
                           
                        </ul> -->
                    </div>
                </br>
            </br>
            <section class="block select-menu-block">
           

                <!-- == menu tab part starts == -->
                <!-- <div class='food-tab wow fadeInUp'>
                    <div class='container'>
                        
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#day1" role="tab" data-toggle="tab">Day 01</a></li>
                            <li role="presentation"><a href="#day2" role="tab" data-toggle="tab">Day 02</a></li>
                            <li role="presentation"><a href="#day3" role="tab" data-toggle="tab">Day 03</a></li>
                            <li role="presentation"><a href="#day4" role="tab" data-toggle="tab">Day 04</a></li>
                        </ul>
                    </div>
                </div> -->
                <!-- == menu tab part ends == -->

                <!-- == Tab description starts == -->
                <div class='tab-description'>
                    <form action="save_diet.php" method="post">
                    <div class="container">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="day1">
                                <!-- == food listing group starts == -->
                                <div class="food-listing-group">
                                   <!--  <input type="hidden" name="goal" value="<?= $_GET['goal'] ?>">
                                    <input type="hidden" name="cals" value="<?= $_GET['cal'] ?>"> -->
                                    <?php
                                    foreach ($breakfast as $item) {


                                        // echo "<pre>";
                                        // print_r($item);
                                        // echo "</pre>";
                                        ?>
                                        <div class="food-listing-row wow fadeInLeft">
                                            <input type="hidden" name="breakfast_fid[]" value="<?= $item['fid'] ?>">
                                            
                                            <div class="food-type">

                                                <h5><a href="#">Breakfast</a></h5>
                                            </div>
                                            <div class="food-ingredients">
                                                <?= $item['foodname'] ?>
                                                 <?php $step1 = $item['step1']; ?>
                                           
                                                <?php $step2 = $item['step2']; ?>
                                            
                                                <?php $step3 = $item['step3']; ?>
                                            
                                                <?php $step4 = $item['step4']; ?>


                                                <?php $cals = $item['cals']; ?>
                                           
                                                <?php $fat = $item['fat']; ?>
                                            
                                                <?php $prot = $item['prot']; ?>
                                            
                                                <?php $carb = $item['carb']; ?>
                                                <!-- Tomatoes Omelet with Parsley and Feta Cheese -->
                                            </div>
                                             <a href="#" class="btn border-btn-small" data-toggle="modal" data-target="#exampleModal">Read Recipie</a>
                                             
                                        </div>

                                        <?php
                                    }
                                    ?>
                                   
                                   <?php
                                    foreach ($lunch as $item) {


                                        // echo "<pre>";
                                        // print_r($item);
                                        // echo "</pre>";
                                        ?>
                                        <div class="food-listing-row wow fadeInLeft">
                                            
                                            <input type="hidden" name="lunch_fid[]" value="<?= $item['fid'] ?>">
                                            <div class="food-type">

                                                <h5><a href="#">Lunch</a></h5>
                                            </div>
                                            <div class="food-ingredients">
                                                <?= $item['foodname'] ?>
                                                 <?php $step1 = $item['step1']; ?>
                                           
                                                <?php $step2 = $item['step2']; ?>
                                            
                                                <?php $step3 = $item['step3']; ?>
                                            
                                                <?php $step4 = $item['step4']; ?>


                                                 <?php $cals = $item['cals']; ?>
                                           
                                                <?php $fat = $item['fat']; ?>
                                            
                                                <?php $prot = $item['prot']; ?>
                                            
                                                <?php $carb = $item['carb']; ?>
                                                <!-- Tomatoes Omelet with Parsley and Feta Cheese -->
                                            </div>
                                             <a href="#" class="btn border-btn-small" data-toggle="modal" data-target="#exampleModal">Read Recipie</a>
                                           
                                        </div>

                                        <?php
                                    }
                                    ?>


                                    <?php
                                    foreach ($snack as $item) {


                                        // echo "<pre>";
                                        // print_r($item);
                                        // echo "</pre>";
                                        ?>
                                        <div class="food-listing-row wow fadeInLeft">
                                            
                                            <input type="hidden" name="snack_fid[]" value="<?= $item['fid'] ?>">
                                            <div class="food-type">

                                                <h5><a href="#">Snack</a></h5>
                                            </div>
                                            <div class="food-ingredients">
                                                <?= $item['foodname'] ?>
                                                <?php $step1 = $item['step1']; ?>
                                           
                                                <?php $step2 = $item['step2']; ?>
                                            
                                                <?php $step3 = $item['step3']; ?>
                                            
                                                <?php $step4 = $item['step4']; ?>


                                                 <?php $cals = $item['cals']; ?>
                                           
                                                <?php $fat = $item['fat']; ?>
                                            
                                                <?php $prot = $item['prot']; ?>
                                            
                                                <?php $carb = $item['carb']; ?>
                                                <!-- Tomatoes Omelet with Parsley and Feta Cheese -->
                                            </div>
                                             <a href="#" class="btn border-btn-small" data-toggle="modal" data-target="#exampleModal">Read Recipie</a>
                                            
                                        </div>

                                        <?php
                                    }
                                    ?>


                                    <?php
                                    foreach ($dinner as $item) {


                                        // echo "<pre>";
                                        // print_r($item);
                                        // echo "</pre>";

                                        ?>
                                        <div class="food-listing-row wow fadeInLeft">
                                            
                                            <input type="hidden" name="dinner_fid[]" value="<?= $item['fid'] ?>">
                                            <div class="food-type">

                                                <h5><a href="#">Dinner</a></h5>
                                            </div>
                                            <div class="food-ingredients">
                                                <?= $item['foodname'] ?>
                                            
                                                <?php $step1 = $item['step1']; ?>
                                           
                                                <?php $step2 = $item['step2']; ?>
                                            
                                                <?php $step3 = $item['step3']; ?>
                                            
                                                <?php $step4 = $item['step4']; ?>


                                                 <?php $cals = $item['cals']; ?>
                                           
                                                <?php $fat = $item['fat']; ?>
                                            
                                                <?php $prot = $item['prot']; ?>
                                            
                                                <?php $carb = $item['carb']; ?>
                                                <!-- Tomatoes Omelet with Parsley and Feta Cheese -->
                                           
                                            </div>
                                           
                                             <a href="#" class="btn border-btn-small" data-toggle="modal" data-target="#exampleModal">Read Recipie</a>
                                             
                                        </div>

                                        <?php
                                    }
                                    ?>

                                    
                                   
                                   
                                </div>
                                <!-- == food listing group ends == -->
                                
                                
                        </div>



                    </div>
                    <label>Go Back to Home Page :<a href='userhome.php'> Click here </a></label>

                   

                <!-- <button type="submit" value="submit" name="submit"> Save </button> -->
                </div>
                <!-- == Tab description ends == -->

            </section>
            <!-- ============== select menu block starts ============== -->
        </main>



         </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Reciepe</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                
                                            </br>
                                            <fieldset>
                                               <label>Step1:</label></br>
                                               <?= $step1 ?>
                                               </fieldset>
                                            
                                            </br>
                                            <fieldset>
                                               <label>Step2:</label></br>
                                               <?= $step2 ?>
                                               </fieldset>
                                        
                                        </br>
                                            <fieldset>
                                               <label>Step3:</label></br>
                                               <?= $step3 ?>
                                               </fieldset>
                                           </br>
                                            <fieldset>
                                               <label>Step4:</label></br>
                                               <?= $step4 ?>
                                               </fieldset>
                                                <label style="text-align: center;">Neautritional Values</label>

                                            <fieldset>
                                               <label>Calories : </label>
                                               <?= $cals ?>
                                               </fieldset>
                                           
                                            <fieldset>
                                                 <label>fats : </label>
                                                 <?= $fat ?>
                                            </fieldset>
                                        
                                        <fieldset>
                                                <label>Protine : </label>
                                                <?= $prot ?>
                                            </fieldset>
                                           
                                            <fieldset>
                                                <label>Carbs : </label>
                                                <?= $carb ?>
                                                </fieldset>
                                   


                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                               
                            </div>
                          </div>
                        </div>  


                        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Neutrition details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                


                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                               
                            </div>
                          </div>
                        </div>  


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
</body>



<!-- Mirrored from madang_h1.kenzap.com/sample-menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Oct 2020 10:51:39 GMT -->
</html>