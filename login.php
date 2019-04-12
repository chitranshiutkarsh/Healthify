
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
      <div class="box">
      	<img src="user.jpg" class="userimg">
      	<h2>Login to your account</h2>
      	<form action="verify.php" method="post">
      		<p>Email</p>
      		<input type="text" placeholder="Enter Email" name="email" required >
      		<p>Password</p>
      		<input type="Password" placeholder="Enter Password" name="password" required >
      		<input type="submit" value="Login">
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
