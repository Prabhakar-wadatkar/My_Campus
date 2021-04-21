<?php 

include '../php/config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>My Campus</title>
    <link rel="stylesheet" type="text/css" href="../css/home_page.css">
    <script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
  </head>
  <body>
    
    <section class="sec">
            <!-- news section -->
            <header class="ticker" style="padding-top:110px">
      <div >
      <div class="text-light"><h5>Campus News</h5></div>
        <div class="text-white border border-light rounded">
          <marquee>
            <p><i class="fa fa-hand-o-right" aria-hidden="true" style="padding-top:15px"></i>
            Sorry about the Inconvenience!...  We would like to launch this service soon but it is taking some time due to some technical issues.
We are committed to providing you with the best stable service. We are committed to doing our best to get the service started ... <i class="fa fa-hand-o-left" aria-hidden="true"></i> </p>
          </marquee>
        </div>
      </div>
      </header>
      <!-- end news -->
      <header>
        <a href="../index.php"><img src="../img/logo1.png" class="logo" alt="my campus" /></a>
        <div class="toggleMenu" onclick="menuToggle();"></div>
        <ul class="navigation">
        <li><div class="text-white">Today:<a href="" id="txt"><body onload="startTime()"> 
</body></a></div></li>
          <li><div><a href="../exams/index.php"><i class="fa fa-file-text-o" aria-hidden="true"></i> Exams</a></div></li>
          <li><div><a href="../index.php"><i class="fa fa-book" aria-hidden="true"></i> subject's</a></div></li>
          <li><div><a href="#"><i class="fa fa-inbox" aria-hidden="true"></i> What's New</a></div></li>
          <li><div><a href="./Newsletter/index.html" ><i class="fa fa-newspaper-o" aria-hidden="true"></i> Newsletter</a></div></li>
          <li><div><a href="../Contact us/index.html"><i class="fa fa-envelope-o" aria-hidden="true"></i> Contact</a></div></li>				
          <li><div  class="text-white" type="button"  data-bs-toggle="modal" data-bs-target="#login_from"><a href=""></a><i class="fa fa-sign-in" aria-hidden="true"></i> Login</div></li>
        </ul>
        
      </header>
<body>
<div class="col-md-4">
</div>
	 <form action="" method="POST" class="col-md-4 needs-validation text-white" style="margin: 7px; align-items: center;" novalidate>
            <h5 class="text-center" style="padding-top: 130px;">Student Registration</h5>

            <div style="margin-top:15px">
              <label for="name" class="form-label">Username:</label>
              <input type="text" class="form-control" id="name" name="username" value="<?php echo $username; ?>" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div style="margin-top:15px">
              <label for="name" class="form-label">Email:</label>
              <input type="email" class="form-control" id="name" name="email" value="<?php echo $email; ?>" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div  style="margin-top:15px">
              <label for="name" class="form-label">Password:</label>
              <input type="password" class="form-control" id="name" name="password" value="<?php echo $_POST['password']; ?>" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div style="margin-top:15px">
              <label for="name" class="form-label">Confirm Password:</label>
              <input type="password" class="form-control" id="name" name="cpassword" value="<?php echo $_POST['cpassword']; ?>"" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="text-center " style="margin-top:15px">
              <button class="btn btn-primary"  type="submit" name="submit">Register</button>
            </div>
			<div class="col-12 text-center" ><br/>Have an Account ? <div  class="text-white" type="button"  data-bs-toggle="modal" data-bs-target="#login_from"><a href=""></a><i class="fa fa-sign-in" aria-hidden="true"></i> Login</div></a></div>
    
	</div>
	</form>
  
  <div class="col-md-4">
</div>
</section>
	<script type="text/javascript">
     
	 function menuToggle(){
	   const toggleMenu = document.querySelector('.toggleMenu');
	   const navigation = document.querySelector('.navigation');
	   toggleMenu.classList.toggle('active');
	   navigation.classList.toggle('active');
	 }
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
 myInput.focus()
})

   </script>
</body>
</html>