<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

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

    <div class="heading" style="background:url(images/mum1.jpg) no-repeat">
        <h1>about us</h1>
    </div>

    <!-- about section starts  -->

    

    <section class="home-packages">

        <div class="box-container">
            <div class="box">
                <div class="content">
                    <h1>Total Users<br>

                        <?php

                                 include "connection.php";

                                    $sql1="SELECT count(id) FROM userlist";

                                    $result=mysqli_query($conn,$sql1);


                                    $row = mysqli_fetch_array($result);
                                    echo $row[0];

                     ?>
                    </h1>
                </div>
            </div>
            <div class="box">
                <div class="content">
                    <h1>Total Hotels<br>

                        <?php

                                include "connection.php";

                                  $sql1="SELECT count(name) FROM hotels";

                                  $result=mysqli_query($conn,$sql1);


                                  $row = mysqli_fetch_array($result);
                                  echo $row[0];

                              ?>
                    </h1>
                </div>
            </div>
            <div class="box">
                <div class="content">
                    <h1>Total Places<br>

                        <?php

                                include "connection.php";

                                  $sql1="SELECT count(name) FROM places";

                                  $result=mysqli_query($conn,$sql1);


                                  $row = mysqli_fetch_array($result);
                                  echo $row[0];

                              ?>
                    </h1>
                </div>
            </div>

            <div class="box" style="width:600px;">
                <div class="content">
                    <h1>Hotels<br>

                        <?php 
                                include "connection.php";
                                
                                
                                $query = $conn->query("
                                SELECT 
                                type as monthname,
                                COUNT(name) as amount
                                FROM restaurants
                                GROUP BY type
                                HAVING type<>'none'
                                ");

                                foreach($query as $data)
                                {
                                  $month[] = $data['monthname'];
                                  $amount[] = $data['amount'];
                                }

                              ?>


                        <div style="width: 500px;">
                            <canvas id="myChart"></canvas>
                        </div>

                        <script>
                        // === include 'setup' then 'config' above ===
                        const labels = <?php echo json_encode($month) ?>;
                        const data = {
                            labels: labels,
                            datasets: [{
                                label: 'Types of Restaurants',
                                data: <?php echo json_encode($amount) ?>,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(255, 159, 64, 0.2)',
                                    'rgba(255, 205, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(201, 203, 207, 0.2)'
                                ],
                                borderColor: [
                                    'rgb(255, 99, 132)',
                                    'rgb(255, 159, 64)',
                                    'rgb(255, 205, 86)',
                                    'rgb(75, 192, 192)',
                                    'rgb(54, 162, 235)',
                                    'rgb(153, 102, 255)',
                                    'rgb(201, 203, 207)'
                                ],
                                borderWidth: 1
                            }]
                        };

                        const config = {
                            type: 'bar',
                            data: data,
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            },
                        };

                        var myChart = new Chart(
                            document.getElementById('myChart'),
                            config
                        );
                        </script>

                    </h1>
                </div>
            </div>




        </div>




    </section>

    <!-- about section ends -->

















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