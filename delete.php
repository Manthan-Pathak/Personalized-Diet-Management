<?php

include 'dbcon.php';

$id = $_GET['id'];

$sqldel = "delete from admin where aid = '$id'";
$dquery = mysqli_query($con, $sqldel);

header('location:modadmin.php');


?>