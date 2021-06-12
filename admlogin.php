<?php
session_start();

?>

<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote/layouts/vertical/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Oct 2020 05:07:04 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Login </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>


         <?php

            include 'dbcon.php';

            if(isset($_POST['submit']))
            {
                
                $email = $_POST['email'];
                $pass = $_POST['pass'];

                $em = "select * from admin where email = '$email'";
                $qry = mysqli_query($con, $em);

                if(mysqli_num_rows($qry) > 0)
                {
                    $em_pass = mysqli_fetch_assoc($qry);
                    $db_pass = $em_pass['pass'];
                    $active = 1;
                    $db_active = $em_pass['isactive'];
                    $_SESSION['aname'] =  $em_pass['name'];
                    $_SESSION['aid'] =  $em_pass['aid'];

                   
                    if($pass === $db_pass)
                    {
                        if($active == $db_active)
                        {
                            echo "login Successful";
                            ?>
                            <script>
                                location.replace("ahome.php")
                            </script>

                            <?php

                        }
                        else
                        {
                            echo '<script> alert("Account Deactivated")</script>';
                        }
                        
                    }
                    else
                    {
                        echo '<script> alert("Incorrect password OR Account Deactivated")</script>';                    }
                    }
                else
                {
                    echo '<script> alert("Invalid Email")</script>';
                }

            }


            ?>




        <div class="home-btn d-none d-sm-block">
            <a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Welcome Back !</h5>
                                       
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div>
                                    <a href="index.html">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" method="post">
        
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" name="email" placeholder="Enter E-mail">
                                        </div>
                
                                        <div class="form-group">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="pass" placeholder="Enter password">
                                        </div>
                
                                        
                                        
                                        <div class="mt-3">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" name="submit" type="submit">Log In</button>
                                        </div>
        
                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Oct 2020 05:07:04 GMT -->
</html>
