<?php

include 'dbcon.php';

$id = $_GET['id'];

$sqldel = "delete from foodrec where fid = '$id'";
$dquery = mysqli_query($con, $sqldel);

header('location:modfood.php');


?>