<?php

               include 'dbcon.php';
               session_start();

              $id = $_SESSION['usrid'];

              $cals = mysqli_real_escape_string( $con, $_POST['cals']);
              $fat = mysqli_real_escape_string( $con, $_POST['fat']);
              $prot = mysqli_real_escape_string( $con, $_POST['prot']);
              $carb = mysqli_real_escape_string( $con, $_POST['carb']);
              $date = date('Y-m-d H:i:s'); 
               


                $sqlsel = "SELECT * from mcals where usrid = '$id'" ;
                $squery = mysqli_query($con, $sqlsel);

                if(mysqli_num_rows($squery) > 0)
                {
                    $sqlupdt = "UPDATE mcals set bdate='$date', cals=$cals, fat=$fat, prot=$prot, carb=$carb where usrid = '$id'";
                    $uquery = mysqli_query($con, $sqlupdt);
                }
                else
                {
                    $sqlins = "INSERT into mcals (usrid, bdate, cals, fat, prot, carb) VALUES ('$id', '$date', $cals, $fat, $prot, $carb)";
                    $iquery = mysqli_query($con, $sqlins);
                }
                




?>
