

<?php
// Create connection
include '../php/config.php';
if(isset($_REQUEST['submit'])){
  // chicking for emty filds
  if(($_REQUEST['date'] == "") || ($_REQUEST['subject'] == "") || ($_REQUEST['chapter_name'] == "") || ($_REQUEST['topic'] == "") || ($_REQUEST['discription'] == "") || ($_REQUEST['link'] == "")){
    echo "<script>alert('Fill!  All Filds.')</script>";
  }
  else{
    $date = $_REQUEST['date'];
    $subject = $_REQUEST['subject'];
    $chapter_name = $_REQUEST['chapter_name'];
    $topic = $_REQUEST['topic'];
    $discription = $_REQUEST['discription'];
    $link = $_REQUEST['link'];
    $sql = "INSERT INTO notes (date, subject, chapter_name, topic, discription, link) VALUE('$date','$subject','$chapter_name','$topic','$discription','$link')";
    if(mysqli_query($conn, $sql)){
      echo "";
    }
    else {
      echo "<script>alert('Woops!  Notes not added.')</script>";
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
       <!--fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/home_page.css">
    <title>Add Lecture</title>
  </head>
  <body>

    <section class="sec">
        <header>
			<a href="dashbord.php"><img src="../img/logo1.png"class="logo"></a>
			<div class="toggleMenu" onclick="menuToggle();"></div>
			<ul class="navigation">
        <li><div><a href="./student/register.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Student Registration</a></div></li>
        <li><div><a href="./all_notes.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Edit Notes</a></div></li>
				<li><a href="students_list.php"><i class="far fa-edit"></i> Edit Classes</a></li>
				<li><a href="https://docs.google.com/forms/d/1AgAXn2cOSIo-VeTi1zb3jdBBe2pplFHcaZGiDeZhA7w/edit"><i class="far fa-file-alt"></i> Shedule Exam</a></li>
			</ul>
		</header>

    <div class="col-md-4">
  </div>
  <div class="col-md-4 text-white">
  
    <form action="" method="POST" class="row g-6 needs-validation" style="margin: 7px; align-items: center; "  novalidate>
            <h5 class="text-center text-white" style="padding: 10px; ">New Notes</h5>
            <div class="col-md">
              <label for="date" class="form-label">Date:</label>
              <input type="date" class="form-select" name="date" id="date" >
              <div class="invalid-feedback">
                Please select a valid state.
              </div>
            </div>
  <div class="col-md-12 form-group">
    <label for="subject" >subject</label>
    <select class="form-control " type="text" name="subject" id="subject">
      <option>Computer Science</option>
      <option>Electronic</option>
      <option>Statistics</option>
      <option>Mathamatics</option>
      <option>Physics</option>
    </select>
  </div>
  <div class="form-group" >
    <label for=" chapter_name">Chapter name</label>
	<input type="text" class="form-control" name="chapter_name" placeholder="Chapter name"> 
 </div>
  <div class="form-group">
    <label for="topic">Topic</label>
	<input type="text" class="form-control" name="topic" placeholder="Topic"> 
 </div>
  <div class="form-group">
    <label for="discription">Discreption</label>
    <textarea class="form-control" type="text" name="discription" id="discription" placeholder="Discription" rows="3"></textarea>
  </div>
 
  <div class="form-group">
    <label for="link">Link</label>
	<input type="text" class="form-control" name="link" placeholder="File link"> 
 </div>     
       <div class="text-center " style="margin-top:15px">
              <button type="submit" name="submit" class="btn btn-primary">Upload</button>
       </div>
</form>
</div>
<div class="col-md-4">
  </div>
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



?>
