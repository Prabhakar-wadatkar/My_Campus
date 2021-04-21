<?php
// Create connection
include '../php/config.php';
// check connection 
if($conn){
    echo"";
}

if(isset($_REQUEST['submit'])){
  // chicking for emty filds
  if(($_REQUEST['name'] == "") || ($_REQUEST['mobile_number'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['class'] == "") || ($_REQUEST['batch'] == "") || ($_REQUEST['college_id'] == "")){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Details incomplete</strong> You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
  else{
    $name = $_REQUEST['name'];
    $mobile_number = $_REQUEST['mobile_number'];
    $email = $_REQUEST['email'];
    $class = $_REQUEST['class'];
    $batch = $_REQUEST['batch'];
    $college_id = $_REQUEST['college_id'];
    $sql = "INSERT INTO students (name, mobile_number, email, class, batch, college_id) VALUE('$name','$mobile_number','$email','$class','$batch','$college_id')";
    if(mysqli_query($conn, $sql)){
      echo "";
    }
    else {
      echo "Unable to add Student";
    }
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
    <link rel="stylesheet" href="../css/home_page.css">
    <title>Add Student</title>
  </head>
  <body>

    <section class="sec">
        <header>
			<a href="./index.php"><img src="../img/logo1.png"class="logo"></a>
			<div class="toggleMenu" onclick="menuToggle();"></div>
			<ul class="navigation">
        <li><div><a href="./student/register.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Student Registration</a></div></li>
				<li><a href="students_list.php">Students</a></li>
				<li><a href="logout.php">Log-out</a></li>
			</ul>
		</header>


    
        <form action="" method="POST" class="row g-3 needs-validation text-white" style="padding-top: 70px;" novalidate>
            <h5 class="text-center" style="padding: 10px;">  Students Details</h5>

            <div class="col-md-6">
              <label for="name" class="form-label">Student Name:</label>
              <input type="text" class="form-control" id="name" name="name" value="" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4" >
                <label for="mobile_number" class="form-label">Mobile Number:</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">+91</span>
                  <input type="text" class="form-control" id="mobile_number"  name="mobile_number" aria-describedby="inputGroupPrepend" required>
                  <div class="invalid-feedback">
                    Please Enter Mobile No.
                  </div>
                </div>
              </div>
            
            <div class="col-md-6">
              <label for="email" class="form-label">Email:</label>
              <input type="text" class="form-control" id="email" name="email" required>
              <div class="invalid-feedback">
                Please provide a valid Email address.
              </div>
            </div>
            <div class="col-md-3">
              <label for="class" class="form-label">Class:</label>
              <input type="text" class="form-control" id="class" name="class" required>
              <div class="invalid-feedback">
                Please select a valid state.
              </div>
            </div>
            <div class="col-md-4">
              <label for="batch" class="form-label">Batch:</label>
              <input type="text" class="form-control" id="batch" name="batch" required>
              <div class="invalid-feedback">
                Please provide a valid Batch.
              </div>
            </div>
            <div class="col-md-4">
              <label for="college_id" class="form-label">College ID:</label>
              <input type="text" class="form-control" id="college_id" name="college_id" required>
              <div class="invalid-feedback">
                Please provide a valid College ID.
              </div>
            </div>
            <div class="col-12">
              
            </div>
            <div class="col-12 text-center">
              <button class="btn btn-primary" type="submit" name="submit">Submit</button>
            </div>
          </form>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->
	<script type="text/javascript">
	
	
		function menuToggle(){
			const toggleMenu = document.querySelector('.toggleMenu');
			const navigation = document.querySelector('.navigation');
			toggleMenu.classList.toggle('active');
			navigation.classList.toggle('active');
		}
	</script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
