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
   <script src="dropdown.js" type="text/javascript"></script>

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

<section class="home-packages">

   <h1 class="heading-title"> how to reach mumbai? </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/air.png" alt="" height=20 width=20>
         </div>
         <div class="content">
            <h3>air</h3>
            <p>Chhatrapati Shivaji International Airport is connected to all major cities and towns in India.</p>
            
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/rail.png" alt="">
         </div>
         <div class="content">
            <h3>rail</h3>
            <p>There are five major railheads in the large city of Mumbai connecting to the vast railway network of India.</p>
            
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/road.png" alt="">
         </div>
         <div class="content">
            <h3>road</h3>
            <p>Mumbai is well connected by good highways and motorable roads with all the major towns and cities in India.</p>
            
         </div>
      </div>

   </div>

</section>

<section class="home-packages">

   <h1 class="heading-title"> how to travel in mumbai? </h1>

   <div class="box-container">
      
            <select class="place" id="place">
                <option selected>Choose...</option>
                <option value="1">Dadar</option>
                <option value="2">Bandra</option>
                <option value="3">Chembur</option>
                <option value="4">Ghatkopar</option>
            </select>
            <input type="button" value="Select" onclick="drpdwn()"></button>
            <br>
            <iframe id="map" src="blank.html" width="650" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            
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


            