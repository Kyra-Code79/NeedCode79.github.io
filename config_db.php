<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "laundry";
    $tbname = "admin";
    $tbname2 = "pesan";

    $conn = mysqli_connect($host,$username,$password,$dbname);
    
    if(!$conn){
        die("");
    }
?>