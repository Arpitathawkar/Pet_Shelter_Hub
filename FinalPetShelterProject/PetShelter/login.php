<?php
require("./connection.php");
if (isset($_POST['login'])) 
{
	$Email=$_POST['Email'];
    $Password=$_POST['Password'];
    $query="SELECT ID FROM user_register WHERE Email='$Email' and Password='$Password'";
    $result=mysqli_query($con,$query);
    if (mysqli_num_rows($result)>0) 
    {
    	// code...
    	$row = mysqli_fetch_assoc($result);
    	session_start();
    	$_SESSION['ID']=$row['ID'];
    	header('location:dashboard.php');
    }else
    {
    	echo '<script type ="text/JavaScript">';  
		echo 'alert("Email is not registered, please register")';  
		echo '</script>'; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PetShelter</title>
	<link rel="stylesheet" type="text/css" href="./CSS/SignUp.css">
</head>
<body> 
	    <!--<img src="./IMAGES/Slider_Image6.jpg">-->
		<header>
			<h1 class="logo">PetShelter</h1>
            <nav class="navigation">
			<a href="index.php">Home</a>
			     <a href="Services.php">Services</a>
				 <a href="About.php">About</a>
			     <a href="Contact.php">Contact</a> 
			     
			     
			</nav>
		</header>
		 
			 <div class="formbox">
			 	<div class="formcontainer">
			 		<div class="topHeader">
			 			<h1>Login</h1>
			 		</div>
					
					<form action="" method="POST">
					
					<div class="input-box">
						<span class="icon"><ion-icon name="mail"></ion-icon></span>
						<input type="email" name="Email" required>
					    <label>Email</label>	
					</div>
					<div class="input-box">
						<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
						<input type="password" name="Password" required>
					    <label>Password</label>	
					</div>
					<div class="remember-forgot">
						<label><input type="checkbox" name="">Remember me</label>
						<!--<a href="#">Forgot Password?</a>-->
					</div>
					<button type="submit" class="btn" name="login">Login</button>
					<div class="login-register">
						<p>Don't have an account?<a href="SignUp.php" class="register-link"> Register</a></p>
					</div>
				    </form>
				</div>
			</div>
		
			<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>