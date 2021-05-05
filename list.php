<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry</title>
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

    a {
        color: #FFF;
        text-decoration: none;
        cursor: pointer;
    }

    a:hover {
        border: 2px solid rgba(255, 255, 255, 1);
        text-decoration: none;
        color: #797979;
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

    table {
        text-align: center;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .tambah {
        text-align: center;
        position: absolute;
        left: 50%;
        top: 41%;
        transform: translate(-50%, -50%);
    }

    .a {
        position: absolute;
        left: 43%;
        top: 35%;
    }

    .menu-container {
        font-family: 'Didact Gothic';
        border: none;
        display: inline-block;
        position: absolute;
        top: 4em;
        right: 3em;
        font-size: 30px;
        color: #797979;
        text-decoration: none;
        cursor: pointer;
        list-style: none;
    }

    .menu-container a:hover {
        text-decoration: none;
        border: none;
        cursor: pointer;
        color: #797979;
    }
    </style>
</head>

<body>
    <h2>Laundry</a></h2>
    <div class="menu-container">
        <li><a href="index.php">Logout</a> </li>
    </div>
    <div class="container">
        <form method="GET" action="index.php">
            <div class="a">
                <input name="q" type="text">
                <button type="submit">Cari</button>
            </div>
            <a class="tambah" href="index.php?action=add">Tambah</a>
        </form>
        <?php
            include "config_db.php";
            if(isset($_GET["q"])){
                $sql = "select * from pesan where nama like '%".$_GET["q"]."%'";
            }
            else {
                $sql = "select * from pesan";
            }
            if ($result = mysqli_query($conn,$sql)) {
                //cek jumlah data
                if ($result->num_rows>0) {
                    echo "<table>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['nama']."</td>";
                        echo "<td>".$row['kategori']."</td>";
                        echo "<td>".$row['pesanan']."</td>";
                        echo "<td>"."<a href='index.php?action=edit&id=".$row['id']."'>Ubah</a>";
                        echo "<td>"."<a href='index.php?action=delete&id=".$row['id']."'>Delete</a>";                        
                        echo "</tr>";
                    }
                    echo "</table>";
                }
            }
        ?>
    </div>
</body>

</html>