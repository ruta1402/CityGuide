<?php
session_Start();

include "connection.php";

$name=$_POST['name'];
$table=$_POST['category'];
$textreview=$_POST['textreview'];
$rating=$_POST['rating'];
$username=$_SESSION['username'];

if($textreview!="" || $rating!="")
{
    $sql1="INSERT INTO reviews VALUES('$table','$name','$username','$rating','$textreview')";
    mysqli_query($conn,$sql1);

    if($table=='hotels')
    {
        $sql2="UPDATE hotels SET rating=(rating+'$rating') WHERE name='$name'";
    }


    header("location:home.php");
}
else
{
    header("location:home.php");
}




?>