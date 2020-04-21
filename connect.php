<?php
$con = mysqli_connect("localhost","root","udhai","proj");


$ma=$_POST['uname'];
$pd=md5($_POST['password']);


$sql= "INSERT INTO signup1(email,passwd) VALUES ('$ma','$pd')";

if(!mysqli_query($con,$sql))
{
  echo "not inserted";
}
else
{
echo 'inserted';
}


?>