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
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container mt-10 p-2">
  <div class="row">
    <div class="col-sm-4">
      <div class="card">
  <div class="card-body text-center"><img src="assets/img/email.png" width="20%"></div>
  <div class="card-footer text-center"><a href="complain.php" class="btn btn-info" role="button">Post Complain</a></div>
</div>
</div>
    <div class="col-sm-4">
      <div class="card">
  <div class="card-body text-center"><img src="assets/img/clipboard.png" width="20%"></div>
  <div class="card-footer text-center"><a href="status.php" class="btn btn-info" role="button">Complaint Status</a></div>
</div>
    </div>
    <div class="col-sm-4">
      <div class="card">
  <div class="card-body text-center"><img src="assets/img/customer-service.png" width="20%"></div>
  <div class="card-footer text-center"><a href="#" class="btn btn-info" role="button">Admin Info</a></div>
</div>
    </div>
    </div>
      <div class="row mt-2">
    <div class="col-sm-4">
      <div class="card">
  <div class="card-body text-center"><img src="assets/img/feedback.png" width="20%"></div>
  <div class="card-footer text-center"><a href="feedback.php" class="btn btn-info" role="button">Feedback</a></div>
</div>
    </div>
    <div class="col-sm-4">
      <div class="card">
  <div class="card-body text-center"><img src="assets/img/man.png" width="20%"></div>
  <div class="card-footer text-center"><a href="myprofile.php" class="btn btn-info" role="button">My Profile</a></div>
</div>
    </div>
  </div>
</div>
</body>
</html>