<?php include "config.php"; ?>
<html>
<head>
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
                <li><a href="indexf.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                <li><a href="news.php"><i class="fa fa-newspaper-o" aria-hidden="true"></i> News</a></li>
                <li><a href="video.php"><i class="fa fa-video-camera" aria-hidden="true"></i> Video</a></li>
                <li><a href="product.php"><i class="fa fa-product-hunt" aria-hidden="true"></i> Product</a></li>
                <li><a href="aboutf.php"><i class="fa fa-address-book" aria-hidden="true"></i> About</a></li>
                <li><a href="logout.php"><i class="fa fa-user" aria-hidden="true"></i> LOG OUT</a></li>
          </ul>
        </div>
     </div>
  </div> 


 

     <div class="nwes pd-y">
      <div class="section-header">
        <h3 class="section-title">read the news</h3>
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
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['img'] ).'" width="100%" class="img-thumnail" />  
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
                      $meaning = substr($row['imgs'], 0, 160);
                      echo $meaning.'.....';
                      }
               ?>
            </p>
             <a href="https://www.egypttoday.com/Article/1/111234/Egypt-expresses-sincere-condolences-to-Bangladesh-for-victims-of-ferry" class="news-link">read more</a>
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
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['img'] ).'" width="100%" class="img-thumnail" />  
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
                      echo $meaning.'.....';
                      }
               ?>
            </p>
              <a href="https://www.egypttoday.com/Article/1/108295/In-Pics-Fire-in-Alex-waterfront-restaurant-controlled" class="news-link">read more</a>
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
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['img'] ).'" width="100%" class="img-thumnail" />  
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
                      $meaning = substr($row['imgs'], 0, 160);
                      echo $meaning.'.....';
                      }
               ?>
            </p>
              <a href="https://www.egypttoday.com/Article/1/101485/In-pics-Huge-fire-at-church-in-Giza-under-control" class="news-link">read more</a>
            </div>
           </div>
       </div>
     </div>
    </div>

</div>
</div>    
</div>


<div class="nwes pd-y">
  
 <div class="container">
    <div class="news-content">
      <div class="news-item">
       <div class="news-item-img">
       <?php  
                $login = "SELECT * FROM news WHERE code=6";  
                $result = mysqli_query($conn, $login);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['img'] ).'" width="100%" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
            ?>
       </div>
       <div class="news-info">
         <h3 class="news-title">
              <?php
                     $login = "SELECT * FROM news WHERE code=6";  
                     $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = $row["imgt"];
                      echo $meaning;
                      }
               ?>
               </h3>
            <p class="news-desc">
            <?php
                     $login = "SELECT * FROM news WHERE code=6";  
                    $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = substr($row['imgs'], 0, 160);
                      echo $meaning.'.....';
                      }
               ?>
            </p>
         <a href="https://www.egypttoday.com/Article/1/97018/Prosecution-detains-man-accused-of-burning-shops-in-downtown-Cairo" class="news-link">read more</a>
       </div>
      </div>
      <div class="news-item mg">
        <div class="news-item-img">
        <?php  
                $login = "SELECT * FROM news WHERE code=7";  
                $result = mysqli_query($conn, $login);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['img'] ).'" width="100%" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
            ?>
        </div>
        <div class="news-info">
          <h3 class="news-title">
              <?php
                     $login = "SELECT * FROM news WHERE code=7";  
                     $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = $row["imgt"];
                      echo $meaning;
                      }
               ?>
               </h3>
            <p class="news-desc">
            <?php
                     $login = "SELECT * FROM news WHERE code=7";  
                    $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = substr($row['imgs'], 0, 160);
                      echo $meaning.'.....';
                      }
               ?>
            </p>
          <a href="https://www.egypttoday.com/Article/1/96416/Fire-breaks-out-in-pharmaceutical-warehouse-in-downtown-Cairo" class="news-link">read more</a>
        </div>
       </div>
       <div class="news-item">
        <div class="news-item-img">
        <?php  
                $login = "SELECT * FROM news WHERE code=8";  
                $result = mysqli_query($conn, $login);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['img'] ).'" width="100%" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
            ?>
        </div>
        <div class="news-info">
          <h3 class="news-title">
              <?php
                     $login = "SELECT * FROM news WHERE code=8";  
                     $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = $row["imgt"];
                      echo $meaning;
                      }
               ?>
               </h3>
            <p class="news-desc">
            <?php
                     $login = "SELECT * FROM news WHERE code=8";  
                    $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = substr($row['imgs'], 0, 160);
                      echo $meaning.'.....';
                      }
               ?>
            </p>
          <a href="https://www.egypttoday.com/Article/1/90427/Pics-Huge-fire-breaks-out-at-market-in-UAE%E2%80%99s-Ajman" class="news-link">read more</a>
        </div>
       </div>
   </div>
 </div>
</div>
</div>
</div>    
</div>





<div class="h-news pd-y ">
  <div class="section-header">
    <h3 class="section-title">Latest News</h3>
    <span class="line"></span>
 </div>
  <div class="container">        
  <div class="h-news-content">
       <div class="h-news-item ltr-effect">
         <i class="icon fa fa-newspaper-o fa-2x" aria-hidden="true"></i>
         <h3 class="h-news-item-title">
              <?php
                     $login = "SELECT * FROM news WHERE code=9";  
                     $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = $row["imgt"];
                      echo $meaning;
                      }
               ?>
               </h3>
            <p class="h-news-item-desc">
            <?php
                     $login = "SELECT * FROM news WHERE code=9";  
                    $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                        $meaning = ($row['imgs']);
                        echo $meaning;
                      }
               ?>
            </p>
       </div>
       <div class="h-news-item mg ltr-effect">
         <i class="icon fa fa-newspaper-o fa-2x" aria-hidden="true"></i>
         <h3 class="h-news-item-title">
              <?php
                     $login = "SELECT * FROM news WHERE code=10";  
                     $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = $row["imgt"];
                      echo $meaning;
                      }
               ?>
               </h3>
            <p class="h-news-item-desc">
            <?php
                     $login = "SELECT * FROM news WHERE code=10";  
                    $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                        $meaning = ($row['imgs']);
                        echo $meaning;
                      }
               ?>
            </p>
       </div>
       <div class="h-news-item ltr-effect">
         <i class="icon fa fa-newspaper-o fa-2x" aria-hidden="true"></i>
         <h3 class="h-news-item-title">
              <?php
                     $login = "SELECT * FROM news WHERE code=11";  
                     $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = $row["imgt"];
                      echo $meaning;
                      }
               ?>
               </h3>
            <p class="h-news-item-desc">
            <?php
                     $login = "SELECT * FROM news WHERE code=11";  
                    $result = mysqli_query($conn, $login);
                      while( $row = mysqli_fetch_array($result) ){
                      $meaning = ($row['imgs']);
                      echo $meaning;
                      }
               ?>
            </p>
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