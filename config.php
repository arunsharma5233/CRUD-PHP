<?php
$servername="localhost";
$username="root";
$password="";
$database="demo";

$conn=mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("connection not establish");
}else{
   // echo("connection created succesfullly");
}
?>