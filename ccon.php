<?php
$qwea=$_POST['emmm'];
$qwbt=$_POST['paqqs'];

$conn=mysqli_connect("localhost","root","udhai","proj");

if(!conn)
{
    echo "not connected";
}
else
   {
       echo "connected    ";
   }
$sql= "INSERT INTO signup(email,passwd) VALUES ('$qwea','$qwbt')";

if(!mysqli_query($conn,$sql))
{
    echo "not inserted";
}
else
{
  echo "inserted";
}


 ?>