<?php
session_start();
if (isset($_SESSION["id"])) {
    $id = $_SESSION["id"];
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

$cid = $_GET['CID'];

$sql = "SELECT * FROM user_complain where CID = '$cid'";
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
}
}
?>
<form action="update-com.php" method="post">
    <input type="hidden" name="cid" value="<?php echo $CID;?>">
<div class="form-group">
  <label for="comment">Solution:</label>
  <textarea class="form-control" rows="5" id="solution" name="solution"></textarea>
</div>
<div class="form-group">
  <label for="loc">Status:</label>
  <select class="form-control" id="loc" name="status">
    <option value="Complete">Complete</option>
    <option value="Pending">Pending</option>
  </select>
</div>
<button type="submit" class="btn btn-primary btn-block" id="btn">Post Solution</button>
</form>
    </div>
</body>
</html>