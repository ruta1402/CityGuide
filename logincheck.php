<?php

session_start();

$servername = "localhost";
$username = "root"; //default user name is root
$password = ""; //default password is blank
$dbname="miniproject";

$conn = mysqli_connect($servername, $username, $password,$dbname);

$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$confpassword=$_POST['confirm_password'];


$sql1="SELECT * FROM userlist WHERE username='$username' AND password_='$password'";
$result1=mysqli_query($conn,$sql1);



if($result1)
{
    setcookie('username',$username,time()+60*60*2);//2 days
    setcookie('password',$password,time()+60*60*2);//2days
    
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    
    if($username=='admin')
    {
        header('location: admin.php');
    }
    else
    {
        header("location: home.php");
    }
}
else
{
        header("location: login.php");
}









?>