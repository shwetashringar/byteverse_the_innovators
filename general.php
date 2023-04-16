<?php

include('db2.php');

    $name =$_POST['name'];
    $userid = $_POST['userid'];
    $land =$_POST['land'];
    $add =$_POST['add'];
    $place =$_POST['place'];
    $location =$_POST['location'];
    $type =$_POST['type'];
    $complain =$_POST['complain'];
    $level =$_POST['level'];

    
    mysqli_query($con,"insert into user_complain(UserID, name, land, address, place, location, CType, complain, complain_level) values('$userid', '$name', '$land', '$add', '$place', '$location', '$type', '$complain', '$level')");

echo "Submit Success fully";
?>