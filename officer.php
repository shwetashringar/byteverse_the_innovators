<?php

include('db2.php');

    $name =$_POST['name'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $mobile =$_POST['mobile'];
    $place = $_POST['place'];
    $dept = $_POST['dept'];
    
    mysqli_query($con,"insert into staff_login(Name, Email, Password, Mobile, Place, Dept) values('$name', '$email', '$password', '$mobile', '$place', '$dept')");

echo "Submit Success fully";
?>