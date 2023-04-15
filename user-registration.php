<?php
use Phppot\Member;
if (! empty($_POST["signup-btn"])) {
    require_once './Model/Member.php';
    $member = new Member();
    $registrationResponse = $member->registerMember();
}
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link href="assets/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
<script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<style type="text/css">
	.btn-color{
  background-color: #0e1c36;
  color: #fff;
  
}

.profile-image-pic{
  height: 200px;
  width: 200px;
  object-fit: cover;
}



.cardbody-color{
  background-color: #ebf2fa;
}

a{
  text-decoration: none;
}
</style>
</head>
<body>
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Login Form</h2>
        <div class="text-center mb-5 text-dark">Made with bootstrap</div>
        <div class="card my-5">

          <form name="sign-up" action="" method="post" onsubmit="return signupValidation()" class="card-body cardbody-color p-lg-5">
<?php
    if (! empty($registrationResponse["status"])) {
        ?>
                    <?php
        if ($registrationResponse["status"] == "error") {
            ?>
                    <div class="server-response error-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        } else if ($registrationResponse["status"] == "success") {
            ?>
                    <div class="server-response success-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        }
        ?>
                <?php
    }
    ?>
            <div class="text-center">
              <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" name="fullname" class="form-control" id="Name" placeholder="Full Name" required>
            </div>
            <div class="mb-3">
              <input type="text" name="email" class="form-control" id="Email" placeholder="Email" required>
            </div>
            <div class="mb-3">
              <input type="text" name="mobile" class="form-control" id="Mobile" placeholder="Mobile" required>
            </div>
            <div class="mb-3">
              <input type="text" name="address" class="form-control" id="Address" placeholder="Address" required>
            </div>
            <div class="mb-3">
              <input type="text" name="city" class="form-control" id="City" placeholder="City" required>
            </div>
            <div class="mb-3">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            </div>
            <div class="text-center"><input type="submit" name="signup-btn" class="btn btn-color px-5 mb-5 w-100" value="Register"></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
              Registered? <a href="#" class="text-dark fw-bold"> Create an
                Account</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</body>
</html>