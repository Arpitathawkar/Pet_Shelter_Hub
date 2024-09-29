<?php
require("./connection.php");
if (isset($_POST['register'])) 
{
   $Username=$_POST['Username'];
   $Email=$_POST['Email'];
   $Password=$_POST['Password'];
   $ConfirmPass=$_POST['ConfirmPass'];
   $query="INSERT INTO user_register(Username, Email, Password, ConfirmPass)VALUES('$Username','$Email','$Password','$ConfirmPass')";
   $result=mysqli_query($con,$query);
   if ($result) 
   {
   	// code...
   	
    /*//Validates password & confirm passwords.
    if(!empty($_POST["Password"]) && ($_POST["Password"] == $_POST["ConfirmPass"])) {
        $Password = test_input($_POST["Password"]);
        $ConfirmPass = test_input($_POST["ConfirmPass"]);
        if (strlen($_POST["Password"]) <= '8') {
            

        echo '<script type ="text/JavaScript">';  
		echo 'alert("Your Password Must Contain At Least 8 Characters!")';  
		echo '</script>'; 
		
        }
        elseif(!preg_match("#[0-9]+#",$Password)) {
        echo '<script type ="text/JavaScript">';  
		echo 'alert("Your Password Must Contain At Least 1 Number!")';  
		echo '</script>'; 

           
            }
        elseif(!preg_match("#[A-Z]+#",$Password)) {
           
        echo '<script type ="text/JavaScript">';  
		echo 'alert("Your Password Must Contain At Least 1 Capital Letter!")';  
		echo '</script>'; 
            
        }
        elseif(!preg_match("#[a-z]+#",$Password)) {
            echo '<script type ="text/JavaScript">';  
		echo 'alert("Your Password Must Contain At Least 1 Lowercase Letter!")';  
		echo '</script>'; 

        } else {
            echo '<script type ="text/JavaScript">';  
		echo 'alert("Please Check You have Entered Or Confirmed Your Password!")';  
		echo '</script>'; 

           

        }
    }*/
         
   	    echo '<script type ="text/JavaScript">';  
		echo 'alert("Successfully registration done..!")';  
		echo '</script>'; 
		header('location:login.php'); 
   	
   }
   else
   {
   	echo '<script type ="text/JavaScript">';  
		echo 'alert("Registration not done successfully, please register again..!")';  
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
			     <a href="Conatct.php">Contact</a> 
			     
			     
			</nav>
		</header>
		 
			 <div class="formbox">
			 	<div class="formcontainer">
			 		<div class="topHeader">
			 			<h1>Registration</h1>
			 		</div>
					
					<form action="" method="POST">
					<div class="input-box">
						<span class="icon"><ion-icon name="person"></ion-icon></span>
						<input type="text" name="Username" required>
					    <label>Username</label>	
					</div>
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
					<div class="input-box">
						<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
						<input type="password" name="ConfirmPass" required>
					    <label>Confirm Password</label>	
					</div>
					<div class="remember-forgot">
						<label><input type="checkbox" name="T&C" required>I agree to the Terms & Conditions</label>
					</div>
					<a href="login.php"><button type="submit" class="btn" name="register">Register</button></a>
					<div class="login-register">
						<p>Already have an account?<a href="login.php" class="login-link"> Login</a></p>
					</div>
				    </form>
				</div>
			</div>
		
			<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>