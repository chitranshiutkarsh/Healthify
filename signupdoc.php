<?php
include ("database.php");
if (isset($_POST['submit']))
{
	$name=$_POST['name'];
	$address=$_POST['address'];
	$regisno=$_POST['reg'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$qry="INSERT INTO infodoc(name,address,regisno,email,password) values ('$name','$address','$regisno','$email','$password')";
	$res=mysqli_query($conn,$qry);
	if ($res)
	{
		header("Location:login.php");
	}
	else
	{
		header("Location:signupdoc.php?id=Something went wrong");
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
      <div class="box">
      	<img src="user.jpg" class="userimg">
      	<h2>Doctor's Sign up</h2>
      	<form action="" method="post">
                  <p>Name</p>
                  <input type="text" placeholder="Enter your Name" name="name" required>
                   <p>Address</p>
                  <input type="Address" placeholder="Enter your Address" name="address" required>
                  <p>Registed number</p>
                  <input type="text" placeholder="your Registed number" name="reg" required="">
      		<p>Email</p>
      		<input type="text" placeholder="Enter Email" name="email" required >
      		<p>Password</p>
      		<input type="Password" placeholder="Enter Password" name="password" required >
      		<button type="submit" name="submit">Sign up</button>
      		<a href="a">Forget Password</a>
      	</form>
       </div>
			 <?php
													 if(isset($_GET['id']))
													 {
															 echo "<h2 style='color:red'>".$_GET['id']."</h2>";
													 }
			 ?>
</body>
</html>
