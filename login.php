<?php

require_once("config.php");
session_start();

if(isset($_POST['login'])){
 
  $email = $_POST['email'];
  $password = $_POST['password'];
   $sql="SELECT * FROM `demo1` WHERE email='$email'";
   $result= mysqli_query($conn,$sql);

   if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_assoc($result);
    
    if($row['email'] == $email && $row['password'] == $password){
       
      $_SESSION['email'] = $email;
      $_SESSION['password']= $password;
      $_SESSION['name']=$row['name'];
      header("location:welcome.php");
      exit();
    }else{
      echo"wrong password";

      
    }
   


  }else{
   // $_SESSION['error']="Email not found";
    echo"email not found";
  }
  
//    else{

//     session_start();
//     $_SESSION["email"]=$email;
//     $_SESSION["password"]=$password;
//     if($_SESSION["email"]===$_POST["$email"]&& $_SESSION["password"]===$_POST[$password]){
//       header("location:register.php");
//     }
//     //header("location:register.php");
//    }
//  }
//   if(mysqli_num_rows($result)>0){
//     //  while($row=mysqli_fetch_assoc($result)){
//     //   echo($row);
//      echo"email already exits";
//      }
      
    
//   else{
//     header("location:register.php");
//   }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login window</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <style>
  .container{
    border: 3px SOLID green;
    width: 30%;
    margin-top:50px;
    padding-bottom:30px;
    padding-top:30px;
    height: 400px;
    border-radius: 10%;


  }
  h2{
    text-align: center;
    /* color: #2f5fff; */
    /* font-style: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; */
    font-family: "Lucida Console", "Courier New", monospace;

  }
  button{
    margin-top: 25px;
  }
  
  </style>
  <body><?php


    
  if($msg2==1){
      echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Email you enter not exists
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
   ?>
    
    <?php
    // if($msg==1){
    //   echo'<div class="alert alert-danger" role="alert">
    //   Please enter the email and password 
    // </div>';
    // }?>
    <div class="container">
      <div class="row ">
      <div class="col lg-6">
    <h2>LOGIN </h2>
    <form action="login.php" method="post">
  <div class="mb-3 ">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1"  name="email">
</div>

<label for="inputPassword5" class="form-label">Password</label>
<input type="password" id="inputPassword5" name="password" class="form-control" aria-labelledby="passwordHelpBlock">
<div id="passwordHelpBlock" class="form-text" >
  
</div>


<button type="submit" class="btn btn-primary" name="login">login</button>
<a href="register.php"><button type="button"  class="btn btn-success" > Register  account  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
</svg></button></a>

</form>
  </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>