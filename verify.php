<?php
include ("database.php");
$email=mysqli_real_escape_string($conn,$_POST['email']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$qry="SELECT * from infopatient where email='$email' and password='$password'";
$qry1="SELECT * from infodoc where email='$email' and password='$password'";
$res=mysqli_query($conn,$qry);
$res1=mysqli_query($conn,$qry1);
$count=mysqli_num_rows($res);
$count1=mysqli_num_rows($res1);
$data=mysqli_fetch_array($res);
$data1=mysqli_fetch_array($res1);
if($count>0)
{
  header("Location:services.php");
}
else {
  if($count1>0)
  {
    session_start();
    $_SESSION['name']=$data1[0];
    $_SESSION['address']=$data1[1];
    $_SESSION['email']=$data1[3];

    header("Location:doctor.php");
  }
  else
  {
    header("Location:login.php?id=Invalid Details Entered..");
  }

}

 ?>
