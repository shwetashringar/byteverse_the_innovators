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
 <h2 class="text-center">Post Complain</h2>
  <form action="" id="userForm">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="land">Landmark:</label>
      <input type="text" class="form-control" id="land" placeholder="Enter Landmark" name="land">
    </div>
    <div class="form-group">
      <label for="add">Address:</label>
      <input type="text" class="form-control" id="add" placeholder="Enter Address" name="add">
    </div>
    <div class="form-group">
      <label for="land">Place:</label>
      <input type="text" class="form-control" id="place" placeholder="Enter Landmark" name="place">
    </div>
    <div class="form-group">
  <label for="loc">Location:</label>
  <select class="form-control" id="loc" name="location">
    <option value="Sultanpuri">Sultanpuri</option>
    <option value="Mangolpuri">Mangolpuri</option>
    <option value="Peeragadhi">Peeragadhi</option>
    <option value="Metro">Metro</option>
  </select>
</div>
 <div class="form-group">
  <label for="type">Complaint Type:</label>
  <select class="form-control" id="type" name="type">
    <option value="Street Light">Street Light</option>
    <option value="Pipe leakage">Pipe leakage</option>
    <option value="Rain Water">Rain Water</option>
    <option value="Road Reconstruction">Road Reconstruction</option>
    <option value="Garbage">Garbage</option>
  </select>
</div>
<div class="form-group">
  <label for="comment">Complain:</label>
  <textarea class="form-control" rows="5" id="complain" name="complain"></textarea>
</div>
 <div class="form-group">
  <label for="type">Complaint Level:</label>
  <select class="form-control" id="type" name="level">
    <option value="Low">Low</option>
    <option value="Medium">Medium</option>
    <option value="High">High</option>
  </select>
</div>
    <button type="submit" class="btn btn-primary btn-block" id="btn">Post Complain</button>
  </form>
  <style type="text/css">
    #noti{
      display: none;
    }
  </style>
  <div class="alert alert-danger alert-dismissible fade show" id="noti">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Danger!</strong> Somthing went wrong
  </div>
  <script>
$(document).ready(function(){
$('#userForm').submit(function(){

var name = $('#name').val();
var land = $('#land').val();
var add = $('#add').val();
var place = $('#place').val();
var complain = $('#complain').val();

// show that something is loading
$('#btn').val("Please wait!");

if(name == '' || land == '' || add == '' || place == '' || complain == ''){
  $('#noti').css('display','block');
  return false;
}
else {
// Call ajax for pass data to other place
$.ajax({
type: 'POST',
url: 'general.php',
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
</div>
</body>
</html>