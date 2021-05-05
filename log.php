<?php 
    session_start();

    include "config_db.php";
  
    $user = $_POST['user'];
    $pass = $_POST['password'];
    $login = mysqli_query($conn, "select * from admin where user='$user' and password='$pass'");
    $cek = mysqli_num_rows($login);
    if($cek>0){
        $_SESSION["user"] = $user;
        $_SESSION["password"] = $pass;
        header("location:list.php");
    }
    else{
        header("You're not Authorize");
    }
?>