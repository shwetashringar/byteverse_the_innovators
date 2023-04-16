<?php

include('db2.php');

    $cid =$_POST['cid'];
    $solution =$_POST['solution'];
    $status =$_POST['status'];

    
    mysqli_query($con,"UPDATE user_complain SET Solution = '$solution', Status = '$status' Where CID = '$cid'");

echo "Submit Success fully";


?>

<a href="staffadmin.php">Click Here to go to Admin</a>