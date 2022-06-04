<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$pnumber = $_POST['pnumber'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, pnumber, password)
					VALUES ('$username', '$email', '$pnumber', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo '<p align="center">User Registration Completed</p>';
				$username = "";
				$email = "";
				$pnumber = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo '<p align="center">Woops! Something Wrong</p>';
			}
		} else {
			echo '<p align="center">Email Already Exists</p>';
		}
		
	} else {
		echo '<p align="center">Password Not Matched</p>';
	}
}

?>

<html>
<head>
<meta charset="utf-8"/>
<meta name="description" content="welcome to our site"/>
<title>sign up</title>
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
            <h2><i class="fa fa-sign-in" aria-hidden="true"></i> sign up </h2>
            <form action="" method="POST">
              <div class="inputBox">
                <input type="text" placeholder="Enter Your Name" name="username" value="<?php echo $username; ?>" required>
              </div>
              <div class="inputBox">
                <input type="email" placeholder="Enter Your Email" name="email" value="<?php echo $email; ?>" required>
              </div>
              <div class="inputBox">
                        <input type="phonenumber" placeholder="Enter Your Phone Number" name="pnumber" value="<?php echo $pnumber; ?>" required>
                    </div>
					<div class="inputBox">
                	    <input type="text" placeholder="Enter Your Address" name="address" value="<?php echo $address; ?>" required>
              </div>
              <div class="inputBox">
                <input type="password" placeholder="Enter Your Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                    </div>
                    <div class="inputBox">
                <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
              </div>
              <div class="inputBox">
                <button name="submit" class="btn">Sign Up</button>
              </div>
            </form>
        </div> 


        
</body>

</html>