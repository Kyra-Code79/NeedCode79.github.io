<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

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
        display: inline-block;
        text-align: center;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .data {
        position: absolute;
        text-align: center;
        left: 18%;
        top: -20%;
    }

    .b {
        left: -10%;
        margin-left: 0;
        margin-right: 2em;
    }

    .i {
        margin-left: 0;
        position: center;
        text-align: center;
    }

    .tambah {
        width: 10em;
        height: 2em;
        border: none;
        outline: none;
        background: 0;
        color: rgba(255, 255, 255, 0.8);
        font-size: 18px;
        font-weight: bold;
    }

    .tambah:hover {
        cursor: pointer;
        border: 2px solid rgba(255, 255, 255, 1);
        text-decoration: none;
        color: rgba(255, 255, 255, 1);
    }

    button {
        margin-top: 10%;
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
        color: #fff;
        cursor: pointer;
        transition: background-color .3s;
    }

    input[type="submit"]:hover {
        background: #c0392b;
    }
    </style>
</head>

<body>
    <form action="index.php?action=save" method="post">
        <label class="data" for="nama">Masukkan Data Laundry</label><br>
        <label class="b" name="nama">Nama</label>
        <span><input type="text" class="i" placeholder="Nama" name="nama"></span><br>
        <label class="b">Kategori</label>
        <input type="text" class="i" placeholder="kategori" name="kategori"><br>
        <label class="b">Pesanan</label>
        <input type="text" class="i" placeholder="pesanan" max="50" name="pesanan"><br>
        <button type="submit" value="submit" class="tambah">Tambah</button>
    </form>
</body>

</html>