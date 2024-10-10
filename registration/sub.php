<?php

    $fnm=$_POST['fnm'];
    $mnm=$_POST['mnm'];
    $lnm=$_POST['lnm'];
    $eid=$_POST['eid'];
    $mob=$_POST['mob'];
    $add=$_POST['add'];
    $ct=$_POST['ct'];
    $st=$_POST['st'];
    $con=$_POST['con'];
    $pas=$_POST['pas'];

    $connect=mysqli_connect("sql202.infinityfree.com","if0_37309417","hitesh81400","if0_37309417_mca_39");

    $query="INSERT INTO `user_details`(`firstname`, `middlename`, `lastname`, `email_id`, `mobile_no`,
     `address`, `city`, `state`,`country`, `password`) 
    VALUES ('$fnm','$mnm','$lnm','$eid','$mob','$add','$ct','$st','$con','$pas')";

    $exe_query=mysqli_query($connect,$query);


?>