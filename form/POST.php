<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="coba10.php" method="post">
    <label for="username">Username</label><br>
    <input type="text" name="uname"><br>
    <label for="password">Password</label><br>
    <input type="password" name="pass"><br>
    <button type="submit" name="login" value="login">Login</button>
  </form>
</body>
</html>

<?php
// memproses form
$username = $_POST['uname'];
$password = $_POST['pass'];
// tampilkan data jika sudah diproses
$login = $_POST['login'];
if (isset($login)) {
  echo 'Hello '.$username.', password Anda '.$password;
}
?>