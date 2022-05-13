<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eat & Drink</title>

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
                </div>
            </div>
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
    <section class="packages">

        <h1 class="heading-title">Eat & Drink</h1>
        <form action="searchedrestaurants.php" method="POST">
    
    <input type="search" name="search" placeholder="Search..." class="search">
    
    <button type="submit" name="submit-search" class="search-btn"><i class="fa fa-search" style="color:white"></i></button>
    
</form>
        <form>

        <div class="sort">
            <button class="dropbtn2">Sort By Price</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="filteredhtl_e&d.php">High to Low</a>
                    <a href="filteredlth_e&d.php">Low to High</a>
                </div>
            </div>
            <div class="dropdown2">
                <button class="dropbtn">Filter</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="filteredtype_e&d.php?type=Casual Dining">Casual Dining</a>
                    <a href="filteredtype_e&d.php?type=Bakery">Bakery</a>
                    <a href="filteredtype_e&d.php?type=Cafe">Cafe</a>
                    <a href="filteredtype_e&d.php?type=Dessert Parlor">Dessert</a>
                    <a href="filteredtype_e&d.php?type=Dhaba">Dhaba</a>
                    <a href="filteredtype_e&d.php?type=Fine Dining">Fine Dine</a>
                    <a href="filteredtype_e&d.php?type=Food Court">Food Court</a>
                    <a href="filteredtype_e&d.php?type=Beverage Shop">Beverage</a>
                    <a href="filteredtype_e&d.php?type=Quick Bites">Quick Bites</a>
                </div>
                </div>
        </form><br><br>

        <div class="box-container">
            <?php 
               include("connection.php");

               $query = "SELECT * FROM restaurants LIMIT 25";
               $result = mysqli_query($conn, $query);
               if(mysqli_num_rows($result)>0)
               {
                     while($rows = mysqli_fetch_array($result))
                     {
                         $_SESSION['name']=$rows['name'];
                        echo"
                                 <div class='box'>
                                    <div class='image'>
                                       <img src='images/".$rows['type'].".jpg'>
                                    </div>
                                    <div class='content'>
                                       <a href=' ".$rows['url']."'>
                                             <h3>".$rows['name']."</h3>
                                       </a>
                                       <p>".$rows['rating']." &nbspRating</p>
                                       <p>".$rows['type']."</p>
                                       <p>".$rows['region']."</p>
                                       <form action='list.php' method='post'>
                                       <input type='hidden' name='name' value='".$rows['name']."'>
                                       <input type='hidden' name='category' value='restaurants'>
                                       <a href='list.php'><input type='submit' class='btn btn-primary' value='reviews' ></a>
                                       </form>
                                    </div>
                                 </div>
                                ";
                     ;}
               ;}
            ?>
        </div>
    </section>

    <!-- home packages section ends -->

    <!-- home offer section starts  -->

    <!-- <section class="home-offer">
   <div class="content">
      <h3>upto 50% off</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section> -->

    <!-- home offer section ends -->

















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

<!-- UPDATE hotels SET rating=(rating+$_POST['rating'])/2   WHERE name=$_SESSION['name'] -->