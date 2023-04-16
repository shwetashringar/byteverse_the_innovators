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
  <h2 class="text-center">Post Feedback</h2>
  <form action="" id="userForm">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="hidden" name="userid" value="<?php echo $id;?>">
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="land">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
    </div>
    <div class="form-group">
      <label for="add">Feedback:</label>
      <textarea class="form-control" rows="5" id="feedback" name="feedback"></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-block" id="btn">Submit Feedback</button>
    <style type="text/css">
    #noti{
      display: none;
    }
  </style>
    <div class="alert alert-danger alert-dismissible fade show" id="noti">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Danger!</strong> Somthing went wrong
  </div>
  </form>

</div>
</body>
</html>
  <script>
$(document).ready(function(){
$('#userForm').submit(function(){

var name = $('#name').val();
var land = $('#email').val();
var add = $('#feedback').val();


// show that something is loading
$('#btn').val("Please wait!");

if(name == '' || email == '' || feedback == ''){
  $('#noti').css('display','block');
  return false;
}
else {
// Call ajax for pass data to other place
$.ajax({
type: 'POST',
url: 'feed.php',
data: $(this).serialize() // getting filed value in serialize form
})
.done(function(data){ // if getting done then call.

// show the response
alert(data);
window.location.href = "home.php";
})
.fail(function() { // if fail then getting message

// just in case posting your form failed
alert( "Posting failed." );

});

// to prevent refreshing the whole page page
return false;
};
});
});
</script>