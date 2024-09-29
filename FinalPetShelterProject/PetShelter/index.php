<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PetShelter</title>
	<link rel="stylesheet" type="text/css" href="./CSS/style.css">
    
</head>
<body>  
        
	    <img src="./IMAGES/Slider_Image4.jpg">
		<header>
			<h1 class="logo">PetShelter</h1>
            <nav class="navigation">
			     <a href="index.php">Home</a>
			     <a href="Services.php">Services</a>
				 <a href="About.php">About</a>
			     <a href="Contact.php">Contact</a> 
			     
			    <?php

                     if(isset($_POST['login']))
                    {
	                      header('Location : login.php');
                    }

                ?>
               
			     <a href="login.php"><button class="btnLogin-popup" name="login" >Login</button></a>
			     
			     
			</nav>
		</header>
		<div class="content">
			<div class="title">
				Welcome to our 
				<div class="slider">
					<div>PetShelter.</div>
					<div>PetShelter.</div>
					<div>PetShelter.</div>
				</div> 
			</div>
			<p>A Pet’s Love in Unconditional – Help Us Save More Pets</p>
		</div>


		
</body>
</html>