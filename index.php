<?php 

include './php/config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: ./student/welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
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
    <link rel="stylesheet" type="text/css" href="./css/home_page.css">
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
        <a href="#"><img src="img/logo1.png" class="logo" alt="my campus" /></a>
        <div class="toggleMenu" onclick="menuToggle();"></div>
        <ul class="navigation">
        <li><div class="text-white"><a href="" id="txt">Today:<body onload="startTime()"></body></a></div></li>
          <li><div><a href="exams/index.php"><i class="fa fa-file-text-o" aria-hidden="true"></i> Exams</a></div></li>
          <li><div><a href="#"><i class="fa fa-book" aria-hidden="true"></i> subject's</a></div></li>
          <li><div><a href="#"><i class="fa fa-inbox" aria-hidden="true"></i> What's New</a></div></li>
          <li><div><a href="./Newsletter/index.php" ><i class="fa fa-newspaper-o" aria-hidden="true"></i> Newsletter</a></div></li>
          <li><div><a href="./Contact us/index.html"><i class="fa fa-envelope-o" aria-hidden="true"></i> Contact</a></div></li>				
          <li><div><a href="./student/register.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Student Registration</a></div></li>
          <li><div  type="button"  data-bs-toggle="modal" data-bs-target="#login_from" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Teacher Login link Bottom on This Page"><a href=""></a><i class="fa fa-sign-in" aria-hidden="true"></i> Login</div></li>
        </ul>
        
      </header>
      <div class="row" style="padding-top:120px">
      <div class="col-md-4 text-white">
  <div class="card text-center">
  <img src="./img/computer.png" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Compuer Science</h5>
    <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">Last updated 3 mins ago</p> -->
  </div>
  </div>
</div>
<div class="col-md-4 text-white">
  <div class="card text-center">
  <img src="./img/electronics.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Electronics</h5>
    <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">Last updated 3 mins ago</p> -->
  </div>
  </div>
</div>
<div class="col-md-4 text-white">
  <div class="card text-center">
  <img src="./img/statistics.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Statistics</h5>
    <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">Last updated 3 mins ago</p> -->
  </div>
  </div>
</div>
  <div>
    <br>
  </div>
  <div class="col-md-2">
  </div>
  <div class="col-md-4 text-white">
  <div class="card text-center">
  <img src="./img/physics.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Physics</h5>
    <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">Last updated 3 mins ago</p> -->
  </div>
  </div>
</div>
  <div class="col-md-4 text-white">
  <div class="card text-center">
  <img src="./img/math.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Mathamatics</h5>
    <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">Last updated 3 mins ago</p> -->
  </div>
  </div>
</div>


      <!-- alert start -->
   <!-- <div class="col-md-4" clas="alert"  style="padding-top:90px">
     </div>
</div>
   </div>
   <div class="col-md-4" clas="alert"  style="padding-top:90px">
   <div class="alert alert-warning" role="alert">
     <div class="text-end">
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     <img src="img/with_my_campus.png" style="height=25%" class="img-fluid" alt="my campus" srcset="">

     </div>
</div>
   </div>
   <div class="col-md-4" clas="alert"  style="padding-top:90px">
 </div>
</div>
   </div>
   alert close -->
   </div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade " style="padding-top:90px" id="login_from" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      

      <div class="modal-body bg-light text-dark">
      <div class="text-end">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="POST" class="row g-6 needs-validation" style="margin: 7px; align-items: center;" novalidate>
            <h5 class="text-center" style="padding: 10px; "><i class="fa fa-user-circle-o" aria-hidden="true"></i> <br />Student Login</h5>

            <div class="col-md-12" style="margin-top:15px">
              <label for="name" class="form-label">Email:</label>
              <input type="text" class="form-control" id="name" name="email" value="<?php echo $email; ?>" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-12" style="margin-top:15px">
              <label for="name" class="form-label">Password</label>
              <input type="password" class="form-control" id="name" name="password" value="<?php echo $_POST['password']; ?>" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-12 text-center" ><br/> <i class="fa fa-lock" aria-hidden="true"></i>  We hate spam and promise to keep your data safe  <a href="./teacher/index.php" style="color:#181818"></a></div>

            <div class="col-12 text-center " style="margin-top:15px">
              <button class="btn btn-primary"  type="submit" name="submit">Login</button>
            </div>
			<div class="col-12 text-center" ><br/> Teacher's ? <a href="./teacher/index.php" style="color:#181818"><i class="fa fa-sign-in" aria-hidden="true"></i> Login Here.</a></div>
    
	</div>
</form>
      </div>

    </div>
  </div>
</div>



    </section>
    <footer>
    <div class="footer-copyright text-white bg-dark">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<p>Copyright My Campus & <a href="http://prabhakarwadatkar.great-site.net/?i=1" text-white>Prabhakar Wadatkar </a> © 2021. All rights reserved.</p>
</div>
</div>
</div>
</div>
   

</footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->

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

<!-- firebase  -->



<!-- firebase  -->

  </body>
</html>
