<?php

session_start();

if(!isset($_SESSION["usrname"]))
{
    header("location:login.php");
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Your Details</title>

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



	<style type="text/css">
		
		@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 700px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 100%;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 50%;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}

	</style>


</head>



<body>

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

        <section class="choose-plan-block">
                <div class="container">
                    <h5 class="text-center wow fadeInUp text-uppercase"> Hey! <?php echo $_SESSION['usrname']; ?> CHECK YOUR BMI</h5>
                </div>
            </section>          



	<div class="login-page">
	  <div class="form">
	    
	    <form class="login-form" method="post">
	    

	    	<?php

	            include 'dbcon.php';

	            $id = $_SESSION['usrid'];

	            $squery = "select * from usr where usrid = '$id' ";
	            $querysel = mysqli_query($con, $squery);

	            $res =  mysqli_fetch_array($querysel);


              if(isset($_POST['submit']))
              {

                $usrname = $_SESSION['usrname'];
                $mobno = $_POST['mobno'];
                $activity =$_POST['activity'];
                $weight = $_POST['weight'];
                $height = $_POST['height'];
                // $isdiabetic = $_POST['isdiabetic'];
                $type = $_POST['type'];

                 $sqlupdt = "UPDATE usr set mobno = '$mobno', activity = '$activity', weight = '$weight', height = '$height', foodtype = '$type' where usrid = $id ";
                                            $uquery = mysqli_query($con, $sqlupdt);

      

              }
                           
	            ?>


	     	<label>Your Name :</label>
	     <input style="text-align: center;" type="text" name="usrname" value="<?php echo $_SESSION['usrname'] ?>" />
<label>Your Mobile No :</label>
	      <input style="text-align: center;" type="text" name="mobno" value="<?php  echo $res['mobno'];  ?>" />
<label>Your Activity Level :</label>
	      <input style="text-align: center;" type="text" name="activity" value="<?php  echo $res['activity'];  ?>" />
<label>Your Weight :</label>
	      <input style="text-align: center;" type="text" name="weight" value="<?php  echo $res['weight'];  ?>" />
<label>Your Height :</label>
	      <input style="text-align: center;" type="text" name="height" value="<?php  echo $res['height'];  ?>" />
<!-- <label>Are You Diabetic? :</label>
	      <input style="text-align: center;" type="text" name="isdiabetic" value="<?php  echo $res['isdiabetic'];  ?>" /> -->
<label>Your Food type :</label>
	      <input style="text-align: center;" type="text" name="type" value="<?php echo $res['foodtype'];    ?>" />

	      <button type="submit" name="submit">Save</button>
	      <br>
	  </br>
	      <p>Go Back To The Home Page <a href="userhome.php">Click Here</a></p>

	    </form>
	  </div>
	</div>

      
      

</body>

<script type="text/javascript">
	
	$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});

</script>
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


</html>