<?php
require_once("config.php");
session_start();
$msg2=0;
$reg=0;
$err=0;

    


if(isset($_POST['submit'])){
            
        $email= $_POST["email"];
        $password=$_POST["password"];
        $cpassword=$_POST["cpassword"];
        $name=$_POST['name'];

        if($_REQUEST['email']=='' || $_REQUEST['password']=='' || $_REQUEST['cpassword']==''|| $_REQUEST['name']='')
        {
         $err=1;
        echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
        please fill the empty field.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        }elseif($_POST["password"]===$_POST["cpassword"]){
            // $_SESSION['password']=$_POST['password'];
              $sql1="SELECT * FROM `demo1` WHERE email='$email'";
              $result= mysqli_query($conn,$sql1);
              $num=mysqli_num_rows($result);
            if($num>0){
           // echo"email already exits";
           exit("email already exits please choose another address..");
            //$msg2=1;
           
              
            }
              //$_SESSION['name']=$name;
                $sql="INSERT INTO `demo1` (`email`, `password`,`name`) VALUES ( '$email', '$password','$name')";
                $result= mysqli_query($conn,$sql);
              //  echo"Registraion succesfully completed ";
                $reg=1;
                // if($result){
                //     echo"data inserted successfully";
                //     header("location:login.php");
                // }
                // else{
                //     echo"data not inserted";
                // }
        }else{
            echo"please enter the same password";
        }
    
        }   



//         if($_REQUEST['email']=='' || $_REQUEST['password']=='' || $_REQUEST['cpassword']=='')
// {
// Echo "please fill the empty field.";
// }
// Else
// {
       
//             $sql="INSERT INTO `demo1` (`email`, `password`) VALUES ( '$email', '$password')";
//             $result= mysqli_query($conn,$sql);
    
//             if($result){
//                 echo"data inserted successfully";
//                 header("location:login.php");
//             }
//             else{
//                 echo"data not inserted";
//             }
//     }

// }     

//         $sql="INSERT INTO `demo1` (`email`, `password`) VALUES ( '$email', '$password')";
//         $result= mysqli_query($conn,$sql);

//         if($result){
//             echo"data inserted successfully";
//         }
//         else{
//             echo"data not inserted";
//         }
// }


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REGISTER window</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>
<style>
  body{
    background-color: gray;
  }
  .container{
    background-color: white;
    border: 3px solid green;
    width: 30%;
    margin-top:70px;
    padding-bottom:30px;
    padding-top:30px;
    border-radius: 5%;


  }
  h2{
    text-align: center;
    /* color: rgba(13,110,253,255); */
    /* font-style: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; */
    font-family: "Lucida Console", "Courier New", monospace;

  }
  button{
    margin-top: 15px;
  }
  </style>
  
   <body>
     <?php
  if($reg==1){
      echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
      Rgistration succesfully completed <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
      <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
      <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
    </svg>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    
    }?> 
   
    <div class="container">
    <h2>REGISTER HERE  </h2>
    <form action="register.php" method="post">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"> Full name </label>
  <input type="text" class="form-control"  name="name" id="exampleFormControlInput1" >
  
  </div>


  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control"  name="email" id="exampleFormControlInput1" >
</div>

<label for="inputPassword5" class="form-label" >Password</label>
<input type="password" id="inputPassword5" class="form-control" name="password" aria-labelledby="passwordHelpBlock">
<div id="passwordHelpBlock" class="form-text">
  
</div>

<label for="inputPassword5" class="form-label" > Confirm Password</label>
<input type="password" id="inputPassword5" class="form-control" name="cpassword" aria-labelledby="passwordHelpBlock">
<div id="passwordHelpBlock" class="form-text">
  
</div>
<button   type="submit"   class="btn btn-primary " name="submit">Submit</button>
<a href="login.php"><button type="button"  class="btn btn-success" > Already have account  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
</svg></button></a>

</form>




</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>