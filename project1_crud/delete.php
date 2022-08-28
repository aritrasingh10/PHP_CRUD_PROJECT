<?php

include 'connect.php';

if(isset($_GET['deleteid'])){

    $sno = $_GET['deleteid'];

    $sql = "DELETE FROM `crud` WHERE `sno` = $sno";
    $result = mysqli_query($con,$sql);

    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }


}


?>