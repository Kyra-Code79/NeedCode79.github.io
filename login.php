<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    body {
        margin: 0px;
        padding: 0px;
        background: #111111;
        font-family: 'Didact Gothic', sans-serif;
        font-size: 12pt;
        font-weight: 200;
        color: #FFF;
    }

    form {
        text-align: center;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    p {
        text-align: center;
        position: absolute;
        left: 47%;
        top: 30%;
    }

    h2 {
        position: absolute;
        top: 2em;
        left: 5%;
        font-size: 2.6em;
        color: #797979;
        text-decoration: none;
        cursor: pointer;
    }

    input {
        background: 0;
        width: 200px;
        outline: none;
        border: none;
        border-bottom: 2px solid rgba(255, 255, 255, 0.3);
        margin: 20px 0;
        padding-bottom: 10px;
        font-size: 18px;
        font-weight: bold;
        color: rgba(255, 255, 255, 0.8);
    }

    input[type="submit"] {
        border: none;
        border-radius: 8px;
        padding-bottom: 0;
        height: 60px;
        background: #df2359;
        cursor: pointer;
        transition: background-color .3s;
    }

    input[type="submit"]:hover {
        background: #c0392b;
    }

    table {
        text-align: center;
        position: absolute;
        left: 50%;
        top: 75%;
        transform: translate(-50%, -50%);
    }

    table a {
        color: #FFF;
        text-decoration: none;
        cursor: pointer;
    }

    table a:hover {
        border: 2px solid rgba(255, 255, 255, 1);
        text-decoration: none;
        color: #797979;
    }

    .tambah {
        text-align: center;
        position: absolute;
        left: 48%;
        top: 67%;
        border: none;
        text-decoration: none;
        color: #797979;
    }

    .tambah:hover {
        text-decoration: none;
        color: #FFF;
    }
    </style>
</head>

<body>
    <h2>Laundry Login</h2>
    <div class="login_box">
        <form action="log.php" method="POST">
            <input type="text" class="name" placeholder="Username" name="user" required><br>
            <input type="Password" class="pwd" placeholder="Password" name="password" required><br>
            <input type="submit" class="login" value="Login">
        </form>
        <a class="tambah" href="index.php?action=adduser">Tambah</a>
        <?php
            include "config_db.php";
            if(isset($_GET["p"])){
                $sql = "select * from admin where user like '%".$_GET["p"]."%'";
            } 
            else{
                $sql = "select * from admin";
            }
            if($result = mysqli_query($conn,$sql)){
                //Cek jumlah data
                if($result->num_rows>0){
                    echo "<table>";
                    while($row = $result->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['user']."</td>";
                        echo "<td>".$row['password']."</td>";
                        echo "<td>"."<a href='index.php?action=edituser&id=".$row['id']."'>Ubah</a>";
                        echo "<td>"."<a href='index.php?action=deleteuser&id=".$row['id']."'>Delete</a>";                        
                        echo "</tr>";
                    }
                    echo "</table>";
                }
            }
         ?>
    </div>
</body>

</html>