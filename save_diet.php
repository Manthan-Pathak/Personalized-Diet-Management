<?php
include 'dbcon.php';
session_start();

echo "<pre>";
print_r($_POST);
echo "</pre>";

if (isset($_POST['submit'])) {
	$cal = $_POST['cals'];
	$goal = $_POST['goal'];

	echo $breakfast = implode(',', $_POST['breakfast_fid']);
	echo $lunch = implode(',', $_POST['lunch_fid']);
	echo $snack = implode(',', $_POST['snack_fid']);
	echo $dinner = implode(',', $_POST['dinner_fid']);

	$em = "select * from dietrec where usrid = ".$_SESSION['usrid'];
    $qry = mysqli_query($con, $em);

    if(mysqli_num_rows($qry) > 0)
       {

       	$updt = "update dietrec set goal = '$goal', breakfast = '$breakfast', lunch = '$lunch', snack = '$snack', dinner = '$dinner', cals = '$cal' where usrid =". $_SESSION['usrid'];
       	$qryupdt = mysqli_query($con, $updt);

       	
                   
       }
    else
       {
            $sqlins = "insert into dietrec values (0,". $_SESSION['usrid'] .",'$goal','$breakfast','$lunch','$snack','$dinner','$cal')";

			$qrysql = mysqli_query($con ,$sqlins);
			
			
        }
header('Location:userhome.php');
            
}

// $sql = "select * from dietrec where did=1";
// $q = mysqli_query($con,$sql);
// $rec = mysqli_fetch_assoc($q);


// $sql = "select * from foodrec where fid in (".$rec['breakfast'].")";
// $q = mysqli_query($con, $sql);
// $data = mysqli_fetch_all($q, MYSQLI_ASSOC);

// echo "<pre>";
// print_r($data);
// echo "</pre>";



		
