<?php include "config.php"; ?>
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
                <li><a href="indexf.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                <li><a href="news.php"><i class="fa fa-newspaper-o" aria-hidden="true"></i> News</a></li>
                <li><a href="video.php"><i class="fa fa-video-camera" aria-hidden="true"></i> Video</a></li>
                <li><a href="product.php"><i class="fa fa-product-hunt" aria-hidden="true"></i> Product</a></li>
                <li><a href="aboutf.php"><i class="fa fa-address-book" aria-hidden="true"></i> About</a></li>
                <li class="log in"><a href="logout.php"><i class="fa fa-user" aria-hidden="true"></i> LOG OUT</a></li>
          </ul>
        </div>
     </div>
  </div> 
  

  <div class="h-product pd-y">
    <div class="section-header">
      <h3 class="section-title">fire protection products</h3>
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
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['imgp'] ).'" width="100%" class="img-thumnail" />  
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
               </h4>
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
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['imgp'] ).'" width="100%" class="img-thumnail" />  
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
               </h4>
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
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['imgp'] ).'" width="100%" class="img-thumnail" />  
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
        <div class="h-product-item">
        <?php  
                $login = "SELECT * FROM product WHERE code=6";  
                $result = mysqli_query($conn, $login);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['imgp'] ).'" width="100%" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
            ?>
        <div class="product-layer">
          <div class="layer-info">
          <span class="cat">
              <?php
                     $login = "SELECT * FROM product WHERE code=6";  
                     $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = $row["pt"];
                      echo $meaning;
                      }
               ?>
               </span>
            <h4 class="product-layer-title">
              <?php
                     $login = "SELECT * FROM product WHERE code=6";  
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
                $login = "SELECT * FROM product WHERE code=7";  
                $result = mysqli_query($conn, $login);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['imgp'] ).'" width="100%" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
            ?>
        <div class="product-layer">
          <div class="layer-info">
          <span class="cat">
              <?php
                     $login = "SELECT * FROM product WHERE code=7";  
                     $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = $row["pt"];
                      echo $meaning;
                      }
               ?>
               </span>
            <h4 class="product-layer-title">
              <?php
                     $login = "SELECT * FROM product WHERE code=7";  
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
                $login = "SELECT * FROM product WHERE code=8";  
                $result = mysqli_query($conn, $login);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['imgp'] ).'" width="100%" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
            ?>
          <div class="product-layer">
            <div class="layer-info">
            <span class="cat">
              <?php
                     $login = "SELECT * FROM product WHERE code=8";  
                     $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = $row["pt"];
                      echo $meaning;
                      }
               ?>
               </span>
            <h4 class="product-layer-title">
              <?php
                     $login = "SELECT * FROM product WHERE code=8";  
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
                $login = "SELECT * FROM product WHERE code=9";  
                $result = mysqli_query($conn, $login);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['imgp'] ).'" width="100%" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
            ?>
            <div class="product-layer">
            <div class="layer-info">
            <span class="cat">
              <?php
                     $login = "SELECT * FROM product WHERE code=9";  
                     $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = $row["pt"];
                      echo $meaning;
                      }
               ?>
               </span>
            <h4 class="product-layer-title">
              <?php
                     $login = "SELECT * FROM product WHERE code=9";  
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
                $login = "SELECT * FROM product WHERE code=10";  
                $result = mysqli_query($conn, $login);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['imgp'] ).'" width="100%" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
            ?>
            <div class="product-layer">
              <div class="layer-info">
              <span class="cat">
              <?php
                     $login = "SELECT * FROM product WHERE code=10";  
                     $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = $row["pt"];
                      echo $meaning;
                      }
               ?>
               </span>
            <h4 class="product-layer-title">
              <?php
                     $login = "SELECT * FROM product WHERE code=10";  
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
                $login = "SELECT * FROM product WHERE code=11";  
                $result = mysqli_query($conn, $login);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['imgp'] ).'" width="100%" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
            ?>
            <div class="product-layer">
              <div class="layer-info">
              <span class="cat">
              <?php
                     $login = "SELECT * FROM product WHERE code=11";  
                     $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = $row["pt"];
                      echo $meaning;
                      }
               ?>
               </span>
            <h4 class="product-layer-title">
              <?php
                     $login = "SELECT * FROM product WHERE code=11";  
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
                $login = "SELECT * FROM product WHERE code=12";  
                $result = mysqli_query($conn, $login);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['imgp'] ).'" width="100%" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
            ?>
          <div class="product-layer">
            <div class="layer-info">
            <span class="cat">
              <?php
                     $login = "SELECT * FROM product WHERE code=12";  
                     $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = $row["pt"];
                      echo $meaning;
                      }
               ?>
               </span>
            <h4 class="product-layer-title">
              <?php
                     $login = "SELECT * FROM product WHERE code=12";  
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
                $login = "SELECT * FROM product WHERE code=13";  
                $result = mysqli_query($conn, $login);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['imgp'] ).'" width="100%" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
            ?>
          <div class="product-layer">
            <div class="layer-info">
            <span class="cat">
              <?php
                     $login = "SELECT * FROM product WHERE code=13";  
                     $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = $row["pt"];
                      echo $meaning;
                      }
               ?>
               </span>
            <h4 class="product-layer-title">
              <?php
                     $login = "SELECT * FROM product WHERE code=13";  
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
                $login = "SELECT * FROM product WHERE code=14";  
                $result = mysqli_query($conn, $login);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['imgp'] ).'" width="100%" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
            ?>
            <div class="product-layer">
              <div class="layer-info">
              <span class="cat">
              <?php
                     $login = "SELECT * FROM product WHERE code=14";  
                     $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = $row["pt"];
                      echo $meaning;
                      }
               ?>
               </span>
            <h4 class="product-layer-title">
              <?php
                     $login = "SELECT * FROM product WHERE code=14";  
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
