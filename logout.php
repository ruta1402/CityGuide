<?php

    session_start();
    session_destroy();

    if(isset($_COOKIE['username']) and isset($_COOKIE['password']))
    {
        $uname=$_COOKIE['username'];
        $password=$_COOKIE['password'];
        setcookie('username',$uname,time()-1);
        setcookie('password',$password,time()-1);
    }
    
    header("location: home.php");

?>
