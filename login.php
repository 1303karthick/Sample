<?php
$con = mysqli_connect("localhost","root","udhai","proj");


$ma=$_POST['em'];
$pd=md5($_POST['psw']);


$sql= "select * from signup1 where email='$ma' and passwd='$pd'";
$res=mysqli_query($con,$sql);

$rows=mysqli_num_rows($res);
if($rows==1)
{
  header("Location: home.html");
}
else{
  echo "<script>alert('Password or username is incorrect'); window.open('p2.html','_self');</script>";
}

?>