<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: helpme.php");
}

if (isset($_POST['submit'])) {
	$fpn = $_POST['fpn'];
	$fa = $_POST['fa'];

			$sql = "INSERT INTO helpme (fpn, fa)
					VALUES ('$fpn', '$fa')";

}

?>

<html>
<head>
<meta charset="utf-8"/>
<meta name="description" content="welcome to our site"/>
<title>Fire Fighter</title>
<!-- font -->
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
<!-- icon -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">

</head>
<body>
  <div class="header">
    <div class="container">
      <div class="header-content">  <!--to solve float problem   -->
        <h1>Fire<span class="logo">Fighter</span></h1> 
        <ul class="nav">
              <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
              <li><a href="login.php"><i class="fa fa-newspaper-o" aria-hidden="true"></i>News</a></li>
              <li><a href="login.php"><i class="fa fa-video-camera" aria-hidden="true"></i>Video</a></li>
              <li><a href="login.php"><i class="fa fa-product-hunt" aria-hidden="true"></i>Product</a></li>
              <li><a href="about.php"><i class="fa fa-address-book" aria-hidden="true"></i>About</a></li>
              <li class="log in"><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i>LOG IN</a></li>
              <li class="sign up"><a href="register.php"><i class="fa fa-sign-in" aria-hidden="true"></i> SIGN UP</a></li>
        </ul>
      </div>
    </div>
</div> 
<div class="home"></div>
<div class="box">
    <h2>HELP ME</h2>
    <form>
        <div class="inputBox">

        <input type="tel" placeholder="Phone Number" name="phone" value="<?php echo $_POST['fpn']; ?>" required>
        </div>
        <div class="inputBox">
        <input type="text" placeholder="Enter Your Address" value="<?php echo $_POST['fa']; ?>" required>
        </div>
        <?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="submit" method="post" enctype="multipart/form-data">

           <input type="file"  name="my_image">
           <br>
           <br>
           <button id="fix" type="submit"  name="submit" value="Upload">Submit</button>
     </form>
        <br>
    </form>
</div> 


 
</body>
</html>