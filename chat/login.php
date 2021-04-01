<?php
  include "koneksi.php";
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <form action="" method="post">
    <h2>Login</h2>
    <input class="input" type="text" placeholder="Username" name="usename" required>
    <input class="input" type="password" placeholder="password" name="password" required>
    <button type="submit" name="button" name="btnlogin">Masuk</button>
    <a href="regis.php">Belum Punya Akun?</a>
    </form>
</body>
</html>
