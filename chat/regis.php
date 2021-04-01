<?php
  include "koneksi.php";
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="../css/regis.css">
</head>
<body>
    <form action="" method="post">
    <h2>Registrasi</h2>
    <input class="input" type="text" placeholder="Username" name="usename" required>
    <input class="input" type="password" placeholder="password" name="password" required>
    <button type="submit" name="button" name="btnlogin">Daftar</button>
    </form>
</body>
</html>
