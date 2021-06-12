<?php

include 'dbcon.php';

print_r($_GET);

$type = $_GET['type'];

$category = array(
    'breakfast',
    'lunch',
    'dinner',
    'snack'
);
$data = [];

$extra = 0;
foreach($category as $cat){
    echo $cal = ($_GET['cal'] / 4) - $extra;
    echo "<br>";
    $i=0;
    $sql = "select fid from foodrec where foodcat='$cat'";
    $q   = mysqli_query($con, $sql);

    $id = mysqli_fetch_all($q, MYSQLI_ASSOC);

    $check = [];
    do{
        
        $randId = rand(0,sizeof($id)-1);
        if(in_array($randId, $check)){
            continue;
        }
        array_push($check, $randId);

        $sql = "select * from foodrec where fid=".$id[$randId]['fid']."and foodtype = '$type'";
        $q   = mysqli_query($con, $sql);
        $rec = mysqli_fetch_assoc($q);
        $data[$cat][$i] = $rec;
        echo "<br>";
        echo $cal -= $rec['cals'];

        if($cal <= 0){
            echo "<br>";
            echo $extra = abs($cal);
            echo "<br>";
            break;
        }
        $i++;
    }while(true);

 
}
// echo "<pre>";
// print_r($data);
// echo "</pre>";

// die();
?>