<?php
include '../php/config.php';

// comnnection 
$conn = mysqli_connect("localhost","root","","sscakola");

// check connection
if(!$conn){
    die(" Database Connection Failed");
}
echo "";
//sql to delete record

if(isset($_REQUEST['submit'])){
$sql = "DELETE FROM students WHARE id = {$_REQUEST['id']}";
if(mysqli_query($conn, $sql)){
  echo "Record deleted";
}
else{
  echo "unable to delete record";
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
    <link rel="stylesheet" href="../css/student.css">
    <title>My Campus</title>
  </head>
  <body>
  <section class="sec">
  <header>
			<a href="../teacher/add_student.php"><img src="../img/logo1.png"class="logo"></a>
			<div class="toggleMenu" onclick="menuToggle();"></div>
			<ul class="navigation">
				<li><a href="../teacher/add_student.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Student</a></li>
				<li><a href="logout.php">Log-out</a></li>
			</ul>
		</header>
      <div class="container text-white">
      <h5 class="text-center" style="padding: 10px;">  Students Details <br> <br></h5>
          <?php
        $sql = "SELECT * FROM students";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
          echo '<div class="table-responsive-sm ">';
            echo '<table class="table table-striped table-hover">';
               echo "<thead>";
                 echo "<tr>";
                 echo "<th>S.R</th>";
                   echo "<th>Student Name</th>";
                   echo "<th>Mobile Number </th>";
                   echo "<th>Email ID</th>";
                   echo "<th>Class</th>";
                   echo "<th>Batch</th>";
                   echo "<th>College ID</th>";
                 echo "</tr>";
               echo "</thead>";
               echo "<tbody>";
               while($row = mysqli_fetch_assoc($result)){
                 echo "<tr>";
                 echo "<td>" . $row["id"] . "</td>";
                 echo "<td>" . $row["name"] . "</td>";
                 echo "<td>" . $row["mobile_number"] . "</td>";
                 echo "<td>" . $row["email"] . "</td>";
                 echo "<td>" . $row["class"] . "</td>";
                 echo "<td>" . $row["batch"] . "</td>";
                 echo "<td>" . $row["college_id"] . "</td>";
                 echo '<td> <from action="" method="POST"> <input type="hidden" name="id" value=' . $row['id'] .'> <input type="submit" class="btn btn-sm btn-danger" name="submit" value="Delete"></from></td>';
                 echo "</tr>";
               }
              
              } else {
                echo "0 Results";
                echo "</tbody>";
                echo "</table>";
                echo "</div>";
              }
              
        
          ?>
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
