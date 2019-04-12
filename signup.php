<?php
include ("database.php");
if (isset($_POST['submit']))
{
	$name=$_POST['name'];
	$age=$_POST['age'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$password=$_POST['password'];
	$qry="INSERT INTO infopatient(name,age,address,gender,email,password) values ('$name','$age','$address','$gender','$email','$password')";
	$res=mysqli_query($conn,$qry);
	if ($res)
	{
		header("Location:login.php");
	}
	else
	{
		header("Location:signup.php?id=Something went wrong");
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
      <div id="box">
            <div class="left-box">
                  <img src="user.jpg" class="userimg">
                  <h2>Sign Up</h2>
                  <form action="" method="post">
                        <p>Name</p>
                        <input type="text" placeholder="Enter your Name" name="name" required>
                         <p>Age</p>
                        <input type="text" placeholder="Enter your Age" name="age" required>
                         <p>Address</p>
                        <input type="Address" placeholder="Enter your Address" name="address" required>
                         <p>Gender</p>
                        <select name="gender">
                              <option value="Male">male</option>
                              <option value="Female">female</option>
                        </select>
                        <p>Email Id</p>
                        <input type="Email" placeholder="" ="Email id" name="email" required>
                        <p>Password</p>
                        <input type="Password" placeholder="" ="Password" name="password" required>
                        <!--<input name="submit" type="submit" value="Sign Up" >
                        -->
												<button type="submit" name="submit"> Sign up</button>
												<br>
                        <a href="login.php">Already have an account/ Login</a>
                  </form>
<?php
										if(isset($_GET['id']))
										{
												echo "<h2 style='color:red'>".$_GET['id']."</h2>";
										}
?>
			      </div>

            <div class="right-box">
                  <span class="signinwith">Sign Up With <br> Social Network</span>
                  <button class="social facebook">Login with Facebook</button>
                  <button class="social twitter">Login with Twitter</button>
                  <button class="social google">Login with Google++</button>
            </div>
      </div>
</body>
</html>
