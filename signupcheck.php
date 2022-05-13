<?php

session_start();

include "connection.php";

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['pwd'];


$sqln="SELECT MAX(id) FROM userlist";
$resultn=mysqli_query($conn,$sqln);
$rown=mysqli_fetch_array($resultn);
$max=$rown[0]+1;

$sql = "INSERT INTO userlist(id,fname,lname,email,password_,username) values ('$max','$fname','$lname','$email','$password','$username')";
$result = mysqli_query($conn,$sql);
header("location: login.php");










?>