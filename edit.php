<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
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

    label {
        text-align: center;
        position: absolute;
        left: 0.3em;
        font-weight: bold;
        font-size: 20px;
        color: rgba(255, 255, 255, 0.8);
        top: -20%;
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
    </style>
</head>

<body>
    <?php 
    $sql = "select * from pesan where id=".$_GET["id"];
    $result = mysqli_query($conn,$sql);
    $row = $result->fetch_assoc();
?>
    <form action="index.php?action=update" method="post">
        <label for="Ubah Kegiatan">Ubah Pesanan Anda</label><br>
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <input type="text" placeholder="Nama" value="<?= $row['nama'] ?>" name="nama"><br>
        <input type="text" placeholder="Kategori" value="<?= $row['kategori']?>" name="kategori"><br>
        <input type="text" placeholder="Pesanan" value="<?= $row['pesanan']?>" name="pesanan"><br>
        <button type="submit" value="submit" class="kegiatan">simpan</button>
    </form>
</body>

</html>