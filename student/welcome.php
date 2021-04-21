<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1.0">
	<title>my campus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
		<header>
			<a href="logout.php"><img src="../img/logo1.png" class="logo"></a>
			<div class="toggleMenu" onclick="menuToggle();"></div>
			<ul class="navigation">
            <li>
            <li>
                <li><div class="text-white">Today:<a href="" id="txt"><body onload="startTime()"> 
                </body></a></div></li>
                <li><div><a href="exams/index.php"><i class="fa fa-file-text-o" aria-hidden="true"></i> Exams</a></div></li>
          <li><div><a href="#"><i class="fa fa-book" aria-hidden="true"></i> subject's</a></div></li>
          <li><div><a href="#"><i class="fa fa-inbox" aria-hidden="true"></i> What's New</a></div></li>
          <li><div><a href="./Newsletter/index.php" ><i class="fa fa-newspaper-o" aria-hidden="true"></i> Newsletter</a></div></li>
          <li><div><a href="./Contact us/index.html"><i class="fa fa-envelope-o" aria-hidden="true"></i> Contact</a></div></li>							
				<li><div><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Log-out</a></div></li>
                <!-- <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?> -->
			</ul>
		</header>     
        
      </header>
		<div class="content">
			<div class="textBox">
				<h2>Java cource<br><span></span></h2>
				<p></p>
				<a href="https://www.javatpoint.com/java-tutorial">Read more</a>
			</div>
			<div class="imgBox">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/hBh_CC5y8-s?start=4648" frameborder="0"
				 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>				
			</div>
			
		</div>


	</section>
	<script type="text/javascript">
	
		function menuToggle(){
			const toggleMenu = document.querySelector('.toggleMenu');
			const navigation = document.querySelector('.navigation');
			toggleMenu.classList.toggle('active');
			navigation.classList.toggle('active');
		}
	</script>

</body>
</html>