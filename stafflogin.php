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
        <h2 class="text-center text-dark mt-5">Staff Login</h2>
        <div class="text-center mb-5 text-dark">Complaint App</div>
        <div class="card my-5">
          <form class="card-body cardbody-color p-lg-5"  action="staffback.php" method="POST">

            <div class="text-center">
              <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" id="Username" aria-describedby="emailHelp"
                placeholder="Enter Email" name="email">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" placeholder="password" name="password">
           <div class="form-group">
        
  <label for="loc">Place:</label>
  <select class="form-control" id="place" name="place">
    <option value="Sultanpuri">Sultanpuri</option>
    <option value="Mangolpuri">Mangolpuri</option>
    <option value="Peeragadhi">Peeragadhi</option>
    <option value="Metro">Metro</option>
  </select>
</div>
<div class="form-group">
  <label for="type">Dept:</label>
  <select class="form-control" id="dept" name="dept">
    <option value="Street Light">Street Light</option>
    <option value="Pipe leakage">Pipe leakage</option>
    <option value="Rain Water">Rain Water</option>
    <option value="Road Reconstruction">Road Reconstruction</option>
    <option value="Garbage">Garbage</option>
  </select>
</div>
            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
              Registered? <a href="user-registration.php" class="text-dark fw-bold"> Create an
                Account</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</body>
</html>