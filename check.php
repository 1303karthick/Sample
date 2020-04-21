<?php
$con = mysqli_connect("localhost","root","udhai","proj");


$ma=$_POST['email'];
$pd=md5($_POST['pas']);


$sql= "INSERT INTO signup1(email,passwd) VALUES ('$ma','$pd')";

if(!mysqli_query($con,$sql))
{
  echo "not inserted";
}
else
{
  header("Location: p2.html");
}


?>