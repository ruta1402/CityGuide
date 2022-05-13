<?php

session_start();

include "connection.php";

$name=$_POST['name'];
$url=$_POST['link'];
$address=$_POST['address'];
$cuisine=$_POST['cuisine'];
$type=$_POST['type'];
$price=$_POST['price'];



$sql1="INSERT INTO restaurants (name,url,region,cuisine,type,price,rating)VALUES('$name','$url','$address','$cuisine','$type','$price','0')";
mysqli_query($conn,$sql1);

header("location:userprofile.php");
?>