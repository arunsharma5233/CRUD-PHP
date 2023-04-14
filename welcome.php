<?php

require_once("config.php");
session_start();
echo"Hi ".$_SESSION["name"];
echo "<br>";
echo "Your email is =>  ". $_SESSION["email"];
echo "<br>";
echo " and your password is => ". $_SESSION["password"];
// if(isset($_POST['logout'])){

// SESSION_unset();
// SESSION_destroy();
// header("location:login.php");
// exit();
// }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
    <h1>ADMIN DASHBOARD</h1>
    <form method="post" action="welcome.php">
 <a href="logout.php"> <button   type="button"   class="btn btn-danger"  name="logout">logout</button></a>
</form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</body>
</html>