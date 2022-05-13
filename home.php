<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/dropdown.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">travel</a>

   <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <div class="dropdown"><a href="#">Explore</a>
      <div class="dropdown-content">
         <a href="eat&drink.php">Eat & Drink</a>
         <a href="stay.php">Stay</a>
         <a href="see&do.php">See & Do</a>
         <a href="transport.php">Transport</a>
      </div></div>
      <?php 
            
            if(isset($_SESSION['username']))
            {
                echo "<a href='userprofile.php'>".$_SESSION['username']."</a>";
            }
            else
            {
                echo "<a href='login.php'>Login</a>";
            }

            ?>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/mum1.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>mumbai</h3>
               
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/mum2.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover new places</h3>
               
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/mum3.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>make your tour worthwhile</h3>
               
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/mum3.jpg" >
   </div>

   <div class="content">
      <h3>about mumbai</h3>
      <p>Mumbai is in all ways a mega-city driven by power, wealth, glamour and fame. It is also a city with strong historical links, wonderful British architecture, museums, beaches, places of worship, and above all, a true galaxy of stars where Bollywood reigns supreme. The seven islands that came to constitute Mumbai were earlier home to communities of fishing colonies.The city was renamed Mumbai from Bombay in 1996. And in this short period of development, the city has transformed into the commercial and entertainment capital of India.</p>
      
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> what we offer </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/eat.png" alt="" height=20 width=20>
         </div>
         <div class="content">
            <h3>eat & drink</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="eat&drink.php" class="btn">see more</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/stay.png" alt="">
         </div>
         <div class="content">
            <h3>stay</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="stay.php" class="btn">see more</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/see.png" alt="">
         </div>
         <div class="content">
            <h3>see & do</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="see&do.php" class="btn">see more</a>
         </div>
      </div>

   </div>

</section>

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <!-- <a href="package.php"> <i class="fas fa-angle-right"></i> package</a> -->
         <a href="login.php"> <i class="fas fa-angle-right"></i> login</a>
      </div>


      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +16010120076 </a>
         <a href="#"> <i class="fas fa-phone"></i> +16010120081 </a>
         <a href="#"> <i class="fas fa-phone"></i> +16010120086 </a>
         <a href="#"> <i class="fas fa-envelope"></i> 76_81_86@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> mumbai, india - 400077 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>