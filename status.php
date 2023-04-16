<?php
session_start();
if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<?php
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

$sql = "SELECT * FROM users where Email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id = $row['id'];
  }
}
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Navbar</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container mt-10 p-2">
   <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Complain ID</th>
          <th>Name</th>
          <th>Landmark</th>
          <th>Address</th>
          <th>Place</th>
          <th>Locatio</th>
          <th>Complain Type</th>
          <th>Complain</th>
          <th>Complain Level</th>
          <th>Complain Status</th>
          <th>Solution</th>
          <th>Upload Photo</th>
        </tr>
<?php
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

$sql = "SELECT * FROM user_complain where UserId = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $CID = $row['CID'];
    $name = $row['name'];
    $land = $row['land'];
    $address = $row['address'];
    $place = $row['place'];
    $location = $row['location'];
    $Ctype = $row['CType'];
    $complain = $row['complain'];
    $complain_level = $row['complain_level'];
    $Proof = $row['Proof'];
    $solution = $row['Solution'];
    $status = $row['Status'];

    if($status == '0'){
      $st ='Pending';
    } else {
      $st = 'Completed';
    }

    if($Proof != ''){
      $img = '<img src=uploads/'."$Proof".' width="80%"> ';
    }
    else {
      $img = '';
    }
?>
<tr>
  <td><?php echo $CID;?></td>
  <td><?php echo $name;?></td>
  <td><?php echo $land;?></td>
  <td><?php echo $address;?></td>
  <td><?php echo $place;?></td>
  <td><?php echo $location;?></td>
  <td><?php echo $Ctype;?></td>
  <td><?php echo $complain;?></td>
  <td><?php echo $complain_level;?></td>
  <td><?php echo $st;?></td>
  <td><?php echo $solution;?></td>
  <td><a href="upload.php?CID=<?php echo $CID;?>" class="btn btn-info btn-sm" role="button">Upload</a>
  <?php echo $img;?>

  </td>
</tr>
    


<?php


  }
} else {
 
}
$conn->close();
?>
  </thead>
      <tbody>
</div>
</body>
</html>