<?php

include('db2.php');
    
    $userid = $_POST['userid'];
    $name =$_POST['name'];
    $email =$_POST['email'];
    $feedback =$_POST['feedback'];
   
    
    mysqli_query($con,"insert into feedback(UserID, Name, Email, Feedback) values('$userid', '$name', '$email', '$feedback')");

echo "Submit Success fully";
?>