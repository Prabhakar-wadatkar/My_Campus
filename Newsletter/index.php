
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Newsletter</title>
    <link rel="stylesheet" href="../css/newsletter.css">
    <link rel="stylesheet" href="../css/home_page.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <header>
      <a href="../index.php"><img src="../img/logo1.png" class="logo" alt="my campus" /></a>
      <div class="toggleMenu" onclick="menuToggle();"></div>
      <ul class="navigation">
      <li><div class="text-white">Today:<a href="" id="txt"><body onload="startTime()"> 
</body></a></div></li>
        <li><div><a href="../index.php"><i class="fa fa-book" aria-hidden="true"></i> subject's</a></div></li>
        <li><div><a href="#"><i class="fa fa-inbox" aria-hidden="true"></i> What's New</a></div></li>
        <li><div><a href="../Newsletter/index.php" ><i class="fa fa-newspaper-o" aria-hidden="true"></i> Newsletter</a></div></li>
        <li><div  class="text-white" type="button"  data-bs-toggle="modal" data-bs-target="#login_from"><a href=""></a><i class="fa fa-sign-in" aria-hidden="true"></i> Login</div></li>
      </ul>
      
    </header>
    <div class="container">
      <div class="text">Newsletter</div>
      <body>
        <div class="page-header">
          <h1> Currently No News</h1>
            <!-- <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1> -->
        </div>
        <!-- <p>
            <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
            <a href="../index.html" class="btn btn-danger">Sign Out of Your Account</a>
        </p> -->
    </body>
    </div>

  </body>
</html>
