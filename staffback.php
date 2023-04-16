<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "complaint";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$email = $_POST['email'];
$password = $_POST['password'];
$place = $_POST['place'];
$dept = $_POST['dept']; 

$sql = "SELECT * FROM staff_login where Email = '$email' and Password = '$password' and Place = '$place' and Dept = '$dept' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
     $_SESSION["id"] = $row['STID'];

     echo $_SESSION['id'];

    $url = "./staffadmin.php";
    header("Location: $url");


  }
}

else {
	$url = "./stafflogin.php?msg=0";
	header("Location: $url");
}
?>