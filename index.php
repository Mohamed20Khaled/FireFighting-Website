<?php include "config.php"; ?>

<html>
<head>
<!-- Begin Disable back using javascript -->
<script type = "text/javascript" >
  function preventBack(){window.history.forward();}
   setTimeout("preventBack()", 0);
   window.onunload=function(){null};
</script>
<!-- End Disable back using javascript -->
<meta charset="utf-8"/>
<meta name="description" content="welcome to our site"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<!-- home section -->
   <div class="home">
      <div class="home-content">
            <h2 class="title">welcome  to website</h2>
                 <p class="home-des">
                 If you need help, click the button below and fill in the information
                </p>
               <button class="btn btn-help hover-opacity"><a href="helpme.php">help me</a></button>
      </div>
   </div>

    <!-- news section -->
    <div class="nwes pd-y">
      <div class="section-header">
        <h3 class="section-title">News</h3>
        <span class="line"></span>
     </div>

     <div class="container">
        <div class="news-content">
          <div class="news-item">
           <div class="news-item-img">
           <?php  
                $login = "SELECT * FROM news WHERE code=1";  
                $result = mysqli_query($conn, $login);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['img'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
            ?>
             </div>
           <div class="news-info">
            <h3 class="news-title">
            <?php
                     $login = "SELECT * FROM news WHERE code=1";  
                    $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = $row["imgt"];
                      echo $meaning;
                      }
               ?>
            </h3>
            <p class="news-desc">
             <?php
                     $login = "SELECT * FROM news WHERE code=1";  
                     $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning=substr($row['imgs'], 0, 160);
                      echo $meaning;
                      }
                      ?>
             </p>
             <a href="login.php" class="news-link">News Page</a>
           </div>
          </div>
          <div class="news-item mg">
            <div class="news-item-img">
            <?php  
                $login = "SELECT * FROM news WHERE code=4";  
                $result = mysqli_query($conn, $login);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['img'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
                ?>
            </div>
            <div class="news-info">
             <h3 class="news-title">
             <?php
                     $login = "SELECT * FROM news WHERE code=4";  
                    $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = $row["imgt"];
                      echo $meaning;
                      }
               ?>
             </h3>
             <p class="news-desc">
             <?php
                     $login = "SELECT * FROM news WHERE code=4";  
                     $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = substr($row['imgs'], 0, 160);
                      echo $meaning;
                      }
                      ?>
             </p>
              <a href="login.php" class="news-link">News Page</a>
            </div>
           </div>
           <div class="news-item">
            <div class="news-item-img">
            <?php  
                $login = "SELECT * FROM news WHERE code=5";  
                $result = mysqli_query($conn, $login);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['img'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
                ?>
            </div>
            <div class="news-info">
             <h3 class="news-title">
               <?php
                     $login = "SELECT * FROM news WHERE code=5";  
                    $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = $row["imgt"];
                      echo $meaning;
                      }
               ?>
              </h3>
             <p class="news-desc">
             <?php
                     $login = "SELECT * FROM news WHERE code=5";  
                     $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning=substr($row['imgs'], 0, 160);
                      echo $meaning;
                      }
                      ?>
             </p>
             <a href="login.php" class="news-link">News Page</a>
            </div>
           </div>
       </div>
     </div>
    </div>

    <!-- videos section -->
    <div class="h-video pd-y">
      <div class="container">
        <div class="h-video-item">
          <div class="section-header">
          <h3 class="section-title">Firefighter injured in Coastal Fire that burned at least 24 homes in Laguna Niguel</h3>
            <span class="line"></span>
            <p class="h-video-item-desc">
          KTLA has been keeping Southern Californians informed since 1947.
          Here you will find clips from the KTLA 5 Morning News and other daily newscasts.
          Subscribe to our channel for breaking news and live video from Southern California, including police pursuits, wildfires and much more.
          </p>
            </div> 
        </div>
        <div class="h-video-item">
        <div class="h-video-item-video">
        <video src="videos/1.mp4" width="750px" controls  poster="images/videos/1.jpg">  </video>
        </div>
        
        </div>
        <div class="clear"></div>
      </div>
    </div>
     <!-- number section -->
     <div class="numbers">
      <div class="overlay">
        <div class="container">
         <div class="numbers-items">
          <div class="number-item">
            <i class="icon fa fa-user fa-2x"></i>
            <h4 class="number-item-title">1120</h4>
            <span class="number-item-text">Survival Case</span>
          </div>
          <div class="number-item">
            <i class="icon fa fa-trophy fa-2x"></i>
            <h4 class="number-item-title">320</h4>
            <span class="number-item-text">Success</span>
          </div>
          <div class="number-item"> 
            <i class="icon fa fa-coffee fa-2x"></i>
            <h4 class="number-item-title">96</h4>
            <span class="number-item-text">Special Thanks</span>
          </div>
          <div class="number-item">
            <i class="icon fa fa-file fa-2x"></i>
            <h4 class="number-item-title">531</h4>
            <span class="number-item-text">Closed Case</span>
          </div>

         </div>
        </div>
      </div>
     </div>


    <!-- product section -->
    <div class="h-product pd-y">
          <div class="section-header">
            <h3 class="section-title">FireFighter Products</h3>
            <span class="line"></span>
          </div>
              <div class="container">
                <div class="h-product-content">
                  <div class="h-product-item">
                  <?php  
                $login = "SELECT * FROM product WHERE code=3";  
                $result = mysqli_query($conn, $login);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['imgp'] ).'" height="300" width="200" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
                ?>
                <div class="product-layer">
                <div class="layer-info">
                <span class="cat">
                    <?php
                     $login = "SELECT * FROM product WHERE code=3";  
                     $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = $row["pt"];
                      echo $meaning;
                      }
               ?>
               </span>
            <h4 class="product-layer-title">
              <?php
                     $login = "SELECT * FROM product WHERE code=3";  
                     $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = $row["ps"];
                      echo $meaning;
                      }
               ?>
                </div>
                </div>
              </div>
              <div class="h-product-item mg">
              <?php  
                $login = "SELECT * FROM product WHERE code=4";  
                $result = mysqli_query($conn, $login);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['imgp'] ).'" height="300" width="200" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
                ?>
                <div class="product-layer">
                  <div class="layer-info">
                  <span class="cat">
                    <?php
                     $login = "SELECT * FROM product WHERE code=4";  
                     $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = $row["pt"];
                      echo $meaning;
                      }
               ?>
               </span>
            <h4 class="product-layer-title">
              <?php
                     $login = "SELECT * FROM product WHERE code=4";  
                     $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = $row["ps"];
                      echo $meaning;
                      }
               ?>
                  </div>
                  </div>
              </div>
              <div class="h-product-item">
              <?php  
                $login = "SELECT * FROM product WHERE code=5";  
                $result = mysqli_query($conn, $login);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['imgp'] ).'" height="300" width="200" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
                ?>
                <div class="product-layer">
                  <div class="layer-info">
                  <span class="cat">
                    <?php
                     $login = "SELECT * FROM product WHERE code=5";  
                     $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = $row["pt"];
                      echo $meaning;
                      }
               ?>
               </span>
            <h4 class="product-layer-title">
              <?php
                     $login = "SELECT * FROM product WHERE code=5";  
                     $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = $row["ps"];
                      echo $meaning;
                      }
               ?>
                  </div>
                  </div>
        </div>
      </div>
    </div>

    <!-- footer section -->
    <div class="footer">
      <img src="images/logo-alt.webp" alt="">
      <ul class="footer-links">
        <li><a href="#"class="hover-opacity"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"class="hover-opacity"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"class="hover-opacity"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"class="hover-opacity"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#"class="hover-opacity"><i class="fa fa-youtube"></i></a></li>
        <li><a href="#"class="hover-opacity"><i class="fa fa-linkedin"></i></a></li>
      </ul>
      <p class="copyright">copyright &copy; 2022 . all right reserved by <span class="f">FireFighter team</span> </p>
    </div>

  
</body>

</html>