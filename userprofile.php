<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dropdown.css">


    <!-- chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>




</head>

<body>

    <!-- header section starts  -->

    <section class="header">

        <a href="home.php" class="logo">travel.</a>

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
            <a href="logout.php"><button class="btn btn-primary ms-lg-3"><img src="images/logout.png" width="30"
                        height="30">Logout</button></a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <!-- header section ends -->

    <section class="home-packages">

        <h1 class="heading-title"> Profile </h1>

        <div class="box-container">

            <div class="box" style="flex:auto">

                <div class="content">
                    <img src="images/user.png" alt="" class="rounded-circle" width=100px>



                    <?php 
                        include 'connection.php';
                    
                        $uname=$_SESSION['username'];
                        $query = "SELECT * FROM userlist WHERE username='$uname'";
                        $result = mysqli_query($conn, $query);
                        $rows = mysqli_fetch_array($result);

                        echo "<h3>".$rows['fname']." ".$rows['lname']."</h3>";
                        echo "<h3 style='text-transform:none;'>".$rows['email']."</h3>";

                    ?>

                </div>
            </div>
        </div>
    </section>


    <section class="home-packages">

        

        <div class="box-container">

            <div class="box">

                <div class="content">
                    <a href="recommend.php"><h3>Explore based on recommendations</h3></a>
                    
                </div>
            </div>
        </div>

    </section>


    <section class="home-packages">

        <h1 class="heading-title"> actions </h1>

        <div class="box-container">

            <div class="box">

                <div class="content">
                    <h3>hotel</h3>
                    <p>Own a hotel? Add it to the list so everyone can discover!</p>
                    <a href="addhotel.php" class="btn">add</a>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <h3>restaurant</h3>
                    <p>Own a cute cafe or a homecooked foor eatery? Add it to the list so everyone can discover!</p>
                    <a href="addrest.php" class="btn">add</a>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <h3>place</h3>
                    <p>Know a unique place? Add it to the list so everyone can discover!</p>
                    <a href="addplace.php" class="btn">add</a>
                </div>
            </div>

        </div>

    </section>



    <section class="home-packages">

        <h1 class="heading-title"> my reviews </h1>

        <div class="box-container">

            
                    <?php 
                    
                        include "connection.php";
                        $username=$_SESSION['username'];
                        $sql1="SELECT * FROM reviews WHERE username='$username'";
                        $result1=mysqli_query($conn,$sql1);

                        if(mysqli_num_rows($result1)>0)
                        {
                            while($row=mysqli_fetch_array($result1))
                            {
                                echo "

                                <div class='box'>

                                <div class='content'>

                                <h3 class='heading-title'>".$row['name']."</h3>
                                <p>".$row['textreview']."</p>
                                ";
                                if($row['rating']>0)
                                {
                                    echo "<h3 class='heading-title'>".$row['rating']." stars</h3></div></div>";
                                }
                            }
                        }

                    ?>
                
            
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