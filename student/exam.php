<?php 

include '../php/config.php';

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
        <div class="text-white"><h5>Campus News</h5></div>
        <div class="text-white bg-dark">
          <marquee>
            <p>
              <?php 
$news ="1";
while($news<=10){
  echo "Your time start Now...";
  $news++;
}
              ?>
             </p>
          </marquee>
        </div>
      </div>
      </header>
      <!-- end news -->
      <header>
        <a href="#"><img src="../img/logo1.png" class="logo"></a>
        <div class="toggleMenu" onclick="menuToggle();"></div>
        <ul class="navigation">
          <li><div class="text-white">Current Time is:<a href="" id="txt"><body onload="startTime()"> 
</body></a></div></li>
          <li><div><a href="./welcome.php">Home</a></div></li>
          <li><div><a href="#">subject's</a></div></li>
          <li><div><a href="#">What's New</a></div></li>
          <li><div><a href="../Newsletter/index.html" > Newsletter</a></div></li>
          <li><div><a href="../Contact us/index.html">Contact</a></div></li>
          <li><div  class="text-white" type="button"  data-bs-toggle="modal" data-bs-target="#login_from"><a href=""></a>Login</div></li>
        </ul>
        
      </header>
<section>
<div class="container" id="ff-compose"></div>
<script async defer src="https://formfacade.com/include/114955918266019018552/form/1FAIpQLSdJeEgf6grH1JlL08U47qlzvp-syJp2h8cA5epmvojQBM2XVA/bootstrap.js?div=ff-compose"></script>  
</section>


      <!-- alert start -->
   
<!-- alert end -->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade " style="padding-top:90px" id="login_from" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      

      <div class="modal-body bg-secondary text-white">
      <div class="text-end">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="POST" class="row g-6 needs-validation text-white" style="margin: 7px; align-items: center;" novalidate>
            <h5 class="text-center" style="padding: 10px; ">Student Login</h5>

            <div class="col-md-12" style="margin-top:15px">
              <label for="name" class="form-label">Email:</label>
              <input type="text" class="form-control" id="name" name="email" value="<?php echo $email; ?>" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-12" style="margin-top:15px">
              <label for="name" class="form-label">Password = College ID:</label>
              <input type="password" class="form-control" id="name" name="password" value="<?php echo $_POST['password']; ?>" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-12 text-center " style="margin-top:15px">
              <button class="btn btn-primary"  type="submit" name="submit">Login</button>
            </div>
			<div class="col-12 text-center" ><br/> If you are a teacher ? <a href="./teacher/index.php" style="color:#181818">Login Here.</a></div>
    
	</div>
</form>
      </div>

    </div>
  </div>
</div>


<footer>

   

</footer>

    </section>

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

  </body>
</html>
