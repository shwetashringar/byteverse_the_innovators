<?php
use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
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
<?php if(!empty($loginResult)){?>
        <div class="error-msg"><?php echo $loginResult;?></div>
        <?php }?>
          <form name="login" action="" method="post" onsubmit="return loginValidation()" class="card-body cardbody-color p-lg-5">

            <div class="text-center">
              <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" id="email" placeholder="Email" name="email">
            </div>
            <div class="mb-3">
              <input type="password" name="password" class="form-control" id="password" placeholder="password">
            </div>
            <div class="text-center"><input type="submit" class="btn btn-color px-5 mb-5 w-100" name="login-btn" value="Login"></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
              Registered? <a href="user-registration.php" class="text-dark fw-bold"> Create an
                Account</a>
            </div>
          </form>

          <a href="adminlogin.php">Admin Login</a>
          <a href="stafflogin.php">Officer Login</a>
        </div>

      </div>
    </div>
  </div>
</body>
</html>