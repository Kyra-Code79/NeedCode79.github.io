<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <style>

    </style>
</head>

<body>
    <form action="index.php?action=saveuser" method="post">
        <label class="data" for="nama">Masukkan User</label><br>
        <label class="b" name="nama">User</label>
        <span><input type="text" class="i" placeholder="User" name="nama"></span><br>
        <label class="b">Password</label>
        <input type="text" class="i" placeholder="Password" name="kategori"><br>
        <button type="submit" value="submit" class="tambah">Tambah</button>
    </form>
</body>

</html>