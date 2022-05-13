<?php
session_Start();

include "connection.php";

if(!isset($_SESSION['username']))
{
    header("location: login.php");
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stay</title>

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
   


        <section class="home-packages">

            <h1 class="heading-title"></h1>

            <div class="box-container">

                <div class="box" style="flex:auto">

                    <div class="content">
                    
                        <?php 
        
                            $name=$_POST['name'];
                            $table=$_POST['category'];
                            
                            if($table=='hotels')
                            {
                                $sql1="SELECT * FROM hotels WHERE name='$name'";
                                $result1=mysqli_query($conn,$sql1);
                                if(mysqli_num_rows($result1)>0)
                                {
                                    $row1=mysqli_fetch_array($result1);

                                    echo "<h3 class='heading-title'>".$row1['name']."</h3>";
                                   
                                    echo "<br><img src='".$row1['image']."' height=300 width=400>";
                                    

                                }

                                echo"
                                </div></div>
                                <div class='box' style='flex:auto'>

                                    <div class='content'>
                                ";


                                echo"
                                <form method='post' action='addreview.php' class='book-form'>
                                <div class='input-box'>
                                Review : 
                                <input type='text' style='border:solid 1px black;' name='textreview'></div>
                                <div class='input-box'>
                                <br>
                                Rating : 
                                <input type='number' style='border:solid 1px black;' name='rating' max=5 min=0></div>
                                <br>
                                <input type='hidden' name='name' value='".$name."'>
                                <input type='hidden' name='category' value='hotels'>

                                <input type='submit' name='add'>
                                
                                </form><br>
                                ";

                                $sql2="SELECT * FROM reviews WHERE name='$name'";
                                
                                $result2=mysqli_query($conn,$sql2);
                                if(mysqli_num_rows($result2)>0)
                                {
                                    
                                    while($row2=mysqli_fetch_array($result2))
                                    {
                                        echo "<h1>".$row2['username']."</h1>";
                                        echo " reviewed <br>";
                                        echo $row2['rating'];
                                        echo "<br>";
                                        echo $row2['textreview'];
                                    }
                                }
                                else
                                {
                                    echo "no reviews";
                                }
                                

                            }

                            if($table=='restaurants')
                            {
                                $sql1="SELECT * FROM restaurants WHERE name='$name'";
                                $result1=mysqli_query($conn,$sql1);
                                if(mysqli_num_rows($result1)>0)
                                {
                                    $row1=mysqli_fetch_array($result1);

                                    echo "<h3 class='heading-title'>".$row1['name']."</h3>";
                                    echo "<img src='images/".$row1['type'].".jpg' height=300 width=400>";
                                    
                                }

                                echo"
                                </div></div>
                                <div class='box' style='flex:auto'>

                                    <div class='content'>
                                ";


                                echo"
                                <form method='post' action='addreview.php' class='book-form'>
                                <div class='input-box'>
                                Review : 
                                <input type='text' style='border:solid 1px black;' name='textreview'></div>
                                <div class='input-box'>
                                <br>
                                Rating : 
                                <input type='number' style='border:solid 1px black;' name='rating' max=5 min=0></div>
                                <br>
                                <input type='hidden' name='name' value='".$name."'>
                                <input type='hidden' name='category' value='hotels'>

                                <input type='submit' name='add'>
                                
                                </form><br>
                                ";

                                $sql2="SELECT * FROM reviews WHERE name='$name'";
                                
                                $result2=mysqli_query($conn,$sql2);
                                if(mysqli_num_rows($result2)>0)
                                {
                                    
                                    while($row2=mysqli_fetch_array($result2))
                                    {
                                        echo "<h1>".$row2['username']."</h1>";
                                        echo " reviewed <br>";
                                        echo $row2['rating'];
                                        echo "<br>";
                                        echo $row2['textreview'];
                                    }
                                }
                                else
                                {
                                    echo "no reviews";
                                }
                                

                            }
                            if($table=='places')
                            {
                                $sql1="SELECT * FROM places WHERE name='$name'";
                                $result1=mysqli_query($conn,$sql1);
                                if(mysqli_num_rows($result1)>0)
                                {
                                    $row1=mysqli_fetch_array($result1);

                                    echo "<h3 class='heading-title'>".$row1['name']."</h3>";
                                    echo "<img src='".$row1['image']."' height=300 width=400>";
                                    
                                }

                                echo"
                                </div></div>
                                <div class='box' style='flex:auto'>

                                    <div class='content'>
                                ";


                                echo"
                                <form method='post' action='addreview.php' class='book-form'>
                                <div class='input-box'>
                                Review : 
                                <input type='text' style='border:solid 1px black;' name='textreview'></div>
                                <div class='input-box'>
                                <br>
                               
                                <input type='hidden' name='name' value='".$name."'>
                                <input type='hidden' name='category' value='places'>

                                <input type='submit' name='add'>
                                
                                </form><br>
                                ";

                                $sql2="SELECT * FROM reviews WHERE name='$name'";
                                
                                $result2=mysqli_query($conn,$sql2);
                                if(mysqli_num_rows($result2)>0)
                                {
                                    
                                    while($row2=mysqli_fetch_array($result2))
                                    {
                                        echo "<h1>".$row2['username']."</h1>";
                                        echo " reviewed <br>";
                                        
                                        echo $row2['textreview'];
                                    }
                                }
                                else
                                {
                                    echo "no reviews";
                                }
                                

                            }

                        ?>

                    </div>
                </div>
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