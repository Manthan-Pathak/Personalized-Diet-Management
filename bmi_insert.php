<?php

               include 'dbcon.php';
               session_start();

               $id = $_SESSION['usrid'];

               if(isset($_POST['bmival']))
               {

                $bmival = mysqli_real_escape_string( $con, $_POST['bmival']); 
                $date = date('Y-m-d H:i:s');              
               

                 $sqlsel = "SELECT * from bmi where usrid = '$id'";
                
                 $squery = mysqli_query($con, $sqlsel);

                 if(mysqli_num_rows($squery) > 0)
                 {
                    $sqlupdt = "UPDATE bmi set bdate='$date', bmival = '$bmival' where usrid = '$id'";
                    $uquery = mysqli_query($con, $sqlupdt);

                 }
                 else
                 {
                    $sqlins = "INSERT into bmi (usrid, bdate, bmival) VALUES ('$id', '$date', '$bmival')";
                    $iquery = mysqli_query($con, $sqlins);
                 }
                }
                else
                {

                }


            ?>