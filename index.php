<?php
    include "config_db.php";
    if(isset($_GET['action'])){
        if($_GET['action'] == 'add'){
            include "add.php";
        }
        else if($_GET['action'] == 'adduser'){
            include "adduser.php";
        }
        else if($_GET['action'] == 'save'){  
            if(!$conn){
                die("Koneksi Error: ");
            }
            $sql="Insert into pesan(nama,kategori,pesanan) values('".$_POST['nama']."','".$_POST['kategori']."','".$_POST['pesanan']."')";
            if(mysqli_query($conn,$sql)){
                header("Location:index.php");
            }
        }
        else if($_GET['action'] == 'saveuser'){
            if(!$conn){
                die("Koneksi Error: ");
            }
            $sql="Insert into admin(user,password) values('".$_POST['user']."','".$_POST['password']."')";
            if(mysqli_query($conn,$sql)){
                header("Location:index.php");
            }
        }
        else if($_GET['action'] == 'edit'){
            include "edit.php";
        }
        else if($_GET['action'] == 'edituser'){
            include "edituser.php";
        }
        else if($_GET['action'] == 'update'){
            $sql="update pesan set nama = '".$_POST['nama']."', kategori = '".$_POST['kategori']."', pesanan = '".$_POST['pesanan']."' where id=".$_POST['id'];
            if(mysqli_query($conn,$sql)){
                header("Location:index.php");
            }
        }
        else if($_GET['action'] == 'updateuser'){
            $sql="update admin set user = '".$_POST['user']."', password = '".$_POST['password']."' where id=".$_POST['id'];
            if(mysqli_query($conn,$sql)){
                header("Location:index.php");
            }
        }
        else if($_GET['action'] == 'delete'){    
            $sql = "delete from pesan where id=".$_GET["id"];
            if(mysqli_query($conn,$sql)){
                header("Location:index.php");
            }       
        }
        else if($_GET['action'] == 'deleteuser'){
            $sql = "delete from admin where id=".$_GET["id"];
            if(mysqli_query($conn,$sql)){
                header("Location:index.php");
            }
        }
    }
    else{
        include "login.php";
    }
      
?>