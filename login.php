<?php 



include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location:indexf.php");
	} else {
		echo '<p align="center">Wrong Password or Email</p>';
	}
}
?>


<html>
<head>
<meta charset="utf-8"/>
<meta name="description" content="welcome to our site"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>log in</title>
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
            <h2><i class="fa fa-user" aria-hidden="true"></i>log in</h2>
            <form action="" method="POST" class="login-email">
              <div class="inputBox">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
              </div>
              <div class="inputBox">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
              </div>
              <div class="inputBox">
                <button name="submit" class="btn" >Login</button>
              </div>
            </form>
        </div> 


         
</body>

</html>