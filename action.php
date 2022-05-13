<?php
include("connection.php");
session_start();
if(isset($_POST['post']))
{
    $rating=$_POST['rate'];
    $name = $_SESSION['name'];
    $query = "UPDATE restaurants SET rating = (rating + '$rating')/2 WHERE name = '$name'";

    echo $rating;
    echo $name;
}


?>